<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangeUserInfomation;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Http\Requests\ResetPasswordReset;
use App\Models\Order;
use App\Models\User;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $remember = $req->has('remember') ? true : false;
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
        }
    }

    public function logout()
    {
        Auth::logout();
        toast('Logout successfully!', 'success');
        return redirect()->back();
    }

    public function my_account()
    {
        if (Auth::user()) {
            $query = Order::where('user_id', Auth::user()->id)->with('coupon', 'payment', 'ship', 'orderDetails');
            $allOrders = $query->get();
            $confirmingOrders = Order::where('user_id', Auth::user()->id)->with('coupon', 'payment', 'ship', 'orderDetails')->where('status', 0)->get();
            $watingOrders = Order::where('user_id', Auth::user()->id)->with('coupon', 'payment', 'ship', 'orderDetails')->where('status', 1)->get();
            $deliveringOrders = Order::where('user_id', Auth::user()->id)->with('coupon', 'payment', 'ship', 'orderDetails')->where('status', 2)->get();
            $deliveredOrders = Order::where('user_id', Auth::user()->id)->with('coupon', 'payment', 'ship', 'orderDetails')->where('status', 3)->get();
            $cancelledOrders = Order::where('user_id', Auth::user()->id)->with('coupon', 'payment', 'ship', 'orderDetails')->where('status', 4)->get();

            return view('frontend.pages.my-account', compact('allOrders', 'confirmingOrders', 'watingOrders', 'deliveringOrders', 'deliveredOrders', 'cancelledOrders'));
        } else {
            toast('Please login to continue!', 'warning');
            return redirect()->route('home');
        }
    }

    public function cancelOrder($id)
    {
        $order = Order::find($id);
        $order->status = 4;
        $order->save();
        toast('Cancelled order..', 'warning');
        return redirect()->back();
    }

    public function resetPassword()
    {
        return view('frontend.pages.pass-reset');
    }

    public function postResetPassword(ResetPasswordRequest $request)
    {
        $check = User::where('email', $request->email)->first();
        if ($check) {
            DB::table('password_resets')->insert([
                'email'=>$request->email,
                'token'=>$request->_token
            ]);
        }
    }

    public function confirmResetPassword()
    {
        return view('frontend.pages.pass-reset-confirm');
    }

    public function update_user(ChangeUserInfomation $request, User $user)
    {
        if (!$request->avatar) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $id_user = $request->id;
                $_user = $user->update_user($request, $id_user);
                if ($_user) {
                    toast('Update complete!', 'success');
                    return redirect()->back();
                } else {
                    toast('Update fail!', 'error');
                    return redirect()->back();
                }
            } else {
                return redirect()->back();
            }
        }
        if ($request->avatar) {
            $id_user = $request->id;
            $custommer = User::find($id_user);
            $old_avatar = $custommer->avatar;
            $new_avatar = $user->update_avatar($request, $id_user, $old_avatar);
            if ($new_avatar) {
                toast('Update avatar complete!', 'success');
                return redirect()->back();
            } else {
                toast('Update avatar fail!', 'error');
                return redirect()->back();
            }
        }
    }
}
