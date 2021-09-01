<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class AddCategoryRequest extends FormRequest
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
            'name' => 'required|unique:products',
            'image' => 'required',
            'des_image' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'description' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => "Tên sản phẩm không được để rỗng!",
            'name.unique' => "Sản phẩm $this->name đã tồn tại!",
            'image.required' => "Ảnh sản phẩm không được để rỗng!",
            'des_image.required' => "Ảnh mô tả sản phẩm không được để rỗng!",
            'price.required' => "Giá sản phẩm không được để rỗng!",
            'category_id.required' => "Chọn một danh mục cho sản phẩm!",
            'description.required' => "Hãy mô tả một chút về sản phẩm!"
        ];
    }
}
