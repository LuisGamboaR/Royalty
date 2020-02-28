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
            'name' => 'required|min:3|max:25',
            'lastname' => 'required|min:3|max:30',
            'email' => 'email|required|string|max:30|unique:users',
            'identification' => 'numeric|required|digits_between: 7,8',
            'password' => 'required|between:5,16|confirmed'
        ];
      
    }
	
public function messages()
{
    return [
        'email.required' => 'Necesitamos saber la direccion de email!',
        'email.email' => 'Ingresa un correo valido!',
        'name.required' => 'Necesitamos saber tu nombre!',
        'name.min' => 'Ingresa al menos 3 carácteres!',
        'name.max' => 'No puedes ingresar mas de 25 carácteres!',
        'lastname.min' => 'Ingresa al menos 3 carácteres!',
        'lastname.max' => 'No puedes ingresar mas de 30 carácteres!',
        'identification.required' => 'Necesitamos saber tu cédula!',
        'identification.numeric' => 'Solo puedes ingresar numeros!',
        'identification.digits_between' => 'Ingresa una cédula con 7 u 8 digitos !',
        'password.confirmed' => 'Las contraseñas no son iguales!',

    ];
}

    
}
