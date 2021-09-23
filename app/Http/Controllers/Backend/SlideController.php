<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Slide\AddSlideRequest;
use App\Http\Requests\Slide\EditSlideRequest;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SlideController extends Controller
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

        $query = Slide::filter($params);
        $list_slide = $query->paginate(config("const.records"));

        return view('backend.pages.slide.list-slide', compact('list_slide'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.slide.add-slide');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddSlideRequest $request, Slide $add_slide)
    {
        $slide = $add_slide->add_slide($request);
        if ($slide) {
            return redirect()->route('slide.index')->with('success', 'Thêm mới slide thành công!');
        } else {
            return redirect()->back()->with('error', 'Thêm mới slide thất bại!');
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
        $slide = Slide::find($id);
        return view('backend.pages.slide.edit-slide', compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditSlideRequest $request, $id, Slide $edit_slide)
    {
        $slide = $edit_slide->edit_slide($request, $id);
        if ($slide) {
            return redirect()->route('slide.index')->with('success', 'Sửa slide thành công!');
        } else {
            return redirect()->back()->with('error', 'Sửa slide thất bại!');
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
        $slide = Slide::withTrashed()->find($id);
        // move to trash - force delete from trashed
        if ($slide->deleted_at != null)
            $slide->forceDelete();
        else
            $slide->delete();

        return redirect(route('slide.index'));
    }

    public function restore($id)
    {
        $slide = Slide::onlyTrashed($id);
        $slide->restore();

        return redirect(route('slide.index'));
    }
}
