<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
  protected $table = 'Citas'; #?????

  public static function obtenerCitasPorIdOrden($idOrden)
  {
    return $id = Citas::select()->where('idOrden','=', $idOrden)->first();

  }

}
