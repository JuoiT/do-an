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
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(Request $request, Cart $cart, Ship $ship, Payment $payment)
    {
        $items = $cart->getItems();
        $ships = $ship->all();
        $payments = $payment->all();

        return view('frontend.pages.checkout', compact('ships',  'payments', 'items'));
    }

    public function getTable(Request $request, Ship $ship, Payment $payment, Order $order, Cart $cart)
    {
        $items = $cart->getItems();
        $totalQuantity = $cart->getTotalQuantity();
        $totalPrice = $cart->getTotalPrice();

        $ships = $ship->limit(1)->get();
        $shipDefault = $ships[0];
        if ($request->has('ship_id')) {
            $shipDefault = ($ship->find($request->ship_id));
        }

        $invalidCouponMessage = null;
        $couponActive = null;
        $couponFound = null;
        if ($request->has('coupon')) {
            // check if coupon exist
            if ($request->coupon) {
                $coupon = Coupon::where('code', $request->coupon)
                    ->where('limit', '>', 0)
                    ->whereDate('start_at', '<', Carbon::now()->format('Y-m-d H:i:m'))
                    ->whereDate('end_at', '>', Carbon::now()->format('Y-m-d H:i:m'))->get();

                if (count($coupon) > 0) {
                    $couponFound = $coupon[0];
                    // pre-check if user already use this coupon
                    $count = $order::where('user_id', Auth::user()->id)->where('coupon_id', $coupon[0]->id)->count();

                    if ($count > 0) {
                        $invalidCouponMessage = 'You already use this coupon!';
                    } else if ($coupon[0]->apply <= $totalPrice) {
                        $couponActive = $couponFound;
                    } else {
                        $invalidCouponMessage = 'Your order does not qualify for this coupon!';
                    }
                } else {
                    $invalidCouponMessage = 'Coupon code doesn\'t exist or coupon expired!';
                }
            }
        }

        // coupon value = 0 (free ship), > 0 (discount)
        $newShip = null;
        $newTotalPrice = null;
        if ($couponActive) {
            if ($couponActive->value == 0 && $couponActive->apply <= $totalPrice) {
                $newShip = 0;
                $newTotalPrice = $totalPrice;
            }
            if ($couponActive->value > 0 && $couponActive->apply <= $totalPrice) {
                $newTotalPrice = $totalPrice + $shipDefault->price - $couponActive->value;
            }
        }

        return view('frontend.pages.ajax.checkout-table', compact('items', 'totalQuantity', 'totalPrice', 'couponActive', 'shipDefault', 'invalidCouponMessage', 'newShip', 'newTotalPrice', 'couponFound'));
    }

    public function submit(Request $request, Order $order, OrderDetail $orderDetail, Coupon $coupon, Cart $cart, Ship $ship)
    {
        // check if user already use coupon
        if ($request->coupon_id) {
            $count = $order::where('user_id', $request->user_id)->where('coupon_id', $request->coupon_id)->count();
            if ($count > 0) {
                toast('You already use this coupon!');
                return redirect()->back();
            }
        }

        $isFail = false;
        // add Order first
        $totalPrice = $cart->getTotalPrice();
        $totalQuantity = $cart->getTotalQuantity();

        $shipPrice = $ship->find($request->ship_id)->price;
        $newTotalPrice = $totalPrice+$shipPrice;

        $couponActive = $coupon->find($request->coupon_id);
        if ($couponActive) {
            if ($couponActive->value == 0 && $couponActive->apply < $totalPrice) {
                $newTotalPrice = $totalPrice;
            }
            if ($couponActive->value > 0 && $couponActive->apply < $totalPrice) {
                $newTotalPrice = $totalPrice + $shipPrice - $couponActive->value;
            }
        }
        $creatingOrder = $order->add($request, $newTotalPrice, $totalQuantity);

        if ($creatingOrder) {
            $orderId = $creatingOrder->id;
            $listItem = $cart->getItems();

            // add OrderDetails
            foreach ($listItem as $key => $value) {
                $creatingOrderDetail = $orderDetail->add($value, $orderId);
                if (!$creatingOrderDetail) {
                    $this->submitFail();
                }
            }
        } else {
            $this->submitFail();
        }

        // update coupon limit
        if ($request->coupon_id) {
            $updatingCoupon = $coupon::find($request->coupon_id);
            $newLimit = $updatingCoupon->limit - 1;
            $updatingCoupon->limit = $newLimit;
            $updatingCoupon->save();
        }

        // remove all item in cart
        $cart->removeAll();
        toast('Order successfully! We will connect you soon!', 'success');
        return redirect()->route('home');
    }

    public function submitFail()
    {
        toast('Failed to create your order! Please try again...', 'error');
        return redirect()->back();
    }
}
