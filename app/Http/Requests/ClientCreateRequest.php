<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientCreateRequest extends FormRequest
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
            'nombre' => 'required|min:3|max:30',
            'rif' => 'string|required|max:15|min:1',
            'direccion' => 'required|min:1|max:50',
            'telefono' => 'numeric|required|min:11',
            'correo' => 'email|required|min:1|max:25',
           
        ];
    }

    public function messages()
{
    return [
        'nombre.required' => 'Necesitamos saber el nombre del cliente!',
        'nombre.min' => 'Ingresa al menos 3 carácteres!',
        'nombre.max' => 'No puedes ingresar mas de 30 carácteres!',
        'rif.required' => 'Necesitamos el rif del cliente!',
        'rif.min' => 'Ingresa al menos 1 digitos!',
        'rif.max' => 'No puedes ingresar mas de 15 digitos!',
        'telefono.numeric' => 'Solo puedes ingresar números!',
        'telefono.required' => 'Necesitamos que ingreses el número de teléfono!',
        'telefono.min' => 'Ingresa un número de telefono valido (11) digitos!',
        'telefono.max' => 'Ingresa un número de telefodwadano valido (11) digitos!',
        'correo.required' => 'Ingresa el correo del cliente!',
        'correo.email' => 'Ingresa un correo valido',
        'correo.min' => 'Ingresa al menos 1 carácter',
        'correo.max' => 'No puedes ingresar mas de 25 carácteres',



    ];
}
}
