<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;
use View;
use App\Eventos;
use Illuminate\Support\Facades\Auth;


class CalendarioController extends Controller
{

    public function MostrarCalendarioProfesional()
    {
      $idUsuario = Auth::user()->id;

      $eventos = Eventos::ObtenerEventosProfesionalPorIdUsuario($idUsuario);
      if($eventos == null) return null;
      else
      {
        $calendar = \Calendar::addEvents($eventos)
        ->setOptions([ //set fullcalendar options
  		      'firstDay' => 1
  	       ]);

        //return view('mycalender', compact('calendar'));
        return View::make('Calendario\CalendarioTest', compact('calendar'));
      }




    }
}
