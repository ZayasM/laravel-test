<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



       factory('App\Modelos\Test')
       ->create()
       ->each(function($test) {

          factory('App\Modelos\Pregunta',20)->create(["id_test"=> $test->id])
          ->each(function($pregunta) {

              factory('App\Modelos\Respuesta', 3)->create(["id_pregunta"=> $pregunta->id]);

          });

        });
    }
}
