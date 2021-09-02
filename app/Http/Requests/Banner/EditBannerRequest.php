<?php

namespace App\Http\Requests\Banner;

use Illuminate\Foundation\Http\FormRequest;

class EditBannerRequest extends FormRequest
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
            'name' => 'required|unique:banners,name,'.$this->id,
            'image' => 'required|image|unique:banners,image,'.$this->id,
            'link' => 'required|url|unique:banners,link,'.$this->id,
            'status' => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Tên banner không được để rỗng!",
            'name.unique' => "Banner $this->name đã tồn tại!",
            'image.required' => "Ảnh banner không được để rỗng!",
            'image.image' => "Hãy chọn file hình ảnh!",
            'image.unique' => "Ảnh banner $this->name đã tồn tại!",
            'link.required' => "Đường link không được để rỗng!",
            'link.url' => "Đường link không hợp lệ!",
            'link.unique' => "Đường link $this->name đã tồn tại!",
            'status.required' => "Danh mục không được để rỗng!",
            'status.boolean' => "Đừng phá nữa ba!",
        ];
    }
}
