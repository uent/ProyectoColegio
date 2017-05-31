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
            $table->integer('idNino')->unsigned();
            $table->foreign('idNino')
            ->references('idNino')->on('Ninos');
            $table->string('estado',45);
            //estados
            //"contacto_pendiente": aun no se a contactado con el tutor del niño
            //"asignar": aun hace falta asignar alguna o todas las citas
            //"finalizado": ya finalizo la entrega de los documentos al tutor
            //"evaluando": aun faltan por finalizar las citas y sus respectivos informes
            //"falta_anamnesis": las citas fueron completadas pero falta crear la anamnesis
            $table->string('prioridad',10);
            // "alta" o "normal"
            //$table->integer('idTutor');
            $table->string('diagnosticoProfesional',1000);
            $table->string('derivacion',50);
            $table->string('solicitud',50);
            $table->string('observaciones',1000);
            $table->string('escolaridad',30);

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
        Schema::dropIfExists('OrdenDiagnostico');
    }
}
