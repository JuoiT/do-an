<?php

namespace App\Models;

use App\Models\FilterableTrait;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes, FilterableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['name', 'email', 'role', 'phone', 'password', 'avatar', 'phone', 'address', ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function rates()
    {
        return $this->hasMany(Rate::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function add(Request $req)
    {
        $imageName = '';
        if ($req->avatar) {
            $upImage = $req->avatar;
            $imageName = time() . $upImage->getClientOriginalName();
            $upImage->move(config('const.avatarPath'), $imageName);
        }
        return $this->create([
            'name' => trimm($req->name),
            'avatar' => $imageName,
            'phone' => $req->phone,
            'address' => trimm($req->address),
            'email' => trimm($req->email),
            'password' => Hash::make($req->password),
        ]);
    }

    public function update_user(Request $req, $id)
    {
        $user = User::find($id);
        return $user->update([
            'name' => trimm($req->name),
            'phone' => $req->phone,
            'address' => trimm($req->address),
        ]);
    }

    public function update_avatar(Request $request, $id, $old_avatar)
    {
        $user = User::find($id);
        $imageName = $old_avatar;
        if ($request->avatar) {
            $upImage = $request->avatar;
            $imageName = null;
            if ($upImage) {
                $imageName = time() . $upImage->getClientOriginalName();
                $upImage->move(config('const.avatarPath'), $imageName);
            }
            File::delete(config('const.avatarPath') . '/' . $user->avatar);
        }
        return $user->update([
            'avatar' => $imageName,
        ]);
    }
}
