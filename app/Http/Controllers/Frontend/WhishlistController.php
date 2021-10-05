<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WhishlistController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $products = [];
        if ($user) {
            $favs = Favorite::where('user_id', $user->id)->with('product')->paginate(8);
        }
        return view('frontend.pages.whishlist', compact('favs'));
    }

    public function add(Request $req)
    {
        $product_id = $req->product_id;
        $user_id = Auth::user()->id;
        $newFav = Favorite::create([
            'product_id' => $product_id,
            'user_id' => $user_id,
        ]);

        if ($newFav) {
            toast('Added to whishlist!', 'success');
            return redirect()->back();
        } else {
            toast('Failed to add to whishlist!', 'error');
            return redirect()->back();
        }
    }

    public function remove(Request $req)
    {
        $product_id = $req->product_id;
        $removeFav = Favorite::where('product_id', $product_id);
        if ($removeFav->forceDelete()) {
            toast('Removed from whishlist!', 'success');
            return redirect()->back();
        } else {
            toast('Failed to remove from whishlist!', 'errir');
            return redirect()->back();
        }
    }
}
