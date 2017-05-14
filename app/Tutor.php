<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

use App\Nino_tutor;

class Tutor extends Model
{
  protected $table = 'Tutor'; #?????

  public static function agregar($nombre,$apellido, $rut,$parentesco,$mail)
  {
    $tutor = new Tutor;

    $tutor->nombre = $nombre;
    $tutor->rut  = $rut;
    $tutor->apellidos  = $apellido;
    $tutor->parentesco  = $parentesco;
    $tutor->mail  = $mail;

    $tutor->save();
  }

  public static function IdTutorPorRutTutor($rut)
  {
    if ($rut != NULL)
    {
      $tablas = Tutor::select('idTutor')->where('rut', '=',$rut)->get();

      if(count($tablas) == 0) $datos = NULL;
      else
      {
        foreach ($tablas as $t)
        {
          $datos = $t->idTutor;
          return $datos;
        }
      }

    }
  }

  public static function TutoresNinoPorIdNino($idNino) //retorna todos los tutores que tengan una relacion con un nino particular
  {
    $tutores = DB::table('Nino_tutor')
            ->join('Tutor', 'Tutor.idTutor', '=', 'Nino_tutor.idTutor')
            ->where('Nino_tutor.idNino', '=',$idNino)
            ->get();

    if($tutores != NULL) return $tutores;
    else return NULL;
  }


}
