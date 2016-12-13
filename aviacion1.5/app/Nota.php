<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table ="notas";

    protected $fillable = ['codigo_programa', 'nombre_curso', 'id_aprendiz', 'notas'];

    public function aprendiz()
    {
    	return $this->belongsTo('App\Aprendiz');
    }
}
