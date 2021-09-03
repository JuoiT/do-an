<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'status', 'image', 'price', 'sale_price', 'category_id', 'description'];

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

    public function add($req, $imageName)
    {
        $product = Product::create([
            'name'=> $req->name, 
            'price'=> $req->price, 
            'sale_price'=> $req->sale_price, 
            'image'=> $imageName, 
            'status'=> $req->status, 
            'category_id'=> $req->category_id, 
            'description'=> $req->description, 
        ]);

        return $product;
    }

    public function upDesImages($desImages, $productId)
    {
        foreach ($desImages as $image) {
            // get files name, move files
            $imageName = time().$image->getClientOriginalName();
            $image->move(config('const.desImagePath'), $imageName);

            // insert to product_image table
            ProductImage::create([
                'product_id' => $productId, 
                'image' => $imageName
            ]);
        }
    }
}