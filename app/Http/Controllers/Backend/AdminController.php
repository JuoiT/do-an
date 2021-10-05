<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.pages.home');
    }

    public function login()
    {
        return view('backend.pages.login');
    }

    public function postLogin(Request $req)
    {
        $auth = Auth::attempt($req->only('email', 'password'));
        if ($auth) {
<<<<<<< HEAD
            return redirect()->route('home_admin');
=======
            return redirect()->route('home_admin')->with('message', Auth::user()->name);
>>>>>>> 94aa2b2076858aa675fcfd89267398ee5964a8db
        } else {
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
    }
}
