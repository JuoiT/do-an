<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\Cart;
use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Payment;
use App\Models\Ship;
use Carbon\Carbon;
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

        $couponActive = null;
        if ($request->has('coupon')) {
            $coupon = Coupon::where('code', $request->coupon)
                ->where('limit', '>', 0)
                ->whereDate('start_at', '<', Carbon::now()->format('Y-m-d H:i:m'))
                ->whereDate('end_at', '>', Carbon::now()->format('Y-m-d H:i:m'))->get();
            if (count($coupon) > 0) {
                if ($coupon[0]->apply <= $totalPrice) {
                    $couponActive = $coupon[0];
                    toast('Applied coupon!', 'success');
                } else {
                    toast('Your order does not qualify for this coupon!', 'error');
                }
            } else {
                toast('Coupon code doesn\'t exist or coupon expired!', 'error');
            }
        }

        // coupon value = 0 (free ship), > 0 (discount)
        if ($couponActive) {
            if ($couponActive->value == 0 && $couponActive->apply < $totalPrice) {
                $shipDefault->price = 0;
            }
            if ($couponActive->value > 0 && $couponActive->apply < $totalPrice) {
                $totalPrice = $totalPrice - $couponActive->value;
            }
        }

        return view('frontend.pages.checkout', compact('items', 'totalQuantity', 'totalPrice', 'ships', 'shipDefault', 'payments', 'paymentDefault', 'couponActive'));
    }

    public function submit(Request $request, Order $order, OrderDetail $orderDetail, Coupon $coupon, Cart $cart)
    {
        // dd($request->all());

        // check if user already use coupon
        if ($request->coupon_id) {
            $count = $order::where('user_id', $request->user_id)->where('coupon_id', $request->coupon_id)->count();
            if ($count > 0) {
                toast('You already use this coupon!');
                return redirect()->back();
            }
        }

        $isDone = false;
        // add Order first
        $creatingOrder = $order->add($request);

        if ($creatingOrder) {
            $orderId = $creatingOrder->id;
            $listItem = json_decode($request->items);

            // add OrderDetails
            foreach ($listItem as $key => $value) {
                $creatingOrderDetail = $orderDetail->add($value, $orderId);
                if (!$creatingOrderDetail) {
                    return $isDone;
                }
            }
        } else {
            return $isDone;
        }

        // update coupon limit
        if ($request->coupon_id) {
            $updatingCoupon = $coupon::find($request->coupon_id);
            $newLimit = $updatingCoupon->limit - 1;
            $updatingCoupon->limit = $newLimit;
            $updatingCoupon->save();
        }

        // remove all item in cart

        // $cart->removeAll();

        $isDone = true;
        return $isDone;
    }
}
