<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Eventos extends Model
{
    public static function ObtenerEventosProfesionalPorIdUsuario($idUsuario)
    {
      $tablas = Citas::ObtenerDatosCitasPendientesMasDatosNinoPorIdUsuario($idUsuario);

      if(count($tablas))
      {
        foreach($tablas as $t)
        {
          $data[] = array(
              "title"=>$t->nombre, //obligatoriamente "title", "start" y "url" son campos requeridos
              "start"=>$t->fechaInicio, //por el plugin asi que asignamos a cada uno el valor correspondiente
              "end"=>$t->fechaFin,
              "allDay"=>'false',
              "backgroundColor"=>'blue',
              "borderColor"=>'back',
              "id"=>$t->idCitas
              //"url"=>"cargaEventos".$id[$i]
              //en el campo "url" concatenamos el el URL con el id del evento para luego
              //en el evento onclick de JS hacer referencia a este y usar el método show
              //para mostrar los datos completos de un evento
          );
        }
        return $tablas; //!!!!!!!!!!
      }
      else {
        return null;
      }


    }
}
