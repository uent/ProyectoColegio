<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

use App\Niño_tutor;

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

  public static function TutoresNiñoPorIdNiño($idNiño) //retorna todos los tutores que tengan una relacion con un niño particular
  {
    $tutores = DB::table('Niño_tutor')
            ->join('Tutor', 'Tutor.idTutor', '=', 'Niño_tutor.idTutor')
            ->where('Niño_tutor.idNiño', '=',$idNiño)
            ->get();

    if($tutores != NULL) return $tutores;
    else return NULL;
  }


}
