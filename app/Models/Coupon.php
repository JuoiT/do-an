<?php

namespace App\Models;

use App\Models\FilterableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coupon extends Model
{
    use HasFactory, SoftDeletes, FilterableTrait;

    protected $table = "coupons";
    protected $fillable = ['name', 'status', 'value', 'code', 'apply', 'start_at', 'end_at', 'limit', 'description'];
    protected $filterable = ['status'];

    public function update_limit($code, $id)
    {
        $coupon = Coupon::find($id);
        $_coupon = $coupon->update([
            'name' => 'ádas',
            'status' => 1,
            'value' => 5,
            'code' => 'zxczxc',
            'apply' => 30,
            'start_at' => '2021-10-01 09:40:23',
            'end_at' => '2021-10-03 09:40:23',
            'limit' => 3,
            'description' => 'sdgsdgdgdf',
        ]);
        return $_coupon;
        // return $coupon;
    }

    public function filterName($query, $value)
    {
        return $query->where('name', 'LIKE', '%' . $value . '%');
    }

    public function filterTrashed($query, $value)
    {
        if ($value == 'true') {
            $query->onlyTrashed();
        }
        return $query;
    }
}
