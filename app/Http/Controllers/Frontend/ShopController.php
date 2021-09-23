<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
class ShopController extends Controller
{
    public function home()
    {
        $new_product = Product::orderBy('created_at', 'DESC')->limit(6)->get();
        $best_seller = Product::where('sale_price', '>', '0')->get();
        $category = Category::all();
        return view('frontend.pages.home', compact('new_product', 'category'));
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

    public function register()
    {
        return view('frontend.pages.register');
    }

    public function login()
    {
        return view('frontend.pages.login');
    }

    public function blog()
    {
        return view('frontend.pages.blog');
    }

    public function blog_detail()
    {
        return view('frontend.pages.blog-detail');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }
}
