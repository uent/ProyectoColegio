<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;


class Usuarios extends Model
{
  protected $table = 'Usuarios';

  public static function agregar($nombre,$apellido, $rut,$profesion)
  {
    $datos = Usuarios::select('idUsuario')->where('rut','=', $rut)->get();

    if(count($datos) == 0)
    {
      $Usuarios = new Usuarios;

      $Usuarios->nombre = $nombre;
      $Usuarios->rut  = $rut;
      $Usuarios->apellidos  = $apellido;
      $Usuarios->profesion  = $profesion;

      $Usuarios->save();

      $data = Usuarios::select('idUsuario')->where('rut','=', $rut)->first();

      $id = $data->idUsuario;

      Perfil::crearPerfil($id,$profesion);

      return TRUE;
    }
    else return FALSE;


  }

  public static function BuscarProfesionalesPorTipoCita($tipoCita)
  {
    $tutores = DB::table('Usuarios')
            ->join('Perfil_Usuario', 'Usuarios.idUsuario', '=', 'Perfil_Usuario.idUsuario')
            ->join('Perfil', 'Perfil_Usuario.idPerfil', '=', 'Perfil.idPerfil')
            ->where('Perfil.nombrePerfil', '=',$tipoCita)
            ->get();

      if($tutores != NULL)
      {
        $i=0;
        foreach ($tutores as $t)
        {
          $datos[i]["nombre"] = $t->Nombre;
          $datos[i]["apellidos"] = $t->Apellidos;
          $i++;
        }
      }else $tutores=NULL;
  }

}
