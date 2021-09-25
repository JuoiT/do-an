<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detail($id)
    {
        $product = Product::with('productImages', 'category')->find($id);
        return view('frontend.pages.detail', compact('product'));
    }
}
