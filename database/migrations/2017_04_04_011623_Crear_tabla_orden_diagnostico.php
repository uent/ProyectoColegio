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
            //estados  "asignar": aun hace falta asignar alguna o todas las citas
            //  "finalizado": ya finalizo la entrega de los documentos al tutor
            //   "evaluando": aun faltan por finalizar las citas y sus respectivos informes
            //    "falta_anamnesis": las citas fueron completadas pero falta crear la anamnesis
            $table->string('prioridad',45);
            // "alta" o "normal"
            $table->string('antecedentes',45);
            //$table->integer('idTutor');
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
