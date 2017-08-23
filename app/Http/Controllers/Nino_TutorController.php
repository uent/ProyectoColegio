<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nino_tutor;
use App\OrdenDiagnostico;
use View;

class Nino_TutorController extends Controller
{
  public function ModificarDatosNinoTutores()
  {
    $data = request()->all();
    //recibe idNino

    $tablasTutorNino = Nino_tutor::MostrarDatosNinoMasDatosTutoresPorIdNino($data["idNino"]);

    $tablasOrdenCitas = OrdenDiagnostico::BuscarPorIdNinoMasDatosCita($data["idNino"]);

    $datos["nino"] = $tablasTutorNino["nino"];
    $datos["tutores"] = $tablasTutorNino["tutores"];
    $datos["ordenes"] = $tablasOrdenCitas;

    //var_dump($tablasOrdenCitas);
    return View::make('PantallasEditar.EditarNino-Tutor')->with("datos", $datos);
  }
}
