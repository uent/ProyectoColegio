<?php

namespace App\Http\Controllers;

use View;
use Validator;
use App\Encuesta;
use App\Ninos;
use App\Tutor;
use App\OrdenDiagnostico;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EncuestaController extends Controller
{

    public function MostrarEncuesta()
    {
      $idTutor = Auth::user()->id;

      $datosOrden = OrdenDiagnosticoController::UnaOrdenPendienteDeCoevaluacionPorIdTutor($idTutor);

      $datosNino = Ninos::MostrarDatosNino($datosOrden->idNino);

      $datosTutor = Tutor::UnTutorPorNinoPorIdNino($datosOrden->idNino);

      if($datosOrden /*&& OrdenDiagnostico::VerificarCoEvaluacionCompletoPorId*/)
      {
        $datos["idOrden"] = $datosOrden->idOrdenDiagnostico;
        $datos["nombreNino"] = $datosNino->nombre;
        $datos["apellidoNino"] = $datosNino->apellidos;
        $datos["rutNino"] = $datosNino->rut;
        $datos["emailTutor"] = $datosTutor->email;
        $datos["nombreTutor"] = $datosTutor->name;
        $datos["apellidosTutor"] = $datosTutor->apellidos;

        return View::make('Encuesta\EncuestaCoevaluacionFamiliar')->with("datos",$datos);
      }
      else echo "No hay Encuestas por completar";
    }

    public function IngresarEncuesta()
    {
      $data = request()->all();

          $validator=Validator::make($data, [//reglas de validacion de los campos del formulario

        ]);


        if ($validator->fails())
        {
          return redirect()->back()->withErrors($validator->errors());
        }
        //quizas faltan algunas variables !!revisar
      //recibe idOrden, inputNombre,inputApellido,inputRut,InputNac,inputEscolaridad,inputCantHrmns,
      //inputLugarHrmns,input,input,inputDireccion,inputTelefono,exampleInputEmail,
      //inputNombreTutor,motivo1,motivo2,motivo3,motivo4,motivo4profesional,motivo4anio,
      //motivo4motivo,motivo4diagnostico,motivo4indicaciones,motivo5,motivo5indicacion,contexto1,contexto2,
      //antecedentes1,antecedentes2,antecedentes3,antecedentes3,antecedentes3,antecedentes3,
      //antecedentes4,antecedentes5,desarrollo1,desarrollo2,desarrollo3,desarrollo4,desarrollo5,desarrollo6,
      //desarrollo7,desarrollo8,monto_pago


      Encuesta::crear($data);

      OrdenDiagnostico::ActualizarEstadoPorId($data["idOrden"]);

      return redirect()->to('Mi_menu');
    }
}
