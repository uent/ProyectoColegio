<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
  protected $table = 'Perfil';

    public static function TiposPerfiles()
    {
       $tablas = Perfil::select('nombrePerfil')->get();

       if(count($tablas) == 0) $datos = NULL;
       else
       {
         $i = 0;
         foreach ($tablas as $t)
         {
           $datos[$i]["nombrePerfil"] = $t->nombrePerfil;
           $i++;
         }
       }
       return $datos;
    }

    public static function crearPerfil($id,$profesion)
    {
      $tablas = Perfil::select('idPerfil')->where('nombrePerfil','=',$profesion)->first();

      if(count($tablas) != 0)
      {
        Perfil_Usuario::agregar($id,$tablas->idPerfil);
      }
      else echo "No existe esa profesion";
    }

}
