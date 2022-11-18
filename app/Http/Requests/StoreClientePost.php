<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientePost extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'NombreCliente'=>'required|min:3|max:70',
            'Nit'=>'',
            'Correo'=>'email|required',
            'Telefono'=>'required|numeric|min:8',
            'Direccion'=>'required|min:5|max:100',
        ];
    }
}
