<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Eventos extends Model
{
    public static function obtenerEventosProfesionalPorIdUsuario($idUsuario)
    {
      $tablas = Citas::ObtenerDatosCitasPendientesMasDatosNinoPorIdUsuario($idUsuario);

      if(count($tablas) > 0) return $tablas;
      else return null;
    }

    public static function horarioNinoPorIdNino($idNino)
    {
      $tablas = Citas::ObtenerDatosCitasPorIdNino($idNino);

      if(count($tablas) > 0) return $tablas;
      else return null;
    }

    public static function horarioProfesionalesMenosUnoPorIdProfesional($idNino)
    {
      $tablas = Citas::ObtenerDatosCitasPorIdNino($idNino);

      if(count($tablas) > 0) return $tablas;
      else return null;
    }
}
