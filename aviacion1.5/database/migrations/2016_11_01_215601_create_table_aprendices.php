<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAprendices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprendices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->enum('t_documento', ['cedula', 't_identidad', 'c_extranjera'])->default('cedula');
            $table->bigInteger('documento')->unique();           
            $table->bigInteger('telefono');
            $table->date('fecha_nacimiento');
            $table->string('email')->unique();
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
        Schema::dropIfExists('aprendices');
    }
}
