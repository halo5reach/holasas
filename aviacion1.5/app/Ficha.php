<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    protected $table ="fichas";

    protected $fillable = ['codigo', 'fecha_inicio', 'fecha_fin', 'id_programa'];

    public function matriculas()
    {
        return $this->hasMany('App\Matricula');
    }

    public function programa()
    {
    	return $this->belongsTo('App\Programa');
    }

    public function instructores()
    {
        return $this->belongsToMany('App\Instructor');
    }
}
