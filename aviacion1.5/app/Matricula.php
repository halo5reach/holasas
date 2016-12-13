<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $table ="matriculas";

    protected $fillable = ['estado_matricula', 'id_aprendiz', 'id_ficha'];

    public function ficha()
    {
    	return $this->belongsTo('App\Ficha');
    }

    public function aprendiz()
    {
    	return $this->belongsTo('App\Aprendiz');
    }
}
