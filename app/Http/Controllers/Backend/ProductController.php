<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\AddProductRequest;
use App\Http\Requests\Product\EditProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use function PHPSTORM_META\type;
use function PHPUnit\Framework\fileExists;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = Category::all();
        $params = $request->all();
        // dd($params);
        $query = Product::filter($request);

        // Filter here (no more needed)
        // $query = Product::with('category');
        // if ($request->trashed && ($request->trashed) != '') {
        //     session()->put('forms.trashed', $request->trashed);
        //     $query->onlyTrashed();
        // } else {
        //     session()->forget('forms.trashed');
        // }
        // if ($request->category_id && ($request->category_id) != '') {
        //     session()->put('forms.category_id', $request->category_id);
        //     $query->where('category_id', $request->category_id);
        // } else {
        //     session()->forget('forms.category_id');
        // }
        // if ($request->name && ($request->name) != '') {
        //     session()->put('forms.name', $request->name);
        //     $query->where('name', 'like', '%' . $request->name . '%');
        // } else {
        //     session()->forget('forms.name');
        // }
        // if ($request->status && ($request->status) != '') {
        //     session()->put('forms.status', $request->status);
        //     $query->where('status', $request->status);
        // } else {
        //     session()->forget('forms.status');
        // }
        // if ($request->orderBy && $request->orderByRole && $request->orderBy != '' && $request->orderByRole != '') {
        //     session()->put('forms.orderBy', $request->orderBy);
        //     session()->put('forms.orderByRole', $request->orderByRole);
        //     $query->orderBy($request->orderBy, $request->orderByRole == '0' ? 'desc' : 'asc');
        // } else {
        //     session()->forget('forms.orderBy');
        //     session()->forget('forms.orderByRole');
        // }

        $list_product = $query->paginate(5);

        return view('backend.pages.product.list-product', compact('list_product', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.pages.product.add-product', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddProductRequest $request, Product $product)
    {

        // insert product to db
        $insertedProduct = $product->add($request);

        // upload des_image
        if ($request->des_image) {
            $product->upDesImages($request->des_image, $insertedProduct->id);
        }
        return redirect(route('product.index'));
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
        $product = Product::find($id);
        $categories = Category::all();
        // $desImages = ProductImage::where('product_id', $id)->get();
        // dd($desImages);
        return view('backend.pages.product.edit-product', compact('product', 'categories', 'desImages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditProductRequest $request, $id)
    {
        $product = new Product();
        $productImage = new ProductImage();

        $updateProduct = Product::find($id);
        $imageName = $updateProduct->image;
        $listOldDesImage = $productImage::where('product_id', $id)->get();

        // get product.image first, move uploaded image
        if ($request->image) {
            $upImage = $request->image;
            $imageName = time() . $upImage->getClientOriginalName();
            $upImage->move(config('const.imagePath'), $imageName);

            // delete old image
            File::delete(config('const.imagePath') . '/' . $updateProduct->image);
        }

        $updateProduct = $updateProduct->edit($updateProduct, $request, $imageName);
        $updateProduct->save();

        // upload new des image/ remove old des_image
        if ($request->des_image) {
            $product->removeOldDesImages($id);
            $product->upDesImages($request->des_image, $id);
        }
        return redirect(route('product.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        // move to trash - force delete from trashed
        if ($product->deleted_at != null)
            $product->forceDelete();
        else
            $product->delete();
    }
}
