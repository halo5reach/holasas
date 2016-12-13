<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAsignaturas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignaturas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->unique();
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->biginteger('trimestre');
            $table->integer('id_instructor')->unsigned();
            $table->integer('id_aprendiz')->unsigned();
            
            $table->foreign('id_instructor')->references('id')->on('instructores')->onDelete('cascade');
            $table->foreign('id_aprendiz')->references('id')->on('aprendices')->onDelete('cascade');

            $table->timestampsTz();
        });

         // Relacion muchos a muchos competencias & asignaturas
        Schema::create('competencia_asignatura', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_competencia')->unsigned();
            $table->integer('id_asignatura')->unsigned();

            $table->foreign('id_competencia')->references('id')->on('competencias')->onDelete('cascade');
            $table->foreign('id_asignatura')->references('id')->on('asignaturas')->onDelete('cascade');

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
        Schema::dropIfExists('asignaturas');
    }
}
