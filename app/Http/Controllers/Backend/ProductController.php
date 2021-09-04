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
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\fileExists;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_product = Product::with('category')->paginate(5);
        return view('backend.pages.product.list-product', compact('list_product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('backend.pages.product.add-product', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddProductRequest $request, Product $product)
    {
        // get product.image first, move uploaded image
        $upImage = $request->image;
        $imageName = time() . $upImage->getClientOriginalName();
        $upImage->move(config('const.imagePath'), $imageName);

        // insert product to db
        $insertedProduct = $product->add($request, $imageName);

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
        $category = Category::all();
        return view('backend.pages.product.edit-product', compact('product', 'category'));
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
            File::delete(config('const.imagePath').'/'.$updateProduct->image);
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
        //
    }
}
