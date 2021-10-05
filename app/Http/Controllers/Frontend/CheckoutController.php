<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\Cart;
use App\Http\Controllers\Controller;
use App\Models\Coupon;
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
        $paymentDefault = '';
        if ($request->has('payment_id')) {
            $paymentDefault = $payment->find($request->payment_id);
        }

        $couponValue = -1;
        if ($request->has('coupon')) {
            $coupon = Coupon::where('code', $request->coupon)->get();
            if (count($coupon)>0) {
                $couponValue = $coupon[0]->value;
            }
        }

        return view('frontend.pages.checkout', compact('items', 'totalQuantity', 'totalPrice', 'ships', 'shipDefault', 'payments', 'paymentDefault', 'couponValue'));
    }

    public function submit(Request $request, Coupon $_coupon)
    {
        if ($request->coupon == '') {
            dd('gửi mail');
        }else {
            $list_coupon = Coupon::all();
            foreach ($list_coupon as $value) {
                if ($request->coupon == $value->code && $value->status == 1 && $value->limit > 0) {
                    if ($value->value > 0) {
                        $total = $request->total - $value->value;
                        dd($total);
                        $id_coupon = $value->id;
                        $coupon = Coupon::find($id_coupon);
                        $coupon->update([
                            'name' => $coupon->name,
                            'status' => $coupon->status,
                            'value' => $coupon->value,
                            'code' => $coupon->code,
                            'apply' => $coupon->apply,
                            'start_at' => $coupon->start_at,
                            'end_at' => $coupon->end_at,
                            'limit' => $coupon->limit - 1,
                            'description' => $coupon->description,
                        ]);
                        if ($coupon) {
                            return redirect()->route('home');
                        }else {
                            return redirect()->back();
                        }
                    }
                }elseif ($request->coupon == $value->code) {
                    return redirect()->back();
                }elseif ($value->status == 0) {
                    return redirect()->back();
                }elseif ($value->limit == 0) {
                    return redirect()->back();
                }
            }
        }
    }

}
