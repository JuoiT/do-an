<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Payment\AddPaymentRequest;
use App\Http\Requests\Payment\EditPaymentRequest;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_payment = Payment::paginate(5);
        return view('backend.pages.payment.list-payment', compact('list_payment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.payment.add-payment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddPaymentRequest $request)
    {
        $payment = Payment::create($request->all());
        if ($payment) {
            return redirect()->route('payment.index')->with('success', 'Thêm mới phương thức thanh toán thành công!');
        } else {
            return redirect()->back()->with('error', 'Thêm mới phương thức thanh toán thất bại!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payment = Payment::find($id);
        return view('backend.pages.payment.edit-payment', compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditPaymentRequest $request, $id)
    {
        $payment = Payment::find($id);
        $payment->update($request->all());
        if ($payment) {
            return redirect()->route('payment.index')->with('success', 'Sửa thông tin phương thức thanh toán thành công!');
        } else {
            return redirect()->back()->with('error', 'Sửa thông tin phương thức thanh toán thất bại!');
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
