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
            'avatar' => 'required|image',
            'email' => 'required|max:255|email',
            'password' => 'required|confirmed'
        ];
    }

    public function messages()
    {
        return [
            'avatar.required' => "Ảnh sản phẩm không được để rỗng!",
            'avatar.image' => "Ảnh sản phẩm không hợp lệ!",

            'email.required' => "Email không được để rỗng!",
            'email.max' => "Email quá dài!",
            'email.email' => "Email không hợp lệ!",

            'password.required' => 'Mật khẩu không được để rỗng!',
            'password.confirmed' => 'Mật khẩu không đúng!',
        ];
    }
}
