<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niño extends Model
{
    protected $table = 'niños'; #?????

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

      $tablas = Niño::select('Nombre','Rut')->where('contactado','=', 'false')->get();
      //var_dump($tablas->Nombre);

      $i = 0;
        foreach ($tablas as $t)
        {
          $datos[$i]["nombre"] = $t->Nombre;
          $datos[$i]["rut"] = $t->Rut;
          $i++;
        }


      return $datos;

    }









}
