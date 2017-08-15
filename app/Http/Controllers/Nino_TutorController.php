<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nino_tutor;
use View;

class Nino_TutorController extends Controller
{
  public function ModificarDatosNinoTutores()
  {
    $data = request()->all();
    //recibe idNino

    $datosTablas = Nino_tutor::MostrarDatosNinoMasDatosTutoresPorIdNino($data["idNino"]);
    
    return View::make('PantallasEditar.EditarNino-Tutor')->with("datos", $datosTablas);
  }
}
