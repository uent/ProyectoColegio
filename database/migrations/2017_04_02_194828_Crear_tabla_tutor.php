<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTutor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tutor',function(Blueprint $table){
            $table->increments('idTutor');
            $table->string('rut',45);
            $table->string('dv',45);
            $table->string('nombre',45);
            $table->string('apellidos',45);
            $table->string('parentesco',45);
            $table->string('mail',45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tutor');
    }
}
