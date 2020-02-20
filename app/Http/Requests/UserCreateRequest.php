<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
            'name' => 'required|min:3|max:50',
            'email' => 'email|required|string|max:255|unique:users',
            'identification' => 'numeric|digits_between: 7,8',
            'password' => 'required|between:8,255|confirmed'
        ];

        $messages = [
            'email.required' => 'Necesitamos saber la direccion de email!',
            'name.required' => 'Necesitamos saber tu nombre!',
            'password.confirmed' => 'Las contraseñas no son iguales!',


        ];
      
    }

    
}
