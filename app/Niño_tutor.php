<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Niño_tutor extends Model
{
  protected $table = 'Niño_tutor';

  public static function agregar($idNiño,$idTutor)
  {
    $niñoTutor = new Niño_tutor;

    $niñoTutor->idNiño = intval($idNiño);
    $niñoTutor->idTutor = intval($idTutor);

    $niñoTutor->save();
  }


  public static function BuscarIdTutorPorIdNiño($idNiño)
  {
    if ($idNiño != NULL)
    {
      $tablas = Niño_tutor::select('idTutor')->where('idNiño', '=',$idNiño)->get();

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
}
