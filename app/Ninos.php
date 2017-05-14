<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Ninos extends Model
{
    protected $table = 'Ninos'; #?????

    public static function agregar($nombre,$apellido, $rut)
    {
      $nino = new Ninos;

      $nino->nombre = $nombre;
      $nino->rut  = $rut;
      $nino->apellidos  = $apellido;
      $nino->contactado = false;  //se asigna false para que se considere "no contactado"

      $nino->save();

      return Ninos::select('idNino')->where('rut','=', $rut)->get();

    }

    public static function MostrarNinosParaLlamar()
    {
      //Retorna una lista de ninos que cumplan la condicion de que aun no sean contactados

      $tablas = Ninos::select('idNino','nombre','apellidos','rut')->where('contactado','=', 'false')->get();

      $i = 0;
      if(count($tablas) == 0) $datos = NULL;
      else
      {

        foreach ($tablas as $t)
        {

          $datos[$i]["id"] = $t->idNino;
          $datos[$i]["nombre"] = $t->nombre;
          $datos[$i]["apellidos"] = $t->apellidos;
          $datos[$i]["rut"] = $t->rut;
          $i++;
        }
      }
      //var_dump($datos);
      return $datos;

    }

    public static function MostrarDatosNino($id)
    {

      $tablas = Ninos::select('idNino','Nombre','Rut')->where('idNino', '=',$id)->first();

      if(count($tablas) == 0) $datos = NULL;
      else
      {
          $datos["id"] = $tablas->idNino;
          $datos["nombre"] = $tablas->Nombre;
          $datos["rut"] = $tablas->Rut;
      }
      return $datos;
    }

    public static function ExisteRut($Rut)
    {
      $tablas = Ninos::select('idNino')->where('rut', '=',$Rut)->first();

      if(count($tablas) == 0) return false;
      else
      {
          return true;
      }
    }

    public static function BuscarPorRut($Rut)
    {
      $tablas = Ninos::select('idNino')->where('rut', '=',$Rut)->first();

      if(count($tablas) == 0) return Null;
      else
      {
          return $tablas->idNino;
      }
    }

    public static function CambiarStatusContacto($id)
    {
      DB::table('Ninos')
            ->where('idNino', $id)
            ->update(['contactado' => true]);

      return true;

    }

}
