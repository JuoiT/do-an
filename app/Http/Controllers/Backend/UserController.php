<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function update_admin(Request $request, User $user)
    {
        if (!$request->avatar) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $id_user = $request->id;
                $_user = $user->update_user($request, $id_user);
                if ($_user) {
                    toast('Update complete!', 'success');
                    return redirect()->back();
                }else {
                    toast('Update fail!', 'error');
                    return redirect()->back();
                }
            }
            else {
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
            }else {
                toast('Update avatar fail!', 'error');
                return redirect()->back();
            }
        }

    }
}
