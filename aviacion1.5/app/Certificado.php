<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    protected $table ="certificados";

    protected $fillable = ['fecha_certificacion', 'encabezado', 'contenido', 'bloque_modular', 'intensidad_horaria', 'evaluador', 'id_aprendiz'];

    public function aprendiz()
    {
        return $this->belongsTo('App\Aprendiz');
    }

}
