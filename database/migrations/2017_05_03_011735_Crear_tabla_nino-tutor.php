<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaNinoTutor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Nino_tutor',function(Blueprint $table){
            $table->increments('idNinoTutor');
            $table->integer('idNino')->unsigned();
            $table->foreign('idNino')
            ->references('idNino')->on('Ninos');
            $table->string('parentesco',45);
            $table->integer('idTutor')->unsigned();
            $table->foreign('idTutor')
            ->references('id')->on('Users');
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
      Schema::dropIfExists('Tutor');
      Schema::dropIfExists('Nino-tutor');

    }
}
