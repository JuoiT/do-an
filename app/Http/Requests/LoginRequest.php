<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|max:255|email',
            'password' => 'required|min:6'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => "Email không được để rỗng!",
            'email.max' => "Email quá dài", 
            'email.email' => "Email không hợp lệ", 

            'password.required' => 'Mật khẩu không được để rỗng',
            'password.min' => 'Mật khẩu quá ngắn',
        ];
    }
}
