<?php

namespace App\Http\Controllers;

use View;
use Validator;
use App\Encuesta;
use App\Ninos;
use App\Tutor;
use App\Citas;
use App\OrdenDiagnostico;
use App\Http\Controllers\PdfController;

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

        return View::make('Encuesta.EncuestaCoevaluacionFamiliar')->with("datos",$datos);
      }
      else echo "No hay Encuestas por completar";
    }

    public function IngresarEncuesta()
    {
      $data = request()->all();

          $validator=Validator::make($data, [//reglas de validacion de los campos del formulario

            'prevision' => ['required', 'max:5000'],
            'inputEscolaridad' => ['required', 'max:5000'],
            'inputCantHrmns' => ['required', 'max:5000'],
            'inputLugarHrmns' => ['required', 'max:5000'],
            'inputNombrePadre' => ['required', 'max:5000'],
            'inputNombreMadre' => ['required', 'max:5000'],
            'inputDireccion' => ['required', 'max:5000'],
            'inputTelefono' => ['required', 'max:5000'],
            'exampleInputEmail' => ['required', 'max:5000'],
            'inputNombreCompletaFicha' => ['required', 'max:5000'],
            'motivo1' => ['required', 'max:5000'],
            'motivo2' => ['required', 'max:5000'],
            'motivo3' => ['required', 'max:5000'],
            'motivo4' => ['required', 'max:100'],
            'motivo4profesional' => ['required_if: motivo4, ==, SI', 'max:5000'],
            'motivo4anio' => ['required_if: motivo4, ==, SI', 'max:5000'],
            'motivo4motivo' => ['required_if: motivo4, ==, SI', 'max:5000'],
            'motivo4diagnostico' => ['required_if: motivo4, ==, SI', 'max:5000'],
            'motivo4indicaciones' => ['required_if: motivo4, ==, SI', 'max:5000'],
            'motivo5' => ['required', 'max:100'],
            'motivo5indicacion' => ['required_if: motivo5, ==, SI', 'max:5000'],
            'contexto1' => ['required', 'max:5000'],
            'contexto2' => ['required', 'max:5000'],
            'antecedentes1' => ['required', 'max:5000'],
            'antecedentes2' => ['required', 'max:5000'],
            'antecedentes3' => ['required', 'max:5000'],
            'antecedentes3peso' => ['required', 'Numeric'],
            'antecedentes3talla' => ['required', 'Numeric'],
            'antecedentes3apgar' => ['Numeric'],
            'antecedentes4' => ['required', 'max:5000'],
            'antecedentes5' => ['required', 'max:5000'],
            'desarrollo1' => ['required', 'max:5000'],
            'desarrollo2' => ['required', 'max:5000'],
            'desarrollo3' => ['required', 'max:5000'],
            'desarrollo4' => ['required', 'max:5000'],
            'desarrollo5' => ['required', 'max:5000'],
            'desarrollo6' => ['required', 'max:5000'],
            'desarrollo7' => ['required', 'max:5000'],
            'desarrollo8' => ['required', 'max:5000'],
            'desarrollo9' => ['required', 'max:5000'],
            //'AVD' => ['required', 'max:5000'],
            'comer' => ['required', 'max:5000'],
            'vestirse' => ['required', 'max:5000'],
            'higiene' => ['required', 'max:5000'],

            'habitosAlimenticios' => ['required', 'max:5000'],
            'ambitoConductual1' => ['required', 'max:5000'],
            'ambitoConductual2' => ['required', 'max:5000'],
            'ambitoConductual3' => ['required', 'max:5000'],
            'ambitoConductual4' => ['required', 'max:5000'],
            'ambitoConductual5' => ['required', 'max:5000'],
            'ambitoConductual6' => ['required', 'max:5000'],
            'historiaEscolar1' => ['required', 'max:5000'],
            'historiaEscolar2' => ['required', 'max:5000'],
            'historiaEscolar3' => ['required', 'max:5000'],
            'historiaEscolar4' => ['required', 'max:5000'],
            'historiaEscolar5' => ['required', 'max:5000'],
            'historiaEscolar6' => ['required', 'max:5000'],
            'monto_pago' => ['required', 'numeric']

        ]);


        if ($validator->fails())
        {
          return redirect()->back()->withInput()->withErrors($validator->errors());
        }


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
