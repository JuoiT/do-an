<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Payment;
use App\Models\Ship;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Else_;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_order = Order::orderBy('created_at', 'DESC')->paginate(5);
        return view('backend.pages.order.list-order', compact('list_order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Order::find($id);
        $payment = Payment::find($customer->payment_id);
        $coupon = Coupon::find($customer->coupon_id);
        $ship = Ship::find($customer->ship_id);
        $detail = OrderDetail::where('order_id', $id)->get();
        return view('backend.pages.order.detail', compact('customer', 'detail', 'coupon', 'payment', 'ship'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        if ($order->status > $request->status) {
            return redirect()->back()->with('error', 'S???a th??ng tin ????n h??ng th???t b???i!');
        }else {
            $order->update([
                'status' => $request->status,
            ]);
            return redirect()->back()->with('success', 'S???a th??ng tin ????n h??ng th??nh c??ng!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
