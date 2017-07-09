<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;
use App\Modelos\Pregunta;

class Test extends Model
{
  protected $table = 'test';
  var $arrayPreguntas;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre'
    ];


    public function getPreguntas(){
      	return $this->hasMany('App\Modelos\Pregunta', 'id_test', 'id');
    }


    public function getarrayPreguntasAttribute()
   {
       return $this->arrayPreguntas;
   }
}
