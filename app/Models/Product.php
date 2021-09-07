<?php

namespace App\Models;

use App\Models\Filterable as ModelsFilterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\File;

class Product extends Model
{
    use HasFactory, SoftDeletes, ModelsFilterable;

    protected $fillable = ['name', 'status', 'image', 'price', 'sale_price', 'category_id', 'description'];
    protected $filterable = ['status', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function productImages()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function add($req)
    {
        // get product.image first, move uploaded image
        $upImage = $req->image;
        $imageName = time().$upImage->getClientOriginalName();
        $upImage->move(config('const.imagePath'), $imageName);
        $product = Product::create([
            'name' => trimm($req->name),
            'price' => $req->price,
            'sale_price' => $req->sale_price,
            'image' => $imageName,
            'status' => $req->status,
            'category_id' => $req->category_id,
            'description' => $req->description,
        ]);

        return $product;
    }

    public function edit($product, $req, $imageName)
    {
        $product->name = $req->name;
        $product->price = $req->price;
        $product->sale_price = $req->sale_price;
        $product->image = $imageName;
        $product->status = $req->status;
        $product->category_id = $req->category_id;
        $product->description = $req->description;

        return $product;
    }

    public function upDesImages($desImages, $productId)
    {
        // dd($desImages);
        foreach ($desImages as $image) {
            // get files name, move files
            $imageName = time() . $image->getClientOriginalName();
            $image->move(config('const.desImagePath'), $imageName);

            // insert to product_image table
            ProductImage::create([
                'product_id' => $productId,
                'image' => $imageName
            ]);
        }
    }

    public function removeOldDesImages($productId)
    {
        $oldDesImages = ProductImage::where('product_id', $productId)->get();
        foreach ($oldDesImages as $oldDesImage) {
            File::delete(config('const.desImagePath') . '/' . $oldDesImage->image);
            $oldDesImage->forceDelete();
        }
    }

    // For filter
    public function filterName($query, $value)
    {
        return $query->where('name', 'LIKE', '%' . $value . '%');
    }

    // No more needed
    // public function filterStatus($query, $value)
    // {
    //     return $query->where('status', $value);
    // }
    // public function filterCategory($query, $value)
    // {
    //     return $query->where('category_id', $value);
    // }

    public function filterTrashed($query, $value)
    {
        if ($value == 'true') {
            return $query->onlyTrashed();
        }
    }
}
