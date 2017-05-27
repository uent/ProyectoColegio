<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Citas', function(Blueprint $table){
            $table->increments('idCitas');
            $table->integer('idOrden')->unsigned();
            $table->foreign('idOrden')
            ->references('idOrdenDiagnostico')->on('OrdenDiagnostico');
            $table->integer('idProfesional')->unsigned();
            $table->foreign('idProfesional')
            ->references('id')->on('Users');
            $table->integer('idNino')->unsigned();
            $table->foreign('idNino')
            ->references('idNino')->on('Ninos');
            $table->string('tipoEvaluacion',30);
            $table->string('estado',45);
            //"completado" o "pendiente"
            $table->string('hora',30);
            $table->string('comentarios',400);
            $table->string('fecha',30);
          
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
      Schema::dropIfExists('OrdenDiagnostico');
        Schema::dropIfExists('Citas');

    }
}
