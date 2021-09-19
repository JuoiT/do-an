<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('frontend.pages.register');
    }

    public function register(RegisterRequest $req)
    {
        $user = new User();

        $newUser = $user->add($req);

        if ($newUser) {
            return redirect()->route('login')->with('success', 'Tạo tài khoản thành công!');
        } else {
            return redirect()->back()->with('error', 'Tạo tài khoản thất bại!');
        }
    }
}
