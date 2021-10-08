<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
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

    public function postLogin(LoginRequest $req)
    {
        $auth = Auth::attempt($req->only('email', 'password'), $req->has('remember') ? true : false);
        if ($auth) {
            return redirect()->route('home_admin')->with('success', 'Welcome! ' . Auth::user()->name);
        } else {
            return redirect()->back()->with('error', 'Wrong information!');
        }
    }

    public function logout()
    {
        Auth::logout();
    }
}
