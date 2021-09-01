<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function home()
    {
        return view('frontend.pages.home');
    }

    public function product()
    {
        return view('frontend.pages.product');
    }

    public function detail()
    {
        return view('frontend.pages.detail');
    }

    public function cart()
    {
        return view('frontend.pages.cart');
    }

    public function checkout()
    {
        return view('frontend.pages.checkout');
    }

    public function whishlist()
    {
        return view('frontend.pages.whishlist');
    }

    public function my_account()
    {
        return view('frontend.pages.my-account');
    }
}
