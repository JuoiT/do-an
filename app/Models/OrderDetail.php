<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class OrderDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['product_id', 'price', 'quantity', 'order_id'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function add($items, $orderId)
    {
        $orderDetail = OrderDetail::create([
            'order_id' => $orderId,
            'product_id' => $items->product_id,
            'price' => $items->price,
            'quantity' => $items->quantity
        ]);

        return $orderDetail;
    }
}
