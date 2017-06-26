<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilidadesController extends Controller
{
    public static function GeneradorDeContrasena()
    {
      //$characters son los posibles valores que puede tomar la contraseña
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $randstring = '';

      $largoFinal = rand(6,10); //genera una clave de 6 a 10 digitos

      for ($i = 0; $i < $largoFinal; $i++) {
          $randstring[$i] = $characters[rand(0, (strlen($characters)-1))];
      }

      return $randstring;
    }
}
