<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Validation\Rule;


class ProductUpdateRequest extends FormRequest
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
        $nombre = $this->request->get("nombre");

 
 
 
        return [
 
 
         'nombre'          => 'max:30',
         'stock_actual'        => 'required|integer|max:10',
         'descripcion' => 'required|string|max:50',
         'precio' => 'required|integer',

         'nombre' => ['required', Rule::unique('products')->ignore($nombre,'nombre')],

         ];
   
    }
}
