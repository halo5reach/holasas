<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $table ="instructores";

    protected $fillable = ['nombre', 'telefono', 'email', 'cedula', 'id_asignatura'];

    public function fichas()
    {
        return $this->belongsToMany('App\Ficha');
    }

    public function asignaturas()
    {
        return $this->hasMany('App\Asignatura');
    }
}
