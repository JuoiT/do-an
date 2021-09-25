<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Banner\AddBannerRequest;
use App\Http\Requests\Banner\EditBannerRequest;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $params = $request->all();
        if (count($params)<=1) {
            // for paginate / redirect, get old filter value from session
            $params = session()->get("filter.slides");
        }

        $query = Banner::filter($params);
        $list_banner = $query->paginate(config("const.records"));
        return view('backend.pages.banner.list-banner', compact('list_banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.banner.add-banner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddBannerRequest $request, Banner $add_banner)
    {
        $list_pro = Banner::where('role', '1')->where('status', '1')->count();
        $list_blog = Banner::where('role', '0')->where('status', '1')->count();

        if ($list_pro >= 3 && $request->role == '1' || $list_blog >= 4 && $request->role == '0') {
            $request->status = '0';
        }

        $banner = $add_banner->add_banner($request);
        if ($banner) {
            return redirect()->route('banner.index')->with('success', 'Thêm mới banner thành công!');
        } else {
            return redirect()->back()->with('error', 'Thêm mới banner thất bại!');
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
        $banner = Banner::find($id);
        return view('backend.pages.banner.edit-banner', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditBannerRequest $request, $id, Banner $edit_banner)
    {
        $banner = $edit_banner->edit_banner($request, $id);
        if ($banner) {
            return redirect()->route('banner.index')->with('success', 'Sửa banner thành công!');
        } else {
            return redirect()->back()->with('error', 'Sửa banner thất bại!');
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
