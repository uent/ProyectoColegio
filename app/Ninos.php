<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Ninos extends Model
{
    protected $table = 'Ninos'; #?????

    public static function agregar($nombre,$apellido, $rut, $fechaNacimiento)
    {
      $nino = new Ninos;

      $nino->nombre = $nombre;
      $nino->rut  = $rut;
      $nino->apellidos  = $apellido;
      $nino->fechaNacimiento  = date( 'Y-m-d', intval($fechaNacimiento) );

      $nino->save();

      return Ninos::select('idNino')->where('rut','=', $rut)->get();

    }

    public static function MostrarNinosParaLlamar()
    {
      //Retorna una lista de ninos que cumplan la condicion de que aun no sean contactados

      $tablas =   DB::table('Ninos')
                    ->join('OrdenDiagnostico','OrdenDiagnostico.idNino','=','Ninos.idNino')
                    ->where('OrdenDiagnostico.estado','=','contacto_pendiente')
                    ->select('Ninos.idNino','nombre','apellidos','rut','OrdenDiagnostico.created_at')->get();

      $i = 0;
      if(count($tablas) == 0) $datos = NULL;
      else
      {

        foreach ($tablas as $t)
        {
          $datosTutor = Tutor::UnTutorPorNinoPorIdNino($t->idNino);

          $datos[$i]["id"] = $t->idNino;
          $datos[$i]["nombre"] = $t->nombre;
          $datos[$i]["apellidos"] = $t->apellidos;
          $datos[$i]["rut"] = $t->rut;
          $datos[$i]["fecha"] = $t->created_at;
          $datos[$i]["nombreTutor"] = $datosTutor->name;
          $datos[$i]["apellidosTutor"] = $datosTutor->apellidos;
          $i++;
        }
      }
      //var_dump($datos);
      return $datos;

    }

    public static function MostrarDatosNino($id)
    {

      return $tablas = Ninos::select()->where('idNino', '=',$id)->first();

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

    public static function BuscarPorRut($Rut)   //revisar metodo!!!!
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

    public static function MostrarTodosLosNinos()
    {
      return Ninos::select()->get();
    }

    public static function ActualizarDatosNinoPorId($idNino, $nombreNino, $apellidoNino,
                                                    $rutNino, $fechaNacimiento)
    {
      Ninos::where('idNino',"=", $idNino)
      ->update([
        'nombre'=> $nombreNino,
        'apellidos'=> $apellidoNino,
        'rut'=> $rutNino,
        'fechaNacimiento'=> $fechaNacimiento]);
    }
}
