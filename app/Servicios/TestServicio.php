<?php

namespace App\Servicios;

use App\Modelos\Test;
use App\Modelos\Pregunta;
use App\Modelos\Respuesta;

class TestServicio {

  public function getTestCompleto($id){

    $test=Test::find($id);

    return $test->with('getPreguntas.getRespuestas')->get();

  }



}
