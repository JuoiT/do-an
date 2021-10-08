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
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => "Email is required!",
            'email.max' => "Email is too long!", 
            'email.email' => "Email is invalid!", 

            'password.required' => 'Password is required!',
        ];
    }
}
