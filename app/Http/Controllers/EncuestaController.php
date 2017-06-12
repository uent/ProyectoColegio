<?php

namespace App\Http\Controllers;

use View;
use Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EncuestaController extends Controller
{

    public function MostrarEncuesta()
    {
      $idTutor = Auth::user()->id;

      $datosOrden = OrdenDiagnosticoController::UnaOrdenPendienteDeCoevaluacionPorIdTutor($idTutor);

      if($datosOrden /*&& OrdenDiagnostico::VerificarCoEvaluacionCompletoPorId*/)
      {
        return View::make('Encuesta\EncuestaCoevaluacionFamiliar')->with("datos",$datosOrden);
      }
      else echo "No hay Encuestas por completar";
    }

    public function IngresarEncuesta()
    {
      $data = request()->all();

          $validator=Validator::make($data, [//reglas de validacion de los campos del formulario
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
            'desarrollo1'=>['required','max:200'],
            'desarrollo2'=>['required','max:200'],
            'desarrollo3'=>['required','max:200'],
            'desarrollo4'=>['required','max:200'],
            'desarrollo5'=>['required','max:200'],
            'desarrollo6'=>['required','max:200'],
            'desarrollo7'=>['required','max:200'],
            'desarrollo8'=>['required','max:200'],
            'monto_pago'=>['required','max:200'],

        ]);

        if ($validator->fails())
        {
          return redirect()->back()->withErrors($validator->errors());
        }
        //quizas faltan algunas variables !!revisar
      //recibe idOrden, inputNombre,inputApellido,inputRut,InputNac,inputEscolaridad,inputCantHrmns,
      //inputLugarHrmns,inputNombrePadre,inputNombreMadre,inputDireccion,inputTelefono,exampleInputEmail,
      //inputNombreTutor,motivo1,motivo2,motivo3,motivo4,motivo4profesional,motivo4anio,
      //motivo4motivo,motivo4diagnostico,motivo4indicaciones,motivo5,motivo5indicacion,contexto1,contexto2,
      //antecedentes1,antecedentes2,antecedentes3,antecedentes3peso,antecedentes3talla,antecedentes3apgar,
      //antecedentes4,antecedentes5,desarrollo1,desarrollo2,desarrollo3,desarrollo4,desarrollo5,desarrollo6,
      //desarrollo7,desarrollo8,monto_pago


      Encueta::crear($data);


    }
}
