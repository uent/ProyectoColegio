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
            //"falta_coevaluacion": el tutor debe llenar la ficha de co-evaluacion
            //"asignar": aun hace falta asignar alguna o todas las citas
            //"evaluando": aun faltan por finalizar las citas y sus respectivos informes
            //"falta_anamnesis": las citas fueron completadas pero falta crear la anamnesis
            //"proceso_finalizado": ya finalizo la entrega de los documentos al tutor
            $table->string('prioridad',20);
            //indica la prioridad de la orden de diagnostico
            // "alta" o "normal"
            $table->text('diagnosticoProfesional');
            $table->text('derivacion');
            $table->text('solicitud');
            $table->text('observaciones');
            $table->text('escolaridad');

            //Encuesta Coevaluación Familiar

            // IDENTIFICACIÓN I
            $table->tinyInteger('cantHermanos')->nullable();
            $table->text('nombrePadre')->nullable();
            $table->text('nombreMadre')->nullable();
            $table->text('Dirección')->nullable();
            $table->text('nombreLlenadoFicha')->nullable();

            // MOTIVO DE CONSULTA II

            $table->text('textoPorqueEvaluacion')->nullable();
            $table->text('textoExpectativas')->nullable();
            $table->text('textoTipoDificultades')->nullable();
            $table->text('textoProfesionalActual')->nullable();

            // CONTEXTO FAMILIAR III

            $table->text('textoIntegrantesOcupaciones')->nullable();
            $table->text('textoAntecendentesEnfermedadosFamiliares')->nullable();

            // ANTECEDENTES RELEVANTES IV

            $table->text('textoDesarrolloEmbarazo')->nullable();
            $table->text('SemanasGestacion')->nullable();
            $table->text('textoParto')->nullable();
            $table->tinyInteger('peso')->nullable();
            $table->tinyInteger('talla')->nullable();
            $table->tinyInteger('apgar')->nullable();
            $table->text('textopPrimerAñoVida')->nullable();
            $table->text('enfermedadesRelevantes')->nullable();

            // DESARROLLO EVOLUTIVO V

            $table->text('textoMarcha')->nullable();
            $table->text('textoControlEsfinter')->nullable();
            $table->text('textoHabilidadesMotricesGruesas')->nullable();
            $table->text('textoHabilidadesMotricesFinas')->nullable();
            $table->text('textoAdquisicionLenguaje')->nullable();
            $table->text('textoDificultadesLenguaje')->nullable();
            $table->text('textoDesarrolloSocialAdultos')->nullable();
            $table->text('textoDesarrolloSocialNinos')->nullable();
            //"¿Qué tan autónomo/a es para las siguientes actividades? Marque a continuación"
            // estos campos pueden tener los valores "Solo", "Con poca ayuda", "Con mucha ayuda"

              $table->text('opcionComer')->nullable();
              $table->text('opcionVestirse')->nullable();
              $table->text('opcionHigiene')->nullable();

            //

            $table->text('textoHabitosAlimenticios')->nullable();

            //  ÁMBITO CONDUCTUAL VI

            $table->text('textoManifiestaEmociones')->nullable();
            $table->text('textoManifiestaFrustracion')->nullable();
            $table->text('textoFlexibilidadActividades')->nullable();
            $table->text('textoInteresesObjetosActividades')->nullable();
            $table->text('textoIntensidadMiedos')->nullable();
            $table->text('textoHabitosSueño')->nullable();

            //  HISTORIA ESCOLAR VII

            $table->text('textoInicioEscolaridad')->nullable();
            $table->text('textoOtrosEstablecimientos')->nullable();
            $table->text('textoEstablecimientoActual')->nullable();
            $table->text('textoNivelCursoActual')->nullable();
            $table->text('texto')->nullable();
            $table->text('textoRepitencias')->nullable();
            $table->text('textoComentarios')->nullable();


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
    }
}
