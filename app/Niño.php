<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niño extends Model
{
    protected $table = 'niños'; #?????

    public static function agregar($nombre, $rut)
    {
      $niño = new Niño;

      $niño->Nombre = $nombre;
      $niño->Rut  = $rut;

      $niño->save();
    }
}
