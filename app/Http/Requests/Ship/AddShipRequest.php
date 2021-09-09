<?php

namespace App\Http\Requests\Ship;

use Illuminate\Foundation\Http\FormRequest;

class AddShipRequest extends FormRequest
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
            'name' => 'required|unique:ships',
            'price' => 'required|numeric|min:0',
            'status' => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Tên đơn vị ship không được để rỗng!",
            'name.unique' => "Đơn vị ship $this->name đã tồn tại!",
            'price.required' => "Giá vận chuyển không được rỗng!",
            'price.min' => "Giá vận chuyển không được nhỏ hơn 0!",
            'price.numeric' => "Giá vận chuyển phải là số!",
            'status.required' => "Danh mục không được để rỗng!",
            'status.boolean' => "Đừng phá nữa ba!",
        ];
    }
}
