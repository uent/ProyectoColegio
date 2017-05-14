<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaNinos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ninos', function (Blueprint $table) {
          $table->increments('idNino');
          $table->string('nombre',45);
          $table->string('apellidos',45);
          $table->string('rut',45);
          $table->boolean('contactado');  //
          //$table->char('dv');
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
        Schema::dropIfExists('Ninos');
    }
}
