<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsuarioMateria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_materias', function (Blueprint $table) {
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_materia');
            $table->json('datos')->nullable();
            $table->primary(["id_user", "id_materia"]);
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
        Schema::dropIfExists('usuario_materias');
    }
}
