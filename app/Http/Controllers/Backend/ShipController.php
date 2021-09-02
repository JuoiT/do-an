<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ship\AddShipRequest;
use App\Http\Requests\Ship\EditShipRequest;
use App\Models\Ship;
use Illuminate\Http\Request;

class ShipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_ship = Ship::paginate(5);
        return view('backend.pages.ship.list-ship', compact('list_ship'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.ship.add-ship');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddShipRequest $request)
    {
        $ship = Ship::create($request->all());
        if ($ship) {
            return redirect()->route('ship.index')->with('success', 'Thêm mới đơn vị vận chuyển thành công!');
        } else {
            return redirect()->back()->with('error', 'Thêm mới đơn vị vận chuyển thất bại!');
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
        $ship = Ship::find($id);
        return view('backend.pages.ship.edit-ship', compact('ship'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditShipRequest $request, $id)
    {
        $ship = Ship::find($id);
        $ship->update($request->all());
        if ($ship) {
            return redirect()->route('ship.index')->with('success', 'Sửa thông tin đơn vị vận chuyển thành công!');
        } else {
            return redirect()->back()->with('error', 'Sửa thông tin đơn vị vận chuyển thất bại!');
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
