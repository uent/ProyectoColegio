<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Eventos extends Model
{
    public static function ObtenerEventosProfesionalPorIdUsuario($idUsuario)
    {
      $tablas = Citas::ObtenerDatosCitasPendientesMasDatosNinoPorIdUsuario($idUsuario);

      if(count($tablas) > 0) return $tablas;
      else return null;
    }
}
