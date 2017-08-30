<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

use App\Nino_tutor;
use App\User;
use App\Http\Controllers\UtilidadesController;


class Tutor extends Model
{
  protected $table = 'Tutor'; #?????

  public static function agregar($nombre,$apellido, $rut,$mail,$telefono)
  {

    $clave = UtilidadesController::GeneradorDeContrasena();

    User::agregar($nombre,$apellido, $rut,"Tutor",$mail,$clave,$telefono);


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
    $tutores = DB::table('nino_tutor')
            ->join('users', 'Users.id', '=', 'nino_tutor.idTutor')
            ->where('nino_tutor.idNino', '=',$idNino)
            ->get();

    if($tutores != NULL) return $tutores;
    else return NULL;
  }

  public static function UnTutorPorNinoPorIdNino($idNino)
  {
    $tutor = DB::table('nino_tutor')
            ->join('users', 'users.id', '=', 'nino_tutor.idTutor')
            ->where('nino_tutor.idNino', '=',$idNino)
            ->select()->first();

    if($tutor != NULL) return $tutor;
    else return NULL;
  }

  public static function ModificarClavePorIdTutor($idTutor,$clave)
  {
    User::where('id',"=", $idTutor)->update(['password' => bcrypt($clave)]);
  }

  public static function ActualizarDatosTutorPorId($idTutor,$nombreTutor,$apellidoTutor,
                                    $rutTutor,$fonoTutor)
  {
    User::where('id',"=", $idTutor)
    ->update([
      'name'=> $nombreTutor,
      'apellidos'=> $apellidoTutor,
      'rut'=> $rutTutor,
      'telefono'=> $fonoTutor]);
  }
}
