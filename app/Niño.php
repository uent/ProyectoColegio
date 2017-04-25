<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niño extends Model
{
    //protected $table = 'niños'; #?????

    public static function agregar($nombre, $rut)
    {
      $niño = new Niño;

      $niño->Nombre = $nombre;
      $niño->Rut  = $rut;
      $niño->contactado = false;  //se asigna false para que se considere "no contactado"

      $niño->save();
    }

    public static function MostrarNiñosParaLlamar()
    {
      //Retorna una lista de niños que cumplan la condicion de que aun no sean contactados

      $tablas = Niño::select('id','Nombre','Rut')->where('contactado','=', 'false')->get();

      $i = 0;
      if(count($tablas) == 0) $datos = NULL;
      else
      {
        foreach ($tablas as $t)
        {
          $datos[$i]["id"] = $t->id;
          $datos[$i]["nombre"] = $t->Nombre;
          $datos[$i]["rut"] = $t->Rut;
          $i++;
        }
      }
      return $datos;

    }

    public static function MostrarDatosNiño($id)
    {

      $tablas = Niño::select('id','Nombre','Rut')->where('id', '=',$id)->first();

      if(count($tablas) == 0) $datos = NULL;
      else
      {
          $datos["id"] = $tablas->id;
          $datos["nombre"] = $tablas->Nombre;
          $datos["rut"] = $tablas->Rut;
      }
      return $datos;
    }







}
