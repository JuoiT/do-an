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
        $new_product = Product::orderBy('created_at', 'DESC')->limit(5)->get();
        $category = Category::all();
        return view('frontend.pages.home', compact('new_product', 'category'));
    }

    public function product()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('frontend.pages.product', compact('products', 'categories'));
    }

    public function filter(Request $request)
    {
        $params = $request->all();
        $params['orderByRole'] = 'desc';
        if ($params['orderBy'] == 'price-desc') {
            $params['orderBy'] = 'product_price';
        }
        if ($params['orderBy'] == 'price-asc') {
            $params['orderBy'] = 'product_price';
            $params['orderByRole'] = 'asc';
        }

        $query = Product::filter($params);
        $products = $query->with('category')->paginate(9);

        return view('frontend.pages.ajax.filter', compact('products'));
    }

    // public function detail()
    // {
    //     return view('frontend.pages.detail');
    // }

    // public function cart()
    // {
    //     return view('frontend.pages.cart');
    // }

    // public function checkout()
    // {
    //     return view('frontend.pages.checkout');
    // }

    // public function whishlist()
    // {
    //     return view('frontend.pages.whishlist');
    // }

    // public function my_account()
    // {
    //     return view('frontend.pages.my-account');
    // }

    // public function register()
    // {
    //     return view('frontend.pages.register');
    // }

    // public function login()
    // {
    //     return view('frontend.pages.login');
    // }

    // public function blog()
    // {
    //     return view('frontend.pages.blog');
    // }

    // public function blog_detail()
    // {
    //     return view('frontend.pages.blog-detail');
    // }

    // public function contact()
    // {
    //     return view('frontend.pages.contact');
    // }
}
