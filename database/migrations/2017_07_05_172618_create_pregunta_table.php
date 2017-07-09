<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreguntaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('pregunta', function (Blueprint $table) {
        $table->increments('id');
        $table->longText('enunciado');
        $table->enum('tipo', ['una_respuesta_valida', 'varias_respuestas_valida']);
        $table->integer('id_test')->unsigned()->index();
        $table->foreign('id_test')->references('id')->on('test')->onDelete('cascade');
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
        Schema::dropIfExists('pregunta');
    }
}
