<?php

namespace App\Http\Requests\Slide;

use Illuminate\Foundation\Http\FormRequest;

class AddSlideRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:slides',
            'image' => 'required|image|unique:slides',
            'link' => 'required|url|unique:slides',
            'status' => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Tên slide không được để rỗng!",
            'name.unique' => "Slide $this->name đã tồn tại!",
            'image.required' => "Ảnh slideslide không được để rỗng!",
            'image.image' => "Hãy chọn file hình ảnh!",
            'image.unique' => "Ảnh slide $this->name đã tồn tại!",
            'link.required' => "Đường link không được để rỗng!",
            'link.url' => "Đường link không hợp lệ!",
            'link.unique' => "Đường link $this->name đã tồn tại!",
            'status.required' => "Danh mục không được để rỗng!",
            'status.boolean' => "Đừng phá nữa ba!",
        ];
    }
}
