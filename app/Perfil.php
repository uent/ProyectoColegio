<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Perfil extends Model
{
  protected $table = 'perfil';

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

    public static function PermisosPorIdUsuario($idUsuario)
    {
        $tablas = DB::table('users')
              ->join('perfil_usuario', 'perfil_usuario.id', '=', 'users.id')
              ->join('perfil', 'perfil.idPerfil', '=', 'perfil_usuario.idPerfil')
              ->join('permiso_perfil', 'permiso_perfil.idPerfil', '=', 'perfil.idPerfil')
              ->join('permiso', 'permiso.idPermiso', '=', 'permiso_perfil.idPermiso')
              ->where('users.id', '=',$idUsuario)
              ->select('permiso.nombrePermiso')
              ->get();

          if(count($tablas) != 0)
          {
            $i = 0;
            foreach($tablas as $t)
            {
              $permisos[$i] = $t->nombrePermiso;
              $i++;
            }
          }else $permisos = null;


          return $permisos;
    }
}
