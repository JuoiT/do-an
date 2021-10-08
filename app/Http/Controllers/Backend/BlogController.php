<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $params = $request->all();

        if (count($params) <= 1) {
            // for paginate / redirect, get old filter value from session
            $params = session()->get("filter.blogs");
        }

        $query = Blog::filter($params);
        // config("const.records") số lượng hiển thị chung trên trang admin
        $list_blog = $query->paginate(config("const.records"));
        return view('backend.pages.blog.list-blog', compact('list_blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.blog.add-blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Blog $blog)
    {

        // insert blog to db
        $insertedBLog = $blog->add($request);

        // upload des_image
        if ($insertedBLog) {
            return redirect(route('blog.index'))->with('success', 'Created new blog!');
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
        $blog = Blog::find($id);
        return view('backend.pages.blog.edit-blog', compact('blog'));
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
        $updateBlog = Blog::find($id);
        $imageName = $updateBlog->avatar;
        // get blog.image first, move uploaded image
        if ($request->avatar) {
            $upImage = $request->avatar;
            $imageName = null;
            if ($upImage) {
                $imageName = time() . $upImage->getClientOriginalName();
                $upImage->move(config('const.imageBlog'), $imageName);
            }

            // dd($imageName);
            // delete old image
            File::delete(config('const.imageBlog') . '/' . $updateBlog->image);
        }

        $updateBlog = $updateBlog->edit($updateBlog, $request, $imageName);
        $updateBlog->save();

        return redirect(route('blog.index'))->with('success', 'Edited blog!');
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
