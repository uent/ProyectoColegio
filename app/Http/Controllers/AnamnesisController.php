<?php

namespace App\Http\Controllers;
use App\Anamnesis;
use App\OrdenDiagnostico;
use App\Ninos;
use App\Tutor;
use View;
use Illuminate\Http\Request;

class AnamnesisController extends Controller
{
  public function GenerarInformeFinal()
  {
    //recibe idOrden
    $data = request()->all();

    $datos = Anamnesis::GenerarInformeFinal($data["idOrden"]);

    $datosOrdenes = OrdenDiagnostico::BuscarPorId($data["idOrden"]);

    $datosNino = Ninos::MostrarDatosNino($datosOrdenes["idNino"]);

    $datosProfesionales = OrdenDiagnostico::DatosProfesionalesPorIdOrdenDiagnostico($data["idOrden"]);

    $datos["fechaActual"] = date('d/m/Y');

    $datos["nombreNino"] = $datosNino["nombre"];
    $datos["apellidosNino"] = $datosNino["apellidos"];
    $datos["rutNino"] = $datosNino["rut"];
    $datos["fechaNacimiento"] = $datosNino["fechaNacimiento"];

    //textoPorqueEvaluacion

    foreach($datosProfesionales as $d)
    {
      $datos["nombre".$d->tipoEvaluacion] = $d->name;
      $datos["apellidos".$d->tipoEvaluacion] = $d->apellidos;
    }

    //var_dump($datos);
    return Pdfcontroller::GenerarPdfAnamnesis($datos);
    //por ahora retorna el pdf
    //return View::make('AnamnesisPendientes.GenerarInformeFinal')->with("datos",$datos);

  }

      public function OrdenesPendientesDeAnamnesis()
      {
        $datos = OrdenDiagnostico::OrdenesPendientesDeAnamnesisMasDatosNinos();

        return View::make('AnamnesisPendientes.AnamnesisPendientes')->with("datos",$datos);

      }

      public function AprobarInformeFinal()
      {
        //recibe idOrden
        $data = request()->all();

        $tablaOrden = OrdenDiagnostico::BuscarPorId($data["idOrden"]);

        if($tablaOrden["estado"] == "falta_anamnesis")
        {
          Anamnesis::AprobarInformeFinal($data["idOrden"]);

          $datosOrden = OrdenDiagnostico::BuscarPorId($data["idOrden"]);

          $datosTutores = Tutor::TutoresNinoPorIdNino($datosOrden["idNino"]);

          foreach($datosTutores as $t)
          {
            MailController::MailEnvioNotificacionDeFinalizacionDeInformeFinal($t->email);
          }

          return redirect()->to('Mi_menu');
        }
        else {
          return redirect()->to('PantallaDeErrorProceso');
        }
      }

    public function MostrarInformesNinoListosPorIdTutor()
    {
      //recibe idTutor
      $data = request()->all();

      $datos = OrdenDiagnostico::OrdenesPendientesDeAnamnesisMasDatosNinosPorIdTutor($data["idTutor"]);

      return View::make('InformesTutor.InformesTutor')->with("datos",$datos);
    }
}
