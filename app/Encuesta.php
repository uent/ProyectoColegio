<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    public statis function crear($data)
    {
      DB::table('OrdenDiagnostico')
      ->where('idOrden', '=',$data["idOrden"])

      ->update(['FechaNacimiento'=> $data["InputNac"])
      ->update(['cantHermanos'=> $data[""])
      ->update(['nombrePadre'=> $data[""])
      ->update(['nombreMadre'=> $data[""])
      ->update(['Dirección'=> $data[""])
      ->update(['nombreLlenadoFicha'=> $data[""])
      ->update(['textoPorqueEvaluacion'=> $data[""])
      ->update(['textoExpectativas'=> $data[""])
      ->update(['textoTipoDificultades'=> $data[""])
      ->update(['textoProfesionalActual'=> $data[""])
      ->update(['textoIntegrantesOcupaciones'=> $data[""])
      ->update(['textoDesarrolloEmbarazo'=> $data[""])
      ->update(['SemanasGestacion'=> $data[""])
      ->update(['textoParto'=> $data[""])
      ->update(['peso'=> $data["antecedentes3peso"])
      ->update(['talla'=> $data["antecedentes3talla"])
      ->update(['apgar'=> $data["antecedentes3apgar"])
      ->update(['textopPrimerAñoVida'=> $data["desarrollo3"])
      ->update(['enfermedadesRelevantes'=> $data["desarrollo4"])
      ->update(['textoMarcha'=> $data["desarrollo1"])
      ->update(['textoControlEsfinter'=> $data["desarrollo2"])
      ->update(['textoHabilidadesMotricesGruesas'=> $data["desarrollo3"])
      ->update(['textoHabilidadesMotricesFinas'=> $data["desarrollo4"])
      ->update(['textoAdquisicionLenguaje'=> $data["desarrollo5"])
      ->update(['textoDificultadesLenguaje'=> $data["desarrollo6"])
      ->update(['textoDesarrolloSocialAdultos'=> $data["desarrollo7"])
      ->update(['textoDesarrolloSocialNinos'=> $data["desarrollo8"])
      ->update(['OpcionComer'=> $data[""])
      ->update(['OpcionVestirse'=> $data[""])
      ->update(['OpcionHigiene'=> $data[""])
      ->update(['textoHabitosAlimenticios'=> $data[""])
      ->update(['textoManifiestaEmociones'=> $data[""])
      ->update(['textoManifiestaFrustracion'=> $data[""])
      ->update(['textoFlexibilidadActividades'=> $data[""])
      ->update(['textoInteresesObjetosActividades'=> $data[""])
      ->update(['textoIntensidadMiedos'=> $data[""])
      ->update(['textoHabitosSueño'=> $data[""])
      ->update(['textoInicioEscolaridad'=> $data[""])
      ->update(['textoOtrosEstablecimientos'=> $data[""])
      ->update(['textoEstablecimientoActual'=> $data[""])
      ->update(['textoNivelCursoActual'=> $data[""])
      ->update(['texto'=> $data[""])
      ->update(['textoRepitencias'=> $data[""])
      ->update(['textoComentarios'=> $data[""]);

      'inputNombre'=>['required','max:200'],
      'inputApellido'=>['required','max:200'],
      'inputRut'=>['required','max:200'],
      'InputNac'=>['required','max:200'],
      'inputEscolaridad'=>['required','max:200'],
      'inputCantHrmns'=>['required','max:200'],
      'inputLugarHrmns'=>['required','max:200'],
      'inputNombrePadre'=>['required','max:200'],
      'inputNombreMadre'=>['required','max:200'],
      'inputDireccion'=>['required','max:200'],
      'inputNombreTutor'=>['required','max:200'],
      'inputTelefono'=>['required','max:200'],
      'exampleInputEmail'=>['required','max:200'],
      'motivo1'=>['required','max:200'],
      'motivo2'=>['required','max:200'],
      'motivo3'=>['required','max:200'],
      'motivo4'=>['required','max:200'],//si, no
      'motivo4profesional'=>['required','max:200'],
      'motivo4anio'=>['required','max:200'],
      'motivo4motivo'=>['required','max:200'],
      'motivo4diagnostico'=>['required','max:200'],
      'motivo4indicaciones'=>['required','max:200'],
      'motivo4indicaciones'=>['required','max:200'],
      'motivo5'=>['required','max:200'],//si,no
      'motivo5indicacion'=>['required','max:200'],
      'contexto1'=>['required','max:200'],
      'contexto2'=>['required','max:200'],
      'antecedentes1'=>['required','max:200'],
      'antecedentes2'=>['required','max:200'],
      'antecedentes3'=>['required','max:200'],
      'antecedentes3peso'=>['required','max:200'],
      'antecedentes3talla'=>['required','max:200'],
      'antecedentes3apgar'=>['required','max:200'],
      'antecedentes4'=>['required','max:200'],
      'antecedentes5'=>['required','max:200'],

      'monto_pago'=>['required','max:200'],
    }
}
