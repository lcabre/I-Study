<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecuperatoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recuperatorios', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("id_user");
            $table->unsignedInteger("id_parcial");
            $table->dateTime("fecha")->nullable();
            $table->integer("nota")->nullable();
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
        Schema::dropIfExists('recuperatorios');
    }
}
