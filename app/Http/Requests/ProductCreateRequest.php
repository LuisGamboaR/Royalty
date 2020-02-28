<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
            'nombre' => 'required|min:3|max:25',
            'stock_actual' => 'numeric|required|min:1',
            'descripcion' => 'required|string|max:50',
            'precio' => 'numeric|required|min:1',
        ];
    }

    public function messages()
{
    return [
        'nombre.required' => 'Necesitamos saber el nombre del producto!',
        'nombre.min' => 'Ingresa al menos 3 carácteres!',
        'nombre.max' => 'No puedes ingresar mas de 25 carácteres!',
        'stock_actual.required' => 'Ingresa una cantidad de stock al producto!',
        'stock_actual.min' => 'Ingresa al menos 1 digito!',
        'stock_actual.numeric' => 'Ingresa solamente números!',
        'precio.required' => 'Necesitamos saber el precio!',
        'precio.numeric' => 'Solo puedes ingresar numeros!',

    ];
}
}


