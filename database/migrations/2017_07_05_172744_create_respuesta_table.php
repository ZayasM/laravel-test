<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

       Schema::create('respuesta', function (Blueprint $table) {
        $table->increments('id');
        $table->longText('texto');
        $table->integer('id_pregunta')->unsigned()->index();
        $table->foreign('id_pregunta')->references('id')->on('pregunta')->onDelete('cascade');
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
        Schema::dropIfExists('respuesta');
    }
}
