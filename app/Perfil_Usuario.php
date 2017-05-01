<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil_Usuario extends Model
{
  protected $table = 'Perfil_Usuario';

    public static function agregar($idUsuario,$idPerfil)
    {

      $datos = Perfil_Usuario::select('idPerfilUsuario')->where
                                ('idUsuario','=', $idUsuario)
                                ->where('idPerfil', '=', $idPerfil)->get();
      if(count($datos) == 0)
      {
        $PerfilUsuario = new Perfil_Usuario;

        $PerfilUsuario->idUsuario = $idUsuario;
        $PerfilUsuario->idPerfil  = $idPerfil;

        $PerfilUsuario->save();

        return TRUE;
      }
      else echo "ya existe la relacion profesional - perfil";
    }
}
