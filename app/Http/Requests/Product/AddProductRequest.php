<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            'name' => 'required|max:255',
            'image' => 'required|image',
            'des_image' => 'array',
            'des_image.*' => 'image|max:5000',
            'price' => 'required|numeric|min:0',
            'sale_price' => 'required|numeric|min:0',
            'category_id' => 'required',
            'description' => 'required|max:5000'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Tên sản phẩm không được để rỗng!",
            'name.max' => "Tên sản phẩm quá dài!",

            'image.required' => "Ảnh sản phẩm không được để rỗng!",
            'image.image' => "Ảnh sản phẩm không hợp lệ!",

            'des_image.image' => "Ảnh không hợp lệ!",
            'des_image.max' => "Ảnh quá lớn!",

            'price.required' => "Giá sản phẩm không được để rỗng!",
            'price.numeric|min' => "Giá sản phẩm không hợp lệ!",

            'sale_price.numeric|min' => "Giá sale của sản phẩm không hợp lệ!",

            'category_id.required' => 'Cần chọn danh mục cho sản phẩm',

            'description.required' => "Mô tả không được để rỗng!",
            'description.max' => "Mô tả quá dài!",
        ];
    }
}
