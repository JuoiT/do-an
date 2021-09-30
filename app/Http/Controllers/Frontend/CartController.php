<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\Cart;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Cart $cart)
    {
        $items = $cart->getItems();
        $totalQuantity = $cart->getTotalQuantity();
        $totalPrice = $cart->getTotalPrice();
        return view('frontend.pages.cart', compact('items', 'totalQuantity', 'totalPrice'));
    }

    public function add(Request $req, Cart $cart)
    {
        $product = Product::find($req->product_id);
        $cart->add($product, $req->quantity);
        return redirect()->back();
    }

    public function update(Request $req, Cart $cart)
    {
        $cart->update($req->product_id, $req->quantity);
        return redirect()->back();
    }

    public function removeItem($id)
    {
        $cart = new Cart();
        $cart->removeItem($id);
        return redirect()->back();
    }

    public function removeAll(Cart $cart)
    {
        $cart->removeAll();
    }
}
