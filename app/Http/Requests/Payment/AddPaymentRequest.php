<?php

namespace App\Http\Requests\Payment;

use Illuminate\Foundation\Http\FormRequest;

class AddPaymentRequest extends FormRequest
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
            'name' => 'required|unique:payments',
            'status' => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Tên phương thức thanh toán không được để rỗng!",
            'name.unique' => "Phương thức thanh toán $this->name đã tồn tại!",
            'status.required' => "Trạng thái phương thức thanh toán không được để rỗng!",
            'status.boolean' => "Đừng phá nữa ba!",
        ];
    }
}
