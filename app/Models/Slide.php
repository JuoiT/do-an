<?php

namespace App\Models;

use App\Models\FilterableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slide extends Model
{
    use HasFactory, SoftDeletes, FilterableTrait;

    protected $table = 'slides';
    protected $fillable = ['name', 'image', 'link', 'content', 'caption', 'time', 'status'];
    protected $filterable = ['status'];

    public function add_slide($request)
    {
        if ($request->has('image')) {
            $file = $request->image;
            $file_name = $file->getClientOriginalName();
            $file -> move(public_path('upload-slide'), $file_name);
        }
        $add_slide = Slide::create([
            'name' => $request->name,
            'image' => $file_name,
            'link' => $request->link,
            'content' => $request->content,
            'caption' => $request->caption,
            'time' => $request->time,
            'status' => $request->status,
        ]);
        return $add_slide;
    }

    public function edit_slide($request, $id)
    {
        if ($request->has('image')) {
            $file = $request->image;
            $file_name = $file->getClientOriginalName();
            $file -> move(public_path('upload-slide'), $file_name);
        }
        $edit_slide = Slide::find($id)->update([
                'name' => $request->name,
                'image' => $file_name,
                'link' => $request->link,
                'content' => $request->content,
                'caption' => $request->caption,
                'time' => $request->time,
                'status' => $request->status,
        ]);
        return $edit_slide;
    }

    public function update_time($request, $id)
    {
        $update_time = Slide::find($id)->update([
                'name' => $request->name,
                'image' => $request->image,
                'link' => $request->link,
                'content' => $request->content,
                'caption' => $request->caption,
                'time' => $request->time,
                'status' => '0',
        ]);
        return $update_time;
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
