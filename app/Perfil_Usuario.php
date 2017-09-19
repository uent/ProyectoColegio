<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil_Usuario extends Model
{
  protected $table = 'perfil_usuario';

    public static function agregar($id,$idPerfil)
    {

      $datos = Perfil_Usuario::select('idPerfilUsuario')->where
                                ('id','=', $id)
                                ->where('idPerfil', '=', $idPerfil)->get();
      if(count($datos) == 0)
      {
        $PerfilUsuario = new Perfil_Usuario;

        $PerfilUsuario->id = $id;
        $PerfilUsuario->idPerfil  = $idPerfil;

        $PerfilUsuario->save();

        return TRUE;
      }
      else echo "ya existe la relacion profesional - perfil";
    }
}
