<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {

        return view('frontend.pages.cart');
    }

    public function add()
    {
        dd('them moi');     
    }

    function show()
    {
        dd('show');
    }
}
