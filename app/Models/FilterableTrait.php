<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

trait FilterableTrait
{
    // For filter
    public function scopeFilter($query, Request $request)
    {
        $params = $request->all();
        if (!in_array("trashed", $params)) {
            session()->forget("forms.trashed");
        }
        $query = Product::with('category');

        foreach ($params as $field => $value) {
            // vd: filterStatus
            $method = 'filter' . Str::studly($field);

            if ($value === '' || $value == null) {
                session()->forget("forms.$field");
                continue;
            }

            // Kiem tra neu method ton tai thi call
            if (method_exists($this, $method)) {
                session()->put("forms.$field", $value);
                $this->{$method}($query, $value);
            }

            if (empty($this->filterable) || !is_array($this->filterable)) {
                continue;
            }

            // Filter truc tiep tu truong filterable
            if (in_array($field, $this->filterable)) {
                session()->put("forms.$field", $value);
                $query->where($this->table . '.' . $field, $value);
                continue;
            }
        }

        // $this->scopeOrderBy($params['orderBy'], $params['orderByRole']);
        if (array_key_exists("orderBy", $params) && array_key_exists("orderByRole", $params)) {
            if ($params["orderBy"] != "" && $params["orderByRole"] != "" && $params["orderBy"] && $params["orderByRole"]) {
                session()->put("forms.orderBy", $params['orderBy']);
                session()->put("forms.orderByRole", $params['orderByRole']);

                // dd($this->table . '.' . $params['orderBy'], $params['orderByRole']);
                return $query->orderBy($this->table . '.' . $params['orderBy'], $params['orderByRole']);
                // dd($query);
            }
        }

        return $query;
    }
}
