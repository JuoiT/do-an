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

    public function profile()
    {
        return view('backend.pages.profile');
    }

    public function login()
    {
        return view('backend.pages.login');
    }

    public function postLogin(Request $req)
    {
        $auth = Auth::attempt($req->only('email', 'password'));
        if ($auth) {
            return redirect()->route('home_admin')->with('message', Auth::user()->name);
        } else {
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
    }
}
