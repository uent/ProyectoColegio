<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
  protected $table = 'Usuarios'; #?????

  public static function agregar($nombre,$apellido, $rut,$profesion)
  {
    $Usuarios = new Usuarios;

    $Usuarios->nombre = $nombre;
    $Usuarios->rut  = $rut;
    $Usuarios->apellidos  = $apellido;
    $Usuarios->profesion  = $profesion;

    $Usuarios->save();

    return $id = Usuarios::select('idUsuario')->where('rut','=', $rut)->get();

  }

}
