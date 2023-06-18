<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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

   
    public function rules()
    {
        return [
            'email' => 'required|email|unique:users,email',
            'user_name' => 'required|unique:users,user_name',
            'phone' => 'required|unique:users,phone',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
        ];
    }
}
