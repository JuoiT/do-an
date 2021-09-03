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
            'des_image' => 'image',
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

            'image.required' => "Ảnh không được để rỗng!",
            'image.image' => "Ảnh không hợp lệ!",

            'des_image.image' => "Ảnh không hợp lệ!",

            'price.required' => "Giá không được để rỗng!",
            'price.numeric|min' => "Giá không hợp lệ!",

            'sale_price.numeric|min' => "Giá sale không hợp lệ!",

            'description.required' => "Mô tả không được để rỗng!",
            'description.max' => "Mô tả quá dài!",
        ];
    }
}
