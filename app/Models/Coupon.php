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
    protected $fillable = ['name', 'status', 'value', 'start_at', 'end_at', 'limit', 'description'];
    protected $filterable = ['status'];


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
