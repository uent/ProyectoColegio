<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Eventos extends Model
{
  protected $table = 'eventos';

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

    public static function horarioProfesionalesMenosUnoPorIdUsuario($idUsuario)
    {
      $eventosTodosUsuarios = Eventos::todosLosEventosProfesionales();

      $i = 1;
      $eventos = null;

      foreach($eventosTodosUsuarios as $e)
      {
        if($e->idProfesional == $idUsuario)
        {
          $eventos[$i] = $e;

          $i++;
        }

      }

      return $eventos;
    }

    public static function todosLosEventosProfesionales()
    {
      return Citas::todosLosEventosProfesionales();
    }
}
