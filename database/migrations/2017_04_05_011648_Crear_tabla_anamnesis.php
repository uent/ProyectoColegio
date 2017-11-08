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
            $table->text('condSocioComunicativaFonoaudiologo')->nullable();
            $table->text('competComunicativaFonoaudiologo')->nullable();
            $table->text('lengComprensivoFonoaudiologo')->nullable();
            $table->text('lengExpresivoFonoaudiologo')->nullable();
            $table->text('conclusionesFonoaudiologo')->nullable();
            $table->text('sugerenciasFonoaudiologo')->nullable();

            //datos Psicologico
            $table->text('desarrolloSocialPsicologo')->nullable();
            $table->text('respEmocionalPsicologo')->nullable();
            $table->text('refConjuntaPsicologo')->nullable();
            $table->text('juegoPsicologo')->nullable();
            $table->text('conmunicacionLengPsicologo')->nullable();
            $table->text('flexMentalPsicologo')->nullable();
            $table->text('pensamientoPsicologo')->nullable();
            $table->text('comportamientoGnrlPsicologo')->nullable();
            $table->text('concluPsicologo')->nullable();
            $table->text('relacionPsicologo')->nullable();
            $table->text('imitacionPsicologo')->nullable();
            $table->text('afectoPsicologo')->nullable();
            $table->text('cuerpoPsicologo')->nullable();
            $table->text('objetosPsicologo')->nullable();

            //datos Terapista ocupacional
            $table->text('coordinacionObsTerapeutaOcupacional')->nullable();
            $table->text('coordinacionSugTerapeutaOcupacional')->nullable();
            $table->text('procesamientoObsTerapeutaOcupacional')->nullable();
            $table->text('procesamientoSugTerapeutaOcupacional')->nullable();
            $table->text('concluSugereniasTerapeutaOcupacional')->nullable();

            //datos Psicopedagogo
            $table->text('FPBNE1Psicopedagogo')->nullable();
            $table->text('FPBNEESug1Psicopedagogo')->nullable();
            $table->text('FPBNE2Psicopedagogo')->nullable();
            $table->text('FPBNEESug2Psicopedagogo')->nullable();
            $table->text('FPBNE3Psicopedagogo')->nullable();
            $table->text('FPBNEESug3Psicopedagogo')->nullable();
            $table->text('FPBNE4Psicopedagogo')->nullable();
            $table->text('FPBNEESug4Psicopedagogo')->nullable();
            $table->text('comportamientoNivelPsicopedagogo')->nullable();
            $table->text('ComportamientoSugPsicopedagogo')->nullable();
            $table->text('aprendizajeNivelPsicopedagogo')->nullable();
            $table->text('aprendizajeSugPsicopedagogo')->nullable();
            $table->text('conclusionesSugerenciasPsicopedagogo')->nullable();

            //MultiDisciplinario

            $table->text('imitacionMultiDisiplinario')->nullable();
            $table->text('afectoMultiDisiplinario')->nullable();
            $table->text('cuerpoMultiDisiplinario')->nullable();
            $table->text('objetosMultiDisiplinario')->nullable();
            $table->text('adaptacionMultiDisiplinario')->nullable();
            $table->text('respVisualMultiDisiplinario')->nullable();
            $table->text('respAuditivaMultiDisiplinario')->nullable();
            $table->text('gustoOlfatoTactoMultiDisiplinario')->nullable();
            $table->text('ansiedadMiedoMultiDisiplinario')->nullable();
            $table->text('comunicVerbalMultiDisiplinario')->nullable();
            $table->text('comunicNoVerbalMultiDisiplinario')->nullable();
            $table->text('nivelActMultiDisiplinario')->nullable();
            $table->text('respIntelectualMultiDisiplinario')->nullable();
            $table->text('impresGnrlMultiDisiplinario')->nullable();
            $table->text('totalMultiDisiplinario')->nullable();
            $table->text('motivoDeEvaluacionMultiDisiplinario')->nullable();
            $table->text('sugerenciasMultiDisiplinario')->nullable();
            $table->text('antecedentesRelevantesMultiDisiplinario')->nullable();
            $table->text('conclusionesMultiDisiplinario')->nullable();
            

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
