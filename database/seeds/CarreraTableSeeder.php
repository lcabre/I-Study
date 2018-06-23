<?php

use Illuminate\Database\Seeder;

class CarreraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Carrera::create(['codigo' => 210,'nombre' => "Tecnicatura Universitaria en Desarrollo de Aplicaciones para Dispositivos Móviles"]);
        //factory(App\Carrera::class)->create(['codigo' => 206,'nombre' => "Tecnicatura Universitaria en WEB"]);
    }
}
