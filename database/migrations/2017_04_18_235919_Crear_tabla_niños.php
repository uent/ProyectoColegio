<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaNiños extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('niños', function (Blueprint $table) {
          $table->increments('id');

          $table->string('Nombre');
          $table->string('Rut');
          $table->boolean('contactado');  //se asigna false cuando se crea la tabla, cuando es contactado cambia a true

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
        Schema::dropIfExists('niños');
    }
}
