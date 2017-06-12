<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

use App\Nino_tutor;
use App\User;

class Tutor extends Model
{
  protected $table = 'Tutor'; #?????

  public static function agregar($nombre,$apellido, $rut,$mail)
  {

    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randstring = '';

    $largoFinal = rand(6,10);

    for ($i = 0; $i < $largoFinal; $i++) {
        $randstring[$i] = $characters[rand(0, (strlen($characters)-1))];
    }

    User::agregar($nombre,$apellido, $rut,"Tutor",$mail,$randstring);


  }

  public static function IdTutorPorRutTutor($rut)
  {
    //falta verificar que sea tutor real!!!!!!!!!!!
    if ($rut != NULL)
    {
      $tablas = User::select('id')->where('rut','=', $rut)->get();

      if(count($tablas) == 0) $datos = NULL;
      else
      {
        foreach ($tablas as $t)
        {
          $datos = $t->id;
          return $datos;
        }
      }

    }
  }

  public static function TutoresNinoPorIdNino($idNino) //retorna todos los tutores que tengan una relacion con un nino particular
  {
    $tutores = DB::table('Nino_tutor')
            ->join('Users', 'Users.id', '=', 'Nino_tutor.idTutor')
            ->where('Nino_tutor.idNino', '=',$idNino)
            ->get();

    if($tutores != NULL) return $tutores;
    else return NULL;
  }

  public static function UnTutorPorNinoPorIdNino($idNino)
  {
    $tutor = DB::table('Nino_tutor')
            ->join('Users', 'Users.id', '=', 'Nino_tutor.idTutor')
            ->where('Nino_tutor.idNino', '=',$idNino)
            ->select()->first();

    if($tutor != NULL) return $tutor;
    else return NULL;
  }

  public static function ModificarClavePorIdTutor($idTutor,$clave)
  {
    User::where('id',"=", $idTutor)->update(['password' => bcrypt($clave)]);
  }

}
