<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Nino_tutor;
use App\Ninos;

class Nino_tutor extends Model
{
  protected $table = 'nino_tutor';

  public static function agregar($idNino,$idTutor,$parentesco)
  {
    $ninoTutor = new Nino_tutor;

    $ninoTutor->idNino = intval($idNino);
    $ninoTutor->idTutor = intval($idTutor);
    $ninoTutor->parentesco = $parentesco;

    $ninoTutor->save();
  }


  public static function BuscarIdTutorPorIdNino($idNino)
  {
    if ($idNino != NULL)
    {
      $tablas = Nino_tutor::select('idTutor')->where('idNino', '=',$idNino)->get();

      $i = 0;
      if(count($tablas) == 0) $datos = NULL;
      else
      {
        foreach ($tablas as $t)
        {
          $datos[$i]["idTutor"] = $t->idTutor;
          $i++;
        }
        return $datos;
      }
    }else return NULL;

  }

  public static function MostrarDatosNinoMasDatosTutoresPorIdNino($idNino)
  {
    $datosNino = Ninos::MostrarDatosNino($idNino);

    //$datosOrdenes =

    $i = 0;
    if($datosNino == null) return null;
    else
    {
      $datos["nino"]["idNino"] = $datosNino->idNino;
      $datos["nino"]["nombre"] = $datosNino->nombre;
      $datos["nino"]["apellidos"] = $datosNino->apellidos;
      $datos["nino"]["rut"] = $datosNino->rut;
      $datos["nino"]["fechaNacimiento"] = date('d-m-Y', strtotime( $datosNino->fechaNacimiento));

      $datosTutores = Tutor::TutoresNinoPorIdNino($datosNino->idNino);
      //se guardan los multiples tutores que puede tener un niño en el arreglo
      $i=0;
      foreach ($datosTutores as $t)
      {
        $datos["tutores"][$i]["idTutor"] = $t->id;
        $datos["tutores"][$i]["nombreTutor"] = $t->name;
        $datos["tutores"][$i]["apellidosTutor"] = $t->apellidos;
        $datos["tutores"][$i]["rutTutor"] = $t->rut;
        $datos["tutores"][$i]["emailTutor"] = $t->email;
        $datos["tutores"][$i]["telefonoTutor"] = $t->telefono;

        $i++;
      }
    }
    return $datos;
  }
}
