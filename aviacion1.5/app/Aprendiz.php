<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aprendiz extends Model
{
    protected $table ="aprendices";

    protected $fillable = ['nombre', 'documento', 't_documento', 'telefono', 'fecha_nacimiento', 'email'];

    public function matriculas()
    {
        return $this->hasMany('App\Matricula');
    }

    public function certificados()
    {
        return $this->hasOne('App\Certificado');
    }
    public function asignaturas()
    {
        return $this->hasMany('App\Asignatura');
    }
}
