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

    $datosOrdenes = OrdenDiagnostico::BuscarPorId($datos["idNino"]);

    $datosNino = Ninos::MostrarDatosNino($datosOrdenes["idNino"]);

    $datos["nombreNino"] = $datosNino["nombre"];
    $datos["apellidosNino"] = $datosNino["apeliidos"];
    $datos["rutNino"] = $datosNino["rut"];

    return Pdfcontroller::GenerarPdfAnamnesis($datos);
    //por ahora retorna el pdf
    //return View::make('AnamnesisPendientes.FormularioAnamnesis')->with("datos",$datos);

  }

      public function OrdenesPendientesDeAnamnesis()
      {
        $datos = OrdenDiagnostico::OrdenesPendientesDeAnamnesisMasDatosNinos();

        return View::make('AnamnesisPendientes.AnamnesisPendientes')->with("datos",$datos);

      }

}
