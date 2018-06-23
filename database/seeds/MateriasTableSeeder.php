<?php

use Illuminate\Database\Seeder;

class MateriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Materia::create([
            'id_carrera' => 1,
            "codigo"=> 2996,
            "nombre" => "Programacion Basica",
            "correlativas" => null
        ]);

        \App\Materia::create([
            'id_carrera' => 1,
            "codigo"=> 2997,
            "nombre" => "Informatica General",
            "correlativas" => null
        ]);

        \App\Materia::create([
            'id_carrera' => 1,
            "codigo"=> 2998,
            "nombre" => "Matematica General",
            "correlativas" => null
        ]);

        \App\Materia::create([
            'id_carrera' => 1,
            "codigo"=> 2999,
            "nombre" => "Ingles Tecnico I",
            "correlativas" => null
        ]);

        \App\Materia::create([
            'id_carrera' => 1,
            "codigo"=> 3000,
            "nombre" => "Programacion Avanzada",
            "correlativas" => '{"codigos":[2996]}'
        ]);

        \App\Materia::create([
            'id_carrera' => 1,
            "codigo"=> 3001,
            "nombre" => "Programacion Movil I",
            "correlativas" => '{"codigos":[2996, 2997]}'
        ]);

        \App\Materia::create([
            'id_carrera' => 1,
            "codigo"=> 3002,
            "nombre" => "Base de Datos",
            "correlativas" => null
        ]);

        \App\Materia::create([
            'id_carrera' => 1,
            "codigo"=> 3003,
            "nombre" => "Ingles Tecnico II",
            "correlativas" => '{"codigos":[2999]}'
        ]);

        \App\Materia::create([
            'id_carrera' => 1,
            "codigo"=> 3004,
            "nombre" => "Programacion Movil II",
            "correlativas" => '{"codigos":[3001]}'
        ]);

        \App\Materia::create([
            'id_carrera' => 1,
            "codigo"=> 3005,
            "nombre" => "Diseño de Aplicaciones Moviles",
            "correlativas" => '{"codigos":[3000, 3001]}'
        ]);

        \App\Materia::create([
            'id_carrera' => 1,
            "codigo"=> 3006,
            "nombre" => "Desarrollo de Interfaces",
            "correlativas" => '{"codigos":[3000, 3001]}'
        ]);

        \App\Materia::create([
            'id_carrera' => 1,
            "codigo"=> 3007,
            "nombre" => "Introduccion a las Comunicaciones",
            "correlativas" => null
        ]);

        \App\Materia::create([
            'id_carrera' => 1,
            "codigo"=> 3008,
            "nombre" => "Taller de Diseño",
            "correlativas" => null
        ]);

        \App\Materia::create([
            'id_carrera' => 1,
            "codigo"=> 3009,
            "nombre" => "Gestion de Datos",
            "correlativas" => '{"codigos":[3002]}'
        ]);

        \App\Materia::create([
            'id_carrera' => 1,
            "codigo"=> 3010,
            "nombre" => "Programacion Movil III",
            "correlativas" => '{"codigos":[3004]}'
        ]);

        \App\Materia::create([
            'id_carrera' => 1,
            "codigo"=> 3011,
            "nombre" => "Arquitectura de Comunicaciones",
            "correlativas" => '{"codigos":[3007]}'
        ]);

        \App\Materia::create([
            'id_carrera' => 1,
            "codigo"=> 3012,
            "nombre" => "Taller de Programacion",
            "correlativas" => '{"codigos":[3004, 3005]}'
        ]);
        
        \App\Materia::create([
            'id_carrera' => 1,
            "codigo"=> 3013,
            "nombre" => "Calidad en Aplicaciones Moviles",
            "correlativas" => '{"codigos":[3005]}'
        ]);
        
        \App\Materia::create([
            'id_carrera' => 1,
            "codigo"=> 3014,
            "nombre" => "Metodologias de Desarrollo de Aplicaciones",
            "correlativas" => '{"codigos":[3005]}'
        ]);

        \App\Materia::create([
            'id_carrera' => 1,
            "codigo"=> 3015,
            "nombre" => "Trabajo Final",
            "correlativas" => '{"codigos":[3009, 3010, 3011, 3012, 3013]}'
        ]);
    }
}
