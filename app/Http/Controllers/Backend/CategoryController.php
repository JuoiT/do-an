<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\AddCategoryRequest;
use App\Http\Requests\Category\EditCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // session()->forget("filter.categories");
        $params = $request->all();
        if (count($params)<=1) {
            // for paginate / redirect, get old filter value from session
            $params = session()->get("filter.categories");
        }

        $query = Category::filter($params);
        $list_category = $query->withCount('products')->paginate(config("const.records"));
        return view('backend.pages.category.list-category', compact('list_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.category.add-category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddCategoryRequest $request)
    {
        $category = Category::create($request->all());
        if ($category) {
            toast('Thêm danh mục thành công!','success');
            return redirect()->route('category.index');
        } else {
            toast('Thêm mới danh mục thất bại!','error');
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
        $category = Category::find($id);
        return view('backend.pages.category.edit-category', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditCategoryRequest $request, $id)
    {
        $category = Category::find($id);
        $category->update($request->all());
        if ($category) {
            toast('Sửa danh mục thành công!','success');
            return redirect()->route('category.index');
        } else {
            toast('Sửa danh mục thất bại!!','success');
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
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Xóa danh mục thành công!');
    }

    public function restore($id)
    {
        $category = Category::onlyTrashed()->find($id);
        $category->restore();

        return redirect(route('category.index'))->with('success', 'Khôi phục danh mục thành công!');
    }
}
