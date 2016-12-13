<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table ="programas";

    protected $fillable = ['denominacion', 'codigo', 'estado', 'duracion_lectiva', 'duracion_practica', 'nvl_form', 'justificacion', 'requisito_ingreso','descripcion', 'aprendizaje_etapa_practica', 'ocupacion'];

    public function competencias()
    {
        return $this->hasMany('App\Competencia');
    }

    public function fichas()
    {
        return $this->hasMany('App\Ficha');
    }

}
