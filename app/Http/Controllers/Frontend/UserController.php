<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register()
    {
        return view('frontend.pages.register');
    }

    public function login()
    {
        // Check if remembered customer
        if (!Auth::viaRemember()) {
            return view('frontend.pages.login');
        }
    }

    public function postRegister(RegisterRequest $req)
    {
        $user = new User();

        $newUser = $user->add($req);

        if ($newUser) {
            return redirect()->route('login')->with('success', 'Tạo tài khoản thành công!');
        } else {
            return redirect()->back()->with('error', 'Tạo tài khoản thất bại!');
        }
    }

    public function postLogin(Request $req)
    {
        $remember = $req->remember;
        if ($req->has('email')) {
            $credentials = $req->only('email', 'password');
        } else {
            $credentials = $req->only('phone', 'password');
        }

        $user = User::where([['email', $credentials['email']], ['password', $credentials['password']], ['role', 'customer']]);
        if ($user) {
            if (Auth::attempt($credentials, $remember)) {
                return redirect()->back();
            }
        }
    }

    public function logout(Request $req)
    {
        Auth::logout();
        return redirect()->back();
    }
}
