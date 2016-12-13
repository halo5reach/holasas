<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCertificados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificados', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_certificacion');
            $table->text('encabezado');
            $table->text('contenido');
            $table->text('bloque_modular');
            $table->string('intensidad_horaria');
            $table->text('evaluador');
            $table->integer('id_aprendiz')->unsigned()->unique();
            $table->foreign('id_aprendiz')->references('id')->on('aprendices')->onDelete('cascade');

            $table->timestampsTz();

            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificados');
    }
}
