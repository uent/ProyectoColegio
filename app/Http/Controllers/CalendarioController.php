<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\GoogleController;
use View;
use App\Eventos;
use Illuminate\Support\Facades\Auth;


class CalendarioController extends Controller
{

    public function MostrarCalendarioProfesional()
    {
      $idUsuario = Auth::user()->id;

      $JsonEventos = Eventos::ObtenerEventosProfesionalPorIdUsuario($idUsuario);

      if($JsonEventos == null) return null;
      else
      {
        return View::make('Calendario\CalendarioTest', compact('JsonEventos'));
      }




    }
}
