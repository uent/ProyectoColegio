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
            $table->string('tipoEvaluacion',45);
            $table->string('estado',45);
            //"completado" o "pendiente"
            $table->string('hora',45);
            $table->string('comentarios',45);
            $table->string('fecha',45);
            $table->string('reporte',5000);
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
