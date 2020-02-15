<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Client;
use Illuminate\Validation\Rule;

class ClientUpdateRequest extends FormRequest
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
        $rif = $this->request->get("rif");
        $telefono = $this->request->get("telefono");
        $correo = $this->request->get("correo");

 
 
 
        return [
 
 
         'nombre'          => 'required|max:30',
         'direccion'        => 'string|max:50',
         'correo' => ['max:50|string|required', Rule::unique('clients')->ignore($correo,'correo')],
         'rif' => ['max:9|string|required', Rule::unique('clients')->ignore($rif,'rif')],
         'telefono' => ['max:11|integer|required', Rule::unique('clients')->ignore($telefono,'telefono')],

         ];
   
    }
}
