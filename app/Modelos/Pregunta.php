<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
  protected $table = 'pregunta';
  var $arrayRespuestas;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'enunciado', 'tipo', 'id_test'
    ];


    public function getRespuestas(){
        return $this->hasMany('App\Modelos\Respuesta', 'id_pregunta', 'id');
    }

}
