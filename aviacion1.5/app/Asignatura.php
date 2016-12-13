<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $table ="asignaturas";

    protected $fillable = ['nombre', 'fecha_inicio', 'fecha_fin', 'trimestre', 'id_instructor', 'id_aprendiz'];

    public function competencias()
    {
        return $this->belongsToMany('App\competencia');
    }

    public function instructores()
    {
        return $this->belongsTo('App\Instructor');
    }

    public function aprendices()
    {
        return $this->belongsTo('App\Aprendiz');
    }


}
