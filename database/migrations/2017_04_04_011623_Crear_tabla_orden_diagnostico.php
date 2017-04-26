<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaOrdenDiagnostico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OrdenDiagnostico',function(Blueprint $table){
            $table->increments('idOrdenDiagnostico');
            $table->integer('idNiño')->unsigned();
            $table->foreign('idNiño')
            ->references('idNiño')->on('Niños');
            $table->string('estado',45);
            $table->string('prioridad',45);
            $table->string('antecedentes',45);
            $table->integer('idTutor');
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
        Schema::dropIfExists('OrdenDiagnostico');
    }
}
