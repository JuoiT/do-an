<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\Cart;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Ship;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(Request $request, Cart $cart, Ship $ship, Payment $payment)
    {
        $items = $cart->getItems();
        $totalQuantity = $cart->getTotalQuantity();
        $totalPrice = $cart->getTotalPrice();

        $ships = $ship->all();
        $shipDefault = $ships[0];   
        if ($request->has('ship_id')) {
            $shipDefault = $ship->find($request->ship_id);
        }
        
        $payments = $payment->all();

        $paymentDefault = $payment[0];
        if ($request->has('payment_id')) {
            $paymentDefault = $payment->find($request->payment_id);
        }
        return view('frontend.pages.checkout', compact('items', 'totalQuantity', 'totalPrice', 'ships', 'shipDefault', 'payments', 'paymentDefault'));
    }

    public function submit(Request $req)
    {
        dd($req->all());
    }
}
