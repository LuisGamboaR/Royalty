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


        'name'          => 'required|max:30',
        'lastname'        => 'required|max:50',
        'identification'        => 'required|integer|max:8|unique:users,identification' . $this->id,           
        'email' => ['required', Rule::unique('users')->ignore($email,'email')],

            'identification' => ['required', Rule::unique('users')->ignore($identification,'identification')],
        ];
  }

    
}