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
          $table->string('nombre',50);
          $table->string('apellidos',70);
          $table->string('rut',30);
          $table->date('fechaNacimiento',100)->nullable();

          //$table->tinyInteger('edad');
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
