<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class EditProductRequest extends FormRequest
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
            'image' => 'image',
            'des_image' => 'array',
            'des_image.*' => 'image|max:5000',
            'price' => 'required|numeric|min:0',
            'sale_price' => 'required|numeric|min:0',
            'description' => 'required|max:5000'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Tên không được để rỗng!",
            'name.max' => "Tên quá dài!",

            'image.required' => "Ảnh sản phẩm không được để rỗng!",
            'image.image' => "Ảnh không hợp lệ!",

            'image.required' => "Ảnh mô tả sản phẩm không được để rỗng!",
            'des_image.image' => "Ảnh mô tả không hợp lệ!",

            'price.required' => "Giá không được để rỗng!",
            'price.numeric|min' => "Giá không hợp lệ!",

            'sale_price.numeric|min' => "Giá sale không hợp lệ!",

            'description.required' => "Mô tả không được để rỗng!",
            'description.max' => "Mô tả quá dài!",
        ];
    }
}
