<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstructorRequest extends FormRequest
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
            "nombre"=>"max:120|required",
            "cedula"=>"max:25|unique:aprendices,documento|required",
            "telefono"=>"max:15|required",
            "correo"=>"email|max:40|unique:instructores,email|required"
        ];
    }
}
