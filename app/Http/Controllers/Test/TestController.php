<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modelos\Test;
use App\Servicios\TestServicio;

class TestController extends Controller
{

  public function show($id)
  {
    $testServicio = new TestServicio();
   return   $testServicio->getTestCompleto($id);
  }
}
