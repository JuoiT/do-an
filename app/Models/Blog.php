<?php

namespace App\Models;

use App\Models\FilterableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory, SoftDeletes, FilterableTrait;

    protected $table = 'blogs';
    protected $fillable = ['title', 'avatar', 'author', 'content', 'status'];
    protected $filterable = ['status'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function add($req)
    {
        // get blos.image first, move uploaded image
        $upImage = $req->avatar;
        $imageName = null;
        // check upImage truoc, trong truong hop nguoi dung ko up anh
        if ($upImage) {
            $imageName = time().$upImage->getClientOriginalName();
            $upImage->move(config('const.imageBlog'), $imageName);
        }
        $blog = Blog::create([
            'title' => trimm($req->title),
            'avatar' => $imageName,
            'author' => $req->author,
            'content' => $req->content,
            'status' => $req->status,
        ]);

        return $blog;
    }

    public function edit($blog, $req, $imageName)
    {
        $blog->title = $req->title;
        $blog->avatar = $imageName;
        $blog->author = $req->author;
        $blog->content = $req->content;
        $blog->status = $req->status;

        return $blog;
    }

    public function filterName($query, $value)
    {
        return $query->where('name', 'LIKE', '%' . $value . '%');
    }

    public function filterTrashed($query, $value)
    {
        if ($value == 'true') {
            $query->onlyTrashed();
        }
        return $query;
    }
}
