<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(Request $request, Cart $cart)
    {
        $items = $cart->getItems();
        $totalQuantity = $cart->getTotalQuantity();
        $totalPrice = $cart->getTotalPrice();
        return view('frontend.pages.checkout', compact('items', 'totalQuantity', 'totalPrice'));
    }
}
