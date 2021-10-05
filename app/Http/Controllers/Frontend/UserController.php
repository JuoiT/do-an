<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
            toast('Register successfully, you can login now!', 'success');
            return redirect()->route('login')->with('success', 'Tạo tài khoản thành công!');
        } else {
            toast('Register failed, can\'t create your account!', 'error');
            return redirect()->back()->with('error', 'Tạo tài khoản thất bại!');
        }
    }

    public function postLogin(LoginRequest $req)
    {
        $remember = $req->remember;
<<<<<<< HEAD
        if ($req->has('email')) {
            $credentials = $req->only('email', 'password');
        } else {
            $credentials = $req->only('phone', 'password');
=======
        $credentials = $req->only('email', 'password');

        $user = User::where('email', $credentials['email'])
            ->where('role', 'customer')
            ->where('status', '1')
            ->get();
        if (count($user) > 0 && $user[0]->status == 1) {
            if (Auth::attempt($credentials, $remember)) {
                toast('Welcome ' . Auth()->user()->name, 'success');

                if (str_contains($req->previousUrl, 'login')) {
                    return redirect()->route('home');
                }
                return redirect($req->previousUrl);
            } else {
                toast('Login failed, wrong password!', 'error');
                return redirect()->route('login');
            }
        } else if (count($user) > 0 && $user[0]->status == 0) {
            toast('You can\'t login now!', 'error');
            return redirect()->route('login');
        } else {
            toast('Login failed, can\'t find your account!', 'error');
            return redirect()->route('login');
>>>>>>> 94aa2b2076858aa675fcfd89267398ee5964a8db
        }
    }

    public function logout()
    {
        Auth::logout();
        toast('Logout successfully!', 'success');
        return redirect()->back();
    }
}
