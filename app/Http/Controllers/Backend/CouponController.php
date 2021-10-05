<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Coupon\AddCouponRequest;
use App\Http\Requests\Coupon\EditCouponRequest;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // session()->forget("filter.coupons");
        $params = $request->all();
        if (count($params)<=1) {
            // for paginate / redirect, get old filter value from session
            $params = session()->get("filter.coupons");
        }
        $query = Coupon::filter($params);
        $list_coupon = $query->paginate(config("const.records"));
        return view('backend.pages.coupon.list-coupon', compact('list_coupon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.coupon.add-coupon');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddCouponRequest $request)
    {
        $coupon = Coupon::create($request->all());
        if ($coupon) {
            toast('Thêm coupon thành công!','success');
            return redirect()->route('coupon.index');
        } else {
            toast('Thêm mới coupon thất bại!','error');
            return redirect()->back();
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
        $coupon = Coupon::find($id);
        return view('backend.pages.coupon.edit-coupon', compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditCouponRequest $request, $id)
    {
        $coupon = Coupon::find($id);
        $coupon->update($request->all());
        if ($coupon) {
            toast('Sửa coupon thành công!','success');
            return redirect()->route('coupon.index');
        } else {
            toast('Sửa coupon thất bại!!','error');
            return redirect()->back();
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
        $coupon = Coupon::find($id);
        $coupon->delete();
        return redirect()->route('coupon.index')->with('success', 'Xóa coupon thành công!');
    }

    public function restore($id)
    {
        $coupon = Coupon::onlyTrashed()->find($id);
        $coupon->restore();

        return redirect(route('coupon.index'))->with('success', 'Khôi phục coupon thành công!');
    }
}
