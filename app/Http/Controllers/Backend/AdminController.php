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
            return redirect()->route('admin.home_admin');
        } else {
            return redirect()->back();
        }
    }
}
