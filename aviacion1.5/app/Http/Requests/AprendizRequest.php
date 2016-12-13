<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AprendizRequest extends FormRequest
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
            'nombres'=>'max:120|required',
            'tipodocumento'=>'max:16|required',
            'documento'=>'max:25|unique:aprendices,documento|required',
            'fecha'=>'date|required',
            'email'=>'email|max:40|unique:aprendices,email|required',
            'telefono'=>'max:15|required'
        ];
    }
}
