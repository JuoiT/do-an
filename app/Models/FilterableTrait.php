<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
trait FilterableTrait
{
    // For filter
    public function scopeFilter($query, $params)
    {
        if (!$params) {
            return $query;
        }

        if (!in_array("trashed", $params)) {
            session()->forget("filter.$this->table.trashed");
        }

        foreach ($params as $field => $value) {
            // vd: filterStatus
            $method = 'filter' . Str::studly($field);

            if ($value === '' || $value == null) {
                session()->forget("filter.$this->table.$field");
                continue;
            }

            // Kiem tra neu method ton tai thi call
            if (method_exists($this, $method)) {
                session()->put("filter.$this->table.$field", $value);
                $this->{$method}($query, $value);
            }

            if (empty($this->filterable) || !is_array($this->filterable)) {
                continue;
            }

            if (empty($this->_filterable) || !is_array($this->_filterable)) {
                continue;
            }

            // Filter truc tiep tu truong filterable
            if (in_array($field, $this->filterable)) {
                session()->put("filter.$this->table.$field", $value);
                $query->where($this->table . '.' . $field, $value);
                continue;
            }
            if (in_array($field, $this->_filterable)) {
                session()->put("filter.$this->table.$field", $value);
                $query->where($this->table . '.' . $field, $value);
                continue;
            }
        }

        // $this->scopeOrderBy($params['orderBy'], $params['orderByRole']);
        if (array_key_exists("orderBy", $params) && array_key_exists("orderByRole", $params)) {
            if ($params["orderBy"] != "" && $params["orderByRole"] != "" && $params["orderBy"] && $params["orderByRole"]) {
                session()->put("filter.$this->table.orderBy", $params['orderBy']);
                session()->put("filter.$this->table.orderByRole", $params['orderByRole']);

                // filter if product has sale_price
                if ($params['orderBy'] == 'product_price') {
                    $role = $params['orderByRole'];

                    return $query
                    ->orderByRaw("CASE WHEN products.sale_price > 0 THEN sale_price ELSE price END $role");
                }
                // orderBy count of order details
                if ($params['orderBy'] == 'order_details_count') {
                    $role = $params['orderByRole'];

                    return $query
                    ->withCount('orderDetails')->orderBy('order_details_count', $role);
                }
                // orderBy count of products
                if ($params['orderBy'] == 'products_count') {
                    $role = $params['orderByRole'];

                    return $query
                    ->withCount('products')->orderBy('products_count', $role);
                }
                return $query->orderBy($this->table . '.' . $params['orderBy'], $params['orderByRole']);
            }
        }

        return $query;
    }
}
