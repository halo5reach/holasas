<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProgramaRequest extends FormRequest
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
            'denominacion'=>'max:200|required',
            'codigo'=>'max:25|unique:programas,codigo|required',
            'estado'=>'required',
            'lectiva'=>'required',
            'productiva'=>'required',
            'nivel'=>'required',
            'justificacion'=>'required',
            'requisito'=>'required',
            'descripcion'=>'required',
            'aprendizaje'=>'required',
            'ocupacion'=>'required'            
        ];
    }
}
