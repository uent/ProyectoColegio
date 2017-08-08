<?php

namespace App\Http\Controllers;

use View;
use Validator;
use App\Encuesta;
use App\Ninos;
use App\Tutor;
use App\Citas;
use App\OrdenDiagnostico;


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
        $datosNino = Ninos::MostrarDatosNino($datosOrden->idNino);

        $datosTutor = Tutor::UnTutorPorNinoPorIdNino($datosOrden->idNino);

        $datos["idOrden"] = $datosOrden->idOrdenDiagnostico;
        $datos["nombreNino"] = $datosNino->nombre;
        $datos["apellidoNino"] = $datosNino->apellidos;
        $datos["rutNino"] = $datosNino->rut;
        $datos["emailTutor"] = $datosTutor->email;
        $datos["nombreTutor"] = $datosTutor->name;
        $datos["apellidosTutor"] = $datosTutor->apellidos;
        $datos["telefonoTutor"] = $datosTutor->telefono;

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

    public function GenerarPdfInformeCoEvaluacion()
    {
      $data = request()->all();
      //recibe idNino

      $datoCita = Citas::BuscarPorId($data["idCita"]);

      $datosOrden = OrdenDiagnostico::BuscarPorId($datoCita["idOrden"]);

      $datosNino = Ninos::MostrarDatosNino($datosOrden["idNino"]);

$datosNino = Ninos::MostrarDatosNino($datosOrden["idNino"]);
$datos["fechaActual"] = date('d/m/Y');
$datos["nombreNino"] = $datosNino["nombre"];
$datos["apellidosNino"] = $datosNino["apellidos"];
$datos["rutNino"] = $datosNino["rut"];
$datos["fechaNacimiento"] = $datosNino["fechaNacimiento"];


  $datos["inputCantHrmns"] = $datosOrden["cantHermanos"];
  $datos["inputNombrePadre"] = $datosOrden["nombrePadre"];
  $datos["inputDireccion"]  = $datosOrden["Dirección"];
  $datos["nombreMadre"]= $datosOrden["nombreMadre"];

  $datos["inputNombreTutor"] = $datosOrden["nombreLlenadoFicha"];
  $datos["motivo1"] = $datosOrden["textoPorqueEvaluacion"];
  $datos["motivo2"] = $datosOrden["textoExpectativas"];
  $datos["motivo3"] = $datosOrden["textoTipoDificultades"];
  $datos["motivo4"] = $datosOrden["textoProfesionalActual"];
  $datos["contexto1"] = $datosOrden["textoIntegrantesOcupaciones"];
  $datos["contexto2"] = $datosOrden["textoAntecendentesEnfermedadosFamiliares"];
  $datos["antecedentes1"] = $datosOrden["textoDesarrolloEmbarazo"];
  $datos["antecedentes2"] = $datosOrden["SemanasGestacion"];
  $datos["antecedentes3"] = $datosOrden["textoParto"];
  $datos["antecedentes3peso"] = $datosOrden["peso"];
  $datos["antecedentes3talla"] = $datosOrden["talla"];
  $datos["antecedentes3apgar"] = $datosOrden["apgar"];
  $datos["desarrollo3"] = $datosOrden["textopPrimerAñoVida"];
  $datos["desarrollo4"] = $datosOrden["enfermedadesRelevantes"];
  $datos["desarrollo1"] = $datosOrden["textoMarcha"];
  $datos["desarrollo2"] = $datosOrden["textoControlEsfinter"];
  $datos["desarrollo3"] = $datosOrden["textoHabilidadesMotricesGruesas"];
  $datos["desarrollo4"]  = $datosOrden["textoHabilidadesMotricesFinas"];
  $datos["desarrollo5"] = $datosOrden["textoAdquisicionLenguaje"];
  $datos["desarrollo6"] = $datosOrden["textoDificultadesLenguaje"];
  $datos["desarrollo7"] = $datosOrden["textoDesarrolloSocialAdultos"];
  $datos["desarrollo8"] = $datosOrden["textoDesarrolloSocialNinos"];
  $datos["comer"] = $datosOrden["opcionComer"];
  $datos["vestirse"] = $datosOrden["opcionVestirse"];
  $datos["higiene"] = $datosOrden["opcionHigiene"];
  $datos["habitosAlimenticios"] = $datosOrden["textoHabitosAlimenticios"];
  $datos["ambitoConductual1"] = $datosOrden["textoManifiestaEmociones"];
  $datos["ambitoConductual2"] = $datosOrden["textoManifiestaFrustracion"];
  $datos["ambitoConductual3"] = $datosOrden["textoFlexibilidadActividades"];
  $datos["ambitoConductual4"] = $datosOrden["textoInteresesObjetosActividades"];
  $datos["ambitoConductual5"]= $datosOrden["textoIntensidadMiedos"];
  $datos["ambitoConductual6"] = $datosOrden["textoHabitosSueño"];
  $datos["historiaEscolar1"] = $datosOrden["textoInicioEscolaridad"];
  $datos["historiaEscolar2"] = $datosOrden["textoOtrosEstablecimientos"];
  $datos["historiaEscolar3"] = $datosOrden["textoEstablecimientoActual"];
  $datos["historiaEscolar4"] = $datosOrden["textoNivelCursoActual"];
  $datos["historiaEscolar5"] = $datosOrden["textoRepitencias"];
  $datos["historiaEscolar6"] = $datosOrden["textoComentarios"];

    return Pdfcontroller::GenerarPdfCuestionario($datos);
  }

}
