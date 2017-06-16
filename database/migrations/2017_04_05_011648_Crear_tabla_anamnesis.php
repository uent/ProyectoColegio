<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaAnamnesis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Anamnesis',function(Blueprint $table){
            $table->increments('idAnamnesis');
            $table->integer('idOrden')->unsigned();
            $table->foreign('idOrden')
            ->references('idOrdenDiagnostico')->on('OrdenDiagnostico');

            //datos Fonoaudiologo
            $table->string('condSocioComunicativaFonoaudiologo',100)->nullable();
            $table->string('competComunicativaFonoaudiologo',100)->nullable();
            $table->string('lengComprensivoFonoaudiologo',100)->nullable();
            $table->string('lengExpresivoFonoaudiologo',100)->nullable();
            $table->string('conclusionesFonoaudiologo',100)->nullable();
            $table->string('sugerenciasFonoaudiologo',100)->nullable();

            //datos Psicologico
            $table->string('desarrolloSocialPsicologo',100)->nullable();
            $table->string('respEmocionalPsicologo',100)->nullable();
            $table->string('refConjuntaPsicologo',100)->nullable();
            $table->string('juegoPsicologo',100)->nullable();
            $table->string('conmunicacionLengPsicologo',100)->nullable();
            $table->string('flexMentalPsicologo',100)->nullable();
            $table->string('pensamientoPsicologo',100)->nullable();
            $table->string('comportamientoGnrlPsicologo',100)->nullable();
            $table->string('concluPsicologo',100)->nullable();
            $table->string('relacionPsicologo',100)->nullable();
            $table->string('imitacionPsicologo',100)->nullable();
            $table->string('afectoPsicologo',100)->nullable();
            $table->string('cuerpoPsicologo',100)->nullable();
            $table->string('objetosPsicologo',100)->nullable();

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
        Schema::dropIfExists('Anamnesis');
      Schema::dropIfExists('OrdenDiagnostico');
    }
}
