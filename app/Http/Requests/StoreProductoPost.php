<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductoPost extends FormRequest
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
            'name'=>'required',
            'slug'=>'required',
            'details'=>'required',
            'price'=>'required',
            'shipping_cost'=>'required',
            'description'=>'required',
            'sucursal_id'=>'required',
            'brand_id'=>'required',
            
        ];
    }
}
