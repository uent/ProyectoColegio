<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Nino_tutor extends Model
{
  protected $table = 'Nino_tutor';

  public static function agregar($idNino,$idTutor)
  {
    $ninoTutor = new Nino_tutor;

    $ninoTutor->idNino = intval($idNino);
    $ninoTutor->idTutor = intval($idTutor);

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
}
