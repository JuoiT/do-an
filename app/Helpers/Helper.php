<?php

/**
 * Format định dạng ngày giờ theo chuẩn VN
 */

use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

if (!function_exists('formatDate')) {
    function formatDate($date, string $format = 'd/m/Y')
    {
        if ($date instanceof \Carbon\Carbon) {
            return $date->format($format);
        }

        return $date;
    }
}

/**
 * Loại bỏ khoảng trắng thừa, ký tự đặc biệt khỏi chuối
 * @string
 */
if (!function_exists('trimm')) {
    function trimm($string)
    {
        $string = trim($string);
        while (Str::contains($string, "  ")) {
            $string = Str::replace("  ", " ", $string);
        }
        return $string;
    }
}

/**
 * Chuyển giá sang tiền việt
 * @float
 */
if (!function_exists('toVnd')) {
    function toVnd($price)
    {
        $result = number_format($price, 0, '.', ',') . 'đ';
        return $result;
    }
}

/**
 * Chuyển giá sang Dola
 * @float
 */
if (!function_exists('toUsd')) {
    function toUsd($price)
    {
        $result = '$' . number_format($price, 0, '.', '.');
        return $result;
    }
}

/**
 * Check favorite
 * Return true if favorited
 * @unsigned int
 */
if (!function_exists('isFavorited')) {
    function isFavorited($product_id)
    {
        $whishList = [];
        if (Auth::user()) {
            $user_id = Auth::user()->id;
            $whishList = Favorite::where('user_id', $user_id)->get();
        }
        $result = false;

        foreach ($whishList as $key => $value) {
            if ($value->product_id == $product_id) {
                $result = true;
                break;
            }
        }

        return $result;
    }
}

/**
 * Check favorite
 * Return true if favorited
 * @unsigned int
 */
if (!function_exists('countFavorited')) {
    function countFavorited()
    {
        $count = '';
        if (Auth::user()) {
            $user_id = Auth::user()->id;
            $count = Favorite::where('user_id', $user_id)->count();
        }

        return $count;
    }
}

/**
 * Check favorite
 * Return true if favorited
 * @unsigned int
 */
if (!function_exists('checkLogin')) {
    function checkLogin()
    {
        if (!Auth::user()) {
            return false;
        }
        return true;
    }
}
