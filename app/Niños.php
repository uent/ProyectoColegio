<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niños extends Model
{
    protected $table = 'Niños'; #?????

    public static function agregar($nombre,$apellido, $rut)
    {
      $niño = new Niños;

      $niño->nombre = $nombre;
      $niño->rut  = $rut;
      $niño->apellidos  = $apellido;
      $niño->contactado = false;  //se asigna false para que se considere "no contactado"

      $niño->save();

      return $id = Niños::select('idNiño')->where('rut','=', $rut)->get();

    }

    public static function MostrarNiñosParaLlamar()
    {
      //Retorna una lista de niños que cumplan la condicion de que aun no sean contactados

      $tablas = Niños::select('idNiño','nombre','apellidos','rut')->where('contactado','=', 'false')->get();

      $i = 0;
      if(count($tablas) == 0) $datos = NULL;
      else
      {

        foreach ($tablas as $t)
        {

          $datos[$i]["id"] = $t->idNiño;
          $datos[$i]["nombre"] = $t->nombre;
          $datos[$i]["apellidos"] = $t->apellidos;
          $datos[$i]["rut"] = $t->rut;
          $i++;
        }
      }
      //var_dump($datos);
      return $datos;

    }

    public static function MostrarDatosNiño($id)
    {

      $tablas = Niños::select('idNiño','Nombre','Rut')->where('idNiño', '=',$id)->first();

      if(count($tablas) == 0) $datos = NULL;
      else
      {
          $datos["id"] = $tablas->idNiño;
          $datos["nombre"] = $tablas->Nombre;
          $datos["rut"] = $tablas->Rut;
      }
      return $datos;
    }

    public static function ExisteRut($Rut)
    {
      $tablas = Niños::select('idNiño')->where('rut', '=',$Rut)->first();

      if(count($tablas) == 0) return false;
      else
      {
          return true;
      }
    }

    public static function BuscarPorRut($Rut)
    {
      $tablas = Niños::select('idNiño')->where('rut', '=',$Rut)->first();

      if(count($tablas) == 0) return Null;
      else
      {
          return $tablas->idNiño;
      }
    }



}
