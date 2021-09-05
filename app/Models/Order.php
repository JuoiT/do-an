<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['payment_id', 'ship_id', 'user_id', 'coupon_id', 'status', 'total_price', 'quantity', 'description'];

    public function update_order($request, $id)
    {
        $update_order = Order::find($id);
        if ($update_order->status > $request->status) {
            return redirect()->back()->with('error', 'Sửa thông tin đơn hàng thất bại!');
        }else {
            $update_order->update([
                'status' => $request->status,
            ]);
        }
        return $update_order;
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function ship()
    {
        return $this->hasOne(Ship::class);
    }

    public function coupon()
    {
        return $this->hasOne(Coupon::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
