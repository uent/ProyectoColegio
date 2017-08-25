<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

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

    public static function PermisosPorIdUsuario($idUsuario)
    {
        $tablas = DB::table('users')
              ->join('Perfil_Usuario', 'Perfil_Usuario.id', '=', 'Users.id')
              ->join('Perfil', 'Perfil.idPerfil', '=', 'Perfil_Usuario.idPerfil')
              ->join('Permiso_Perfil', 'Permiso_Perfil.idPerfil', '=', 'Perfil.idPerfil')
              ->join('Permiso', 'Permiso.idPermiso', '=', 'Permiso_Perfil.idPermiso')
              ->where('Users.id', '=',$idUsuario)
              ->select('Permiso.nombrePermiso')
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
