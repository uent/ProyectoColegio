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
          //se arma un arreglo con los campos requeridos para utilizarlo en FullCalendar
          $data[] = array(
              "id"=> $t->idCitas,
    					"title"=> $t->tipoEvaluacion . " " . $t->nombre . " " . $t->apellidos,
    					"start"=> $t->fechaInicio,
              "end"=> $t->fechaFin,
              "url"=> $t->idCitas,
              "startEditable"=> 0,
              "allDay"=> 0,
              "durationEditable"=> 0


              //"url"=>"cargaEventos".$id[$i]
              //en el campo "url" concatenamos el el URL con el id del evento para luego
              //en el evento onclick de JS hacer referencia a este y usar el método show
              //para mostrar los datos completos de un evento
          );
        }


        return json_encode($data);
      }
      else {
        return json_encode(null);
      }


    }
}
