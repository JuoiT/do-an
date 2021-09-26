<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class Comment extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'comments';
    protected $fillable = ['product_id', 'blog_id', 'rating', 'user_id', 'status', 'content'];
    protected $dates = ['created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function add(Request $req)
    {
        $cmt = Comment::create([
            'user_id' => $req->user_id,
            'product_id' => $req->product_id,
            'rating' => $req->rating3,
            'content' => trimm($req->content),
        ]);

        return redirect()->back();
    }
}
