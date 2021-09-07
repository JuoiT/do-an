<?php

namespace App\Models;

use Illuminate\Http\Request;

trait FilterableTrait
{
    public function scopeFilter(Request $params)
    {
        $query = Product::with('category');
        dd($params);
        foreach ($params as $field => $value) {
            // vd: filterStatus
            $method = 'filter' . Str::studly($field);

            if ($value === '') {
                continue;
            }

            // Kiem tra neu method ton tai thi call
            dd($method);

            if (method_exists($this, $method)) {
                $this->{$method}($query, $value);
                continue;
            }

            if (empty($this->filterable) || !is_array($this->filterable)) {
                continue;
            }

            if (in_array($field, $this->filterable)) {
                $query->where($this->table . '.' . $field, $value);
                continue;
            }
        }

        return $query;
    }
}
