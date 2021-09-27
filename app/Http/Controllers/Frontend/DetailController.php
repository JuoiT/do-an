<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddCommentRequest;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detail($id)
    {
        $product = Product::with('productImages', 'category')->find($id);
        $comments = Comment::where('product_id', $id)->orderBy('created_at', 'DESC')->limit(3)->get();
        $relatedProducts = Product::where('category_id', $product->category->id)->orderBy('created_at', 'DESC')->limit(6)->get();
        return view('frontend.pages.detail', compact('product', 'comments', 'relatedProducts'));
    }

    public function addComment(AddCommentRequest $req, Comment $cmt)
    {
        $comment = $cmt->add($req);
        return redirect()->back();
    }
}
