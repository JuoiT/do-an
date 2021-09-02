<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slide extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'image', 'link', 'status'];

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
                'status' => $request->status,
        ]);
        return $edit_slide;
    }
}
