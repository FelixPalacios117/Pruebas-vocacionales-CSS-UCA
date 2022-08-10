<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->increments('id_respuesta');
            $table->integer('id_prueba')->unsigned();
            $table->foreign('id_prueba')->references('id')->on('pruebas')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('parte')->unsigned();
            $table->string('bloque_uno',3);
            $table->string('bloque_dos',3);
            $table->string('bloque_tres',3);
            $table->string('bloque_cuatro',3);
            $table->string('bloque_cinco',3);
            $table->string('bloque_seis',3);
            $table->string('bloque_siete',3);
            $table->string('bloque_ocho',3);
            $table->string('bloque_nueve',3);
            $table->string('bloque_diez',3);
            $table->string('bloque_once',3);
            $table->string('bloque_doce',3); 
            $table->string('bloque_trece',3); 
            $table->string('bloque_catorce',3); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuestas');
    }
}
