<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Product extends Model
{
    use HasFactory, SoftDeletes;

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
    // public function scopeName($query, $request)
    // {
    //     if($request->name){
    //         $query->where('name', 'LIKE', '%' . $request->name . '%');
    //     }
    //     return $query;
    // }

    // public function scopeStatus($query, $request)
    // {
    //     if($request->status){
    //         $query->where('status', $request->status);
    //     }
    //     return $query;
    // }

    // public function scopeCategoryId($query, $request)
    // {
    //     if($request->category_id){
    //         $query->where('category_id', $request->category_id);
    //     }
    //     return $query;
    // }

    // public function scopeTrashed($query, $request)
    // {
    //     if($request->trashed){
    //         if ($request->trashed == 'true') {
    //             $query->onlyTrashed();
    //         }
    //     }
    //     return $query;
    // }

    // public function scopeFilter($params)
    // {
    //     $query = Product::with('category');
    //     dd($params);
    //     foreach ($params as $field => $value) {
    //         // vd: filterStatus
    //         $method = 'filter' . Str::studly($field);

    //         if ($value === '') {
    //             continue;
    //         }

    //         // Kiem tra neu method ton tai thi call
    //         dd($method);

    //         if (method_exists($this, $method)) {
    //             $this->{$method}($query, $value);
    //             continue;
    //         }

    //         if (empty($this->filterable) || !is_array($this->filterable)) {
    //             continue;
    //         }

    //         if (in_array($field, $this->filterable)) {
    //             $query->where($this->table . '.' . $field, $value);
    //             continue;
    //         }
    //     }

    //     return $query;
    // }
}
