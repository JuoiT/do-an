<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\Cart;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {

        return view('frontend.pages.cart');
    }

    public function add(Request $req, Cart $cart)
    {
        $product = Product::find($req->product_id);
        $cart->add($product, $req->quantity);
        return redirect()->back();
    }

    function show(Cart $cart)
    {
        dd($cart);
    }
}
