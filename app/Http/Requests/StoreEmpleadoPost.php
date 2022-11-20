<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmpleadoPost extends FormRequest
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
            'Nombres'=>'required|min:3|max:100',
            'Apellidos'=>'required|min:3|max:100',
            'Telefono'=>'required',
            'Direccion'=>'required|min:4',
            'Dpi'=>'required',
            'IdSucursal'=>'required',

        ];
    }
}
