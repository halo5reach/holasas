<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProgramas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('denominacion');
            $table->integer('codigo')->unique();
            $table->enum('estado', ['activo', 'desactivado'])->default('activo');
            $table->integer('duracion_lectiva');
            $table->integer('duracion_practica');
            $table->enum('nvl_form', ['tecnologo', 'tecnico'])->default('tecnologo');
            $table->text('justificacion');
            $table->text('requisito_ingreso');
            $table->text('descripcion');
            $table->text('aprendizaje_etapa_practica');
            $table->text('ocupacion');

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
        Schema::dropIfExists('programas');
    }
}
