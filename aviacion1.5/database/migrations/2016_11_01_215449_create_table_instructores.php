<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInstructores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('instructores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('telefono');
            $table->string('email')->unique();
            $table->biginteger('cedula')->unique();
            $table->timestampsTz();
        });

        // Relacion muchos a muchos Fichas & Instructores
        Schema::create('ficha_instructor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_ficha')->unsigned();
            $table->integer('id_instructor')->unsigned();

            $table->foreign('id_ficha')->references('id')->on('fichas')->onDelete('cascade');
            $table->foreign('id_instructor')->references('id')->on('instructores')->onDelete('cascade');

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
        Schema::dropIfExists('instructores');
    }
}
