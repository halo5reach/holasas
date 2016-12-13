<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
    protected $table ="competencias";

    protected $fillable = ['denominacion', 'codigo', 'duracion', 'id_programa'];

	public function programa()
	{
	        return $this->belongsTo('App\Programa');
	}

	public function asiganturas()
    {
        return $this->belongsToMany('App\Asignatura');
    }
}