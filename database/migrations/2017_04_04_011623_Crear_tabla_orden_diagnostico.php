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
            //"finalizado": ya finalizo la entrega de los documentos al tutor
            $table->string('prioridad',20);
            // "alta" o "normal"
            //$table->integer('idTutor');
            $table->string('diagnosticoProfesional',100);
            $table->string('derivacion',50);
            $table->string('solicitud',50);
            $table->string('observaciones',100);
            $table->string('escolaridad',100);

            //Encuesta Coevaluación Familiar

            // IDENTIFICACIÓN I
            $table->tinyInteger('cantHermanos')->nullable();
            $table->string('nombrePadre',100)->nullable();
            $table->string('nombreMadre',100)->nullable();
            $table->string('Dirección',100)->nullable();
            $table->string('nombreLlenadoFicha',100)->nullable();

            // MOTIVO DE CONSULTA II

            $table->string('textoPorqueEvaluacion',100)->nullable();
            $table->string('textoExpectativas',100)->nullable();
            $table->string('textoTipoDificultades',100)->nullable();
            $table->string('textoProfesionalActual',100)->nullable();

            // CONTEXTO FAMILIAR III

            $table->string('textoIntegrantesOcupaciones',100)->nullable();
            $table->string('textoAntecendentesEnfermedadosFamiliares',100)->nullable();

            // ANTECEDENTES RELEVANTES IV

            $table->string('textoDesarrolloEmbarazo',100)->nullable();
            $table->string('SemanasGestacion',100)->nullable();
            $table->string('textoParto',100)->nullable();
            $table->string('peso',100)->nullable();
            $table->string('talla',100)->nullable();
            $table->string('apgar',100)->nullable();
            $table->string('textopPrimerAñoVida',100)->nullable();
            $table->string('enfermedadesRelevantes',100)->nullable();

            // DESARROLLO EVOLUTIVO V

            $table->string('textoMarcha',100)->nullable();
            $table->string('textoControlEsfinter',100)->nullable();
            $table->string('textoHabilidadesMotricesGruesas',100)->nullable();
            $table->string('textoHabilidadesMotricesFinas',100)->nullable();
            $table->string('textoAdquisicionLenguaje',100)->nullable();
            $table->string('textoDificultadesLenguaje',100)->nullable();
            $table->string('textoDesarrolloSocialAdultos',100)->nullable();
            $table->string('textoDesarrolloSocialNinos',100)->nullable();
            //"¿Qué tan autónomo/a es para las siguientes actividades? Marque a continuación"
            // estos campos pueden tener los valores "Solo", "Con poca ayuda", "Con mucha ayuda"

              $table->string('opcionComer',100)->nullable();
              $table->string('opcionVestirse',100)->nullable();
              $table->string('opcionHigiene',100)->nullable();

            //

            $table->string('textoHabitosAlimenticios',100)->nullable();

            //  ÁMBITO CONDUCTUAL VI

            $table->string('textoManifiestaEmociones',100)->nullable();
            $table->string('textoManifiestaFrustracion',100)->nullable();
            $table->string('textoFlexibilidadActividades',100)->nullable();
            $table->string('textoInteresesObjetosActividades',100)->nullable();
            $table->string('textoIntensidadMiedos',100)->nullable();
            $table->string('textoHabitosSueño',100)->nullable();

            //  HISTORIA ESCOLAR VII

            $table->string('textoInicioEscolaridad',100)->nullable();
            $table->string('textoOtrosEstablecimientos',100)->nullable();
            $table->string('textoEstablecimientoActual',100)->nullable();
            $table->string('textoNivelCursoActual',100)->nullable();
            $table->string('texto',100)->nullable();
            $table->string('textoRepitencias',100)->nullable();
            $table->string('textoComentarios',100)->nullable();


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
