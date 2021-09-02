<?php

namespace App\Http\Requests\Ship;

use Illuminate\Foundation\Http\FormRequest;

class EditShipRequest extends FormRequest
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
            'name' => 'required|unique:ships,name,'.$this->id,
            'price' => 'required|numeric',
            'status' => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Tên đơn vị vận chuyển không được để rỗng!",
            'name.unique' => "Đơn vị vận chuyển $this->name đã tồn tại!",
            'price.required' => "Giá vận chuyển không được rỗng!",
            'price.numeric' => "Giá vận chuyển phải là số!",
            'status.required' => "Danh mục không được để rỗng!",
            'status.boolean' => "Đừng phá nữa ba!",
        ];
    }
}
