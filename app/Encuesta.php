<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Encuesta extends Model
{
  protected $table = 'encuesta';

    public static function crear($data)
    {
      DB::table('ordendiagnostico')
      ->where('idOrdenDiagnostico', '=',$data["idOrden"])

      ->update([

      'cantHermanos'=> $data["inputCantHrmns"],
      'nombrePadre'=> $data["inputNombrePadre"],
      'nombreMadre'=> $data["inputNombreMadre"],
      'Dirección'=> $data["inputDireccion"],
      'nombreLlenadoFicha'=> $data["inputNombreTutor"],
      'textoPorqueEvaluacion'=> $data["motivo1"],
      'textoExpectativas'=> $data["motivo2"],
      'textoTipoDificultades'=> $data["motivo3"],
      'textoProfesionalActual'=> $data["motivo4"],  //si no
      //faltan campos para textoProfesionalActual
      'textoIntegrantesOcupaciones'=> $data["contexto1"],
      'textoAntecendentesEnfermedadosFamiliares'=> $data["contexto2"],
      'textoDesarrolloEmbarazo'=> $data["antecedentes1"],
      'SemanasGestacion'=> $data["antecedentes2"],
      'textoParto'=> $data["antecedentes3"],
      'peso'=> $data["antecedentes3peso"],
      'talla'=> $data["antecedentes3talla"],
      'apgar'=> $data["antecedentes3apgar"],
      'textopPrimerAñoVida'=> $data["desarrollo3"],
      'enfermedadesRelevantes'=> $data["desarrollo4"],
      'textoMarcha'=> $data["desarrollo1"],
      'textoControlEsfinter'=> $data["desarrollo2"],
      'textoHabilidadesMotricesGruesas'=> $data["desarrollo3"],
      'textoHabilidadesMotricesFinas'=> $data["desarrollo4"],
      'textoAdquisicionLenguaje'=> $data["desarrollo5"],
      'textoDificultadesLenguaje'=> $data["desarrollo6"],
      'textoDesarrolloSocialAdultos'=> $data["desarrollo7"],
      'textoDesarrolloSocialNinos'=> $data["desarrollo8"],
      'opcionComer'=> $data["comer"],
      'opcionVestirse'=> $data["vestirse"],
      'opcionHigiene'=> $data["higiene"],
      'textoHabitosAlimenticios'=> $data["habitosAlimenticios"],
      'textoManifiestaEmociones'=> $data["ambitoConductual1"],
      'textoManifiestaFrustracion'=> $data["ambitoConductual2"],
      'textoFlexibilidadActividades'=> $data["ambitoConductual3"],
      'textoInteresesObjetosActividades'=> $data["ambitoConductual4"],
      'textoIntensidadMiedos'=> $data["ambitoConductual5"],
      'textoHabitosSueño'=> $data["ambitoConductual6"],
      'textoInicioEscolaridad'=> $data["historiaEscolar1"],
      'textoOtrosEstablecimientos'=> $data["historiaEscolar2"],
      'textoEstablecimientoActual'=> $data["historiaEscolar3"],
      'textoNivelCursoActual'=> $data["historiaEscolar4"],
      //'texto'=> $data[""],
      'textoRepitencias'=> $data["historiaEscolar5"],
      'textoComentarios'=> $data["historiaEscolar6"],

      ]);

    }
}
