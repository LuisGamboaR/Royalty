<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Validation\Rule;



class UserUpdateRequest extends FormRequest
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




    public function rules(Request $request)
 {     
       $identification = $this->request->get("identification");
       $email = $this->request->get("email");


return [

   
    'name' => 'required|min:3|max:25',
    'lastname' => 'required|min:3|max:30',
    'email' => 'email|required|string|max:30|unique:users',
    'identification' => 'numeric|required|digits_between: 7,8',
    'password' => 'required|between:5,16|confirmed',
        'email' => ['required', Rule::unique('users')->ignore($email,'email')],

            'identification' => ['required', Rule::unique('users')->ignore($identification,'identification')],
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