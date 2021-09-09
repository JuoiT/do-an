<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes, FilterableTrait;

    protected $table = "categories";
    protected $fillable = ['name', 'status'];
    protected $filterable = ['status'];

    public function products()
    {
        return $this->hasMany(Product::class);
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