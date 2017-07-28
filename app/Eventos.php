<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Calendar;

class Eventos extends Model
{
    public static function ObtenerEventosProfesionalPorIdUsuario($idUsuario)
    {
      $tablas = Citas::ObtenerDatosCitasPendientesMasDatosNinoPorIdUsuario($idUsuario);

      if(count($tablas))
      {
        foreach($tablas as $t)
        {
          $eventos[] = Calendar::event(
            $t->tipoEvaluacion, //event title
            false, //full day event?
            '2017-05-14', //start time, must be a DateTime object or valid DateTime format (http://bit.ly/1z7QWbg)
            '2017-05-14', //end time, must be a DateTime object or valid DateTime format (http://bit.ly/1z7QWbg),
            1, //optional event ID
            [
              'url' => 'http://full-calendar.io'
            ]
              );
        }
        return $eventos;
      }
      else {
        return null;
      }


    }
}
