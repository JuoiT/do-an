<?php

namespace App\Models;

use App\Models\FilterableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
    use HasFactory, SoftDeletes, FilterableTrait;

    protected $table = 'banners';
    protected $fillable = ['name', 'image', 'link', 'role', 'status'];
    protected $filterable = ['status'];
    protected $_filterable = ['role'];

    public function add_banner($request)
    {
        if ($request->has('image')) {
            $file = $request->image;
            $file_name = $file->getClientOriginalName();
            $file -> move(public_path('upload-banner'), $file_name);
        }
        $add_banner = Banner::create([
            'name' => $request->name,
            'image' => $file_name,
            'link' => $request->link,
            'role' => $request->role,
            'status' => $request->status,
        ]);
        return $add_banner;
    }

    public function edit_banner($request, $id)
    {
        if ($request->has('image')) {
            $file = $request->image;
            $file_name = $file->getClientOriginalName();
            $file -> move(public_path('upload-banner'), $file_name);
        }
        $edit_banner = Banner::find($id)->update([
                'name' => $request->name,
                'image' => $file_name,
                'link' => $request->link,
                'role' => $request->role,
                'status' => $request->status,
        ]);
        return $edit_banner;
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
