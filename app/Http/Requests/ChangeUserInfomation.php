<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangeUserInfomation extends FormRequest
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
            'name' => 'required|max:100',
            'address' => 'required|max:255',
            'email' => 'required|max:255|unique:users|email',
            'phone' => 'required|numeric|digits:10',
            'password' => 'required|confirmed'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Tên không được để rỗng!",
            'name.max' => "Tên quá dài!",

            'email.required' => "Email không được để rỗng!",
            'email.max' => "Email quá dài!",
            'email.unique' => "Email đã được sử dụng!",
            'email.email' => "Email không hợp lệ!",

            'address.required' => "Địa chỉ không được để rỗng!",
            'address.max' => "Địa chỉ quá dài!",

            'phone.required' => "Số điện thoại không được để rỗng!",
            'phone.numeric|phone.digits' => "Số điện thoại không hợp lệ!",

            'password.required' => 'Nhập mật khẩu để thay đổi!',
            'password.confirmed' => 'Mật khẩu không đúng!'
        ];
    }
}
