<?php

namespace App\Http\Controllers;
use App\Anamnesis;
use App\OrdenDiagnostico;
use App\Ninos;
use View;
use Illuminate\Http\Request;

class AnamnesisController extends Controller
{
  public function FormularioAnamnesis()
  {
    //recibe idOrden
    $data = request()->all();

    $datos = Anamnesis::FormularioAnamnesis($data["idOrden"]);

    $datosOrdenes = OrdenDiagnostico::BuscarPorId($data["idOrden"]);

    $datosNino = Ninos::MostrarDatosNino($datosOrdenes["idNino"]);

    $datosProfesionales = OrdenDiagnostico::DatosProfesionalesPorIdOrdenDiagnostico($data["idOrden"]);

    $datos["fechaActual"] = date('d/m/Y');

    $datos["nombreNino"] = $datosNino["nombre"];
    $datos["apellidosNino"] = $datosNino["apellidos"];
    $datos["rutNino"] = $datosNino["rut"];

    $datos["fechaNacimiento"] = $datosOrdenes["FechaNacimiento"];
    $datos["fechaNacimiento"] = $datosOrdenes["FechaNacimiento"];
    //textoPorqueEvaluacion

    foreach($datosProfesionales as $d)
    {
      $datos["nombre".$d->tipoEvaluacion] = $d->name;
      $datos["apellidos".$d->tipoEvaluacion] = $d->apellidos;
    }

    var_dump($datos);
    //return Pdfcontroller::GenerarPdfAnamnesis($datos);
    //por ahora retorna el pdf
    //return View::make('AnamnesisPendientes.FormularioAnamnesis')->with("datos",$datos);

  }

      public function OrdenesPendientesDeAnamnesis()
      {
        $datos = OrdenDiagnostico::OrdenesPendientesDeAnamnesisMasDatosNinos();

        return View::make('AnamnesisPendientes.AnamnesisPendientes')->with("datos",$datos);

      }

}
