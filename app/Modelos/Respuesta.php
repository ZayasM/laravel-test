<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
  protected $table = 'respuesta';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'texto', 'id_pregunta'
    ];
}
