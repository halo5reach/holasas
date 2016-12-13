<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMatriculas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('matriculas', function (Blueprint $table) {
            $table->increments('id');            
            $table->enum('estado_matricula', ['formacion', 'aplazado', 'cancelado','certificado'])->default('formacion');             
            $table->integer('id_aprendiz')->unsigned()->unique();
            $table->foreign('id_aprendiz')->references('id')->on('aprendices')->onDelete('cascade');

            $table->integer('id_ficha')->unsigned();
            $table->foreign('id_ficha')->references('id')->on('fichas')->onDelete('cascade');

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
        Schema::dropIfExists('matriculas');
    }
}
