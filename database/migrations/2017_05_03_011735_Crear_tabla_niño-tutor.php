<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaNiñoTutor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Niño_tutor',function(Blueprint $table){
            $table->increments('idNiñoTutor');
            $table->integer('idNiño')->unsigned();
            $table->foreign('idNiño')
            ->references('idNiño')->on('Niños');
            $table->integer('idTutor')->unsigned();
            $table->foreign('idTutor')
            ->references('idTutor')->on('Tutor');
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

      Schema::dropIfExists('Niños');
      Schema::dropIfExists('Tutor');
      Schema::dropIfExists('Niño-tutor');

    }
}
