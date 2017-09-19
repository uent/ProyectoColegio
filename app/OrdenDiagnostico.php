<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class OrdenDiagnostico extends Model
{
  protected $table = 'ordendiagnostico';

    public static function crear($idNino,$prioridad,$Diagnostico,
                                $Derivacion,$Solicitud,$Escolaridad,$Observaciones)
    {
      $orden = new OrdenDiagnostico;

      $orden->idNino = $idNino;
      $orden->estado = "contacto_pendiente";
      $orden->prioridad = $prioridad;
      $orden->diagnosticoProfesional = $Diagnostico;
      $orden->derivacion = $Derivacion;
      $orden->solicitud = $Solicitud;
      $orden->observaciones = $Escolaridad;
      $orden->escolaridad = $Observaciones;

      $orden->save();

      Anamnesis::NuevaAnamnesis($orden->id);

    }

    public static function OrdenesPendientesDeCitasMasDatosNinos()
    {

      $tablas = DB::table('ordendiagnostico')
            ->join('ninos', 'ordendiagnostico.idNino', '=', 'ninos.idNino')
            ->where('ordendiagnostico.estado', '=', "asignar")
            ->select('ninos.idNino','ordendiagnostico.idOrdenDiagnostico','ordendiagnostico.prioridad','ninos.nombre','ninos.apellidos','ninos.rut')
            ->get();

        $i = 0;

        if(count($tablas) == 0) $datos = NULL;
        else
        {
          foreach ($tablas as $t)
          {
            $datos[$i]["idNino"] = $t->idNino;
            $datos[$i]["idOrden"] = $t->idOrdenDiagnostico;
            $datos[$i]["nombre"] = $t->nombre;
            $datos[$i]["apellidos"] = $t->apellidos;
            $datos[$i]["rut"] = $t->rut;
            $datos[$i]["prioridad"] = $t->prioridad;


            $i++;
          }
        }

        return $datos;


    }

    public static function BuscarPorId($idOrden)
    {
      return OrdenDiagnostico::select()->where('idOrdenDiagnostico','=', $idOrden)->first();
    }

    public static function AsignarPrioridadPorIdOrden($idOrden,$prioridad)
    {
      OrdenDiagnostico::where('idOrdenDiagnostico','=', $idOrden)
      ->update(['prioridad' => $prioridad]);
    }

    public static function BuscarPorIdNino($idNiño)
    {
      return OrdenDiagnostico::select()->where('idNino','=', $idNiño)->first();
    }

    public static function OrdenesPendientesDeAnamnesisMasDatosNinos()
    {

      $tablas = DB::table('ordendiagnostico')
            ->join('ninos', 'ordendiagnostico.idNino', '=', 'ninos.idNino')
            ->where('ordendiagnostico.estado', '=', "falta_anamnesis")
            ->select('ninos.idNino','ordendiagnostico.idOrdenDiagnostico','ordendiagnostico.prioridad','ninos.nombre','ninos.apellidos','ninos.rut')
            ->get();

        $i = 0;

        if(count($tablas) == 0) $datos = NULL;
        else
        {
          foreach ($tablas as $t)
          {
            $datos[$i]["idNino"] = $t->idNino;
            $datos[$i]["idOrden"] = $t->idOrdenDiagnostico;
            $datos[$i]["nombre"] = $t->nombre;
            $datos[$i]["apellidos"] = $t->apellidos;
            $datos[$i]["rut"] = $t->rut;
            $datos[$i]["prioridad"] = $t->prioridad;

            $i++;
          }
        }

        return $datos;


    }


    public static function ActualizarEstadoPorId($idOrden)
    {

      $orden = OrdenDiagnostico::BuscarPorId($idOrden);


      if($orden["estado"] == "contacto_pendiente")
      {
        if($orden["prioridad"] != "")
        $orden = OrdenDiagnostico::where('idOrdenDiagnostico', $idOrden)
        ->update(['estado' => "falta_coevaluacion"]);
      }

      if($orden["estado"] == "falta_coevaluacion")
      {

        if(OrdenDiagnostico::VerificarCoEvaluacionCompletoPorId($orden["idOrden"]))
        $orden = OrdenDiagnostico::where('idOrdenDiagnostico', $idOrden)
        ->update(['estado' => "asignar"]);
      }

      if($orden["estado"] == "asignar")
      {
        $citas = Citas::obtenerCitasPorIdOrden($idOrden);

        $statusCitas["Fonoaudiologo"] = 0;
        $statusCitas["Psicologico"] = 0;
        $statusCitas["TerapeutaOcupacional"] = 0;
        $statusCitas["Psicopedagogo"] = 0;

        foreach($citas as $c)
        {
          //aqui van todos los tipos de citas necesarios para cambiar el estado de
          //"asignar" a "evaluando"

          if($c["tipoEvaluacion"] == "Fonoaudiologo")
          {
            $statusCitas["Fonoaudiologo"] = 1;
          }

          if($c["tipoEvaluacion"] == "Psicologico")
          {
            $statusCitas["Psicologico"] = 1;
          }

          if($c["tipoEvaluacion"] == "TerapeutaOcupacional")
          {
            $statusCitas["TerapeutaOcupacional"] = 1;
          }

          if($c["tipoEvaluacion"] == "Psicopedagogo")
          {
            $statusCitas["Psicopedagogo"] = 1;
          }

        }
        //procedera a sumar los valores del arreglo anterior
        //si la suma es igual a la cantidad de tipos diferentes para las citas
        //se procedera a cambiar el estado de la orden a evaluando
        $i = 0;
        foreach($statusCitas as $sc)
        {
          $i = $i + $sc;
        }
        if($i == count($statusCitas))
        {
          $orden = OrdenDiagnostico::where('idOrdenDiagnostico', $idOrden)
          ->update(['estado' => "evaluando"]);

          //llama a este mismo metodo para verificar si se necesita un nuevo
          //cambio de estado
          OrdenDiagnostico::ActualizarEstadoPorId($idOrden);
        }
      }

      if($orden["estado"] == "evaluando")
      {
        $citas = Citas::obtenerCitasPorIdOrden($idOrden);

        $i=0;

        foreach($citas as $c)
        {
          //se busca las condiciones necesarias para cambiar el estado de
          //"evaluando" a "falta_anamnesis"
          //se busca que todas las citas esten en estado "completado"

          if($c["estado"] == "completado")
          {
            $i++;
          }
        }

        //si la suma es igual a la cantidad de tipos diferentes para las citas
        //se procedera a cambiar el estado de la orden a "falta_anamnesis"

        if($i == 2)
        {
          $orden = OrdenDiagnostico::where('idOrdenDiagnostico', $idOrden)
          ->update(['estado' => "falta_anamnesis"]);

          //llama a este mismo metodo para verificar si se necesita un nuevo
          //cambio de estado
          OrdenDiagnostico::ActualizarEstadoPorId($idOrden);
      }


      //aqui van los otros condicionales para cambiar el estado de ordenDiagnostico
    }
  }

  public static function UnaOrdenPendienteDeCoevaluacionPorIdTutor($idTutor)
  {
    //arreglar!!!!!!
    //

    $tablas = DB::table('ordendiagnostico')
          ->join('ninos', 'ordendiagnostico.idNino', '=', 'ninos.idNino')
          ->join('nino_tutor', 'ninos.idNino', '=', 'nino_tutor.idNino')
          ->join('users', 'nino_tutor.idTutor', '=', 'users.id')
          ->where('ordendiagnostico.estado', '=', "falta_coevaluacion")
          ->select()
          ->first();
    return $tablas;
  }

  public static function VerificarCoEvaluacionCompletoPorId($idOrden)
  {
    //cambiar si se permite que el formulario se pueda guardar sin todos los datos
    return true;
  }

  public static function DatosProfesionalesPorIdOrdenDiagnostico($idOrden)
  {
    //retorna todos los profesionales y el tipo de cita a la que fue asignadas a la ordenDiagnostico
    return DB::table('ordendiagnostico')
          ->join('citas', 'ordendiagnostico.idOrdenDiagnostico', '=', 'citas.idOrden')
          ->join('users', 'citas.idProfesional', '=', 'users.id')
          ->where('ordendiagnostico.idOrdenDiagnostico','=',$idOrden)
          ->select('users.name','users.apellidos','users.rut','citas.tipoEvaluacion')
          ->get();
  }

  public static function OrdenesPendientesDeAnamnesisMasDatosNinosPorIdTutor($idTutor)
  {
    $tablas = DB::table('ordendiagnostico')
          ->join('ninos', 'ordendiagnostico.idNino', '=', 'ninos.idNino')
          ->join('nino_tutor', 'ninos.idNino', '=', 'nino_tutor.idNino')
          ->where('ordendiagnostico.estado', '=', "proceso_finalizado")
          ->where('nino_tutor.idTutor', '=', $idTutor)
          ->select('ninos.idNino','ordendiagnostico.idOrdenDiagnostico','ordendiagnostico.prioridad','ninos.nombre','ninos.apellidos','ninos.rut')
          ->get();

      $i = 0;

      if(count($tablas) == 0) $datos = NULL;
      else
      {
        foreach ($tablas as $t)
        {
          $datos[$i]["idNino"] = $t->idNino;
          $datos[$i]["idOrden"] = $t->idOrdenDiagnostico;
          $datos[$i]["nombre"] = $t->nombre;
          $datos[$i]["apellidos"] = $t->apellidos;
          $datos[$i]["rut"] = $t->rut;
          $datos[$i]["prioridad"] = $t->prioridad;

          $i++;
        }
      }

      return $datos;
  }

  public static function BuscarPorIdNinoMasDatosCita($idNiño)
  {
    $tablasOrden = OrdenDiagnostico::select()->where('ordendiagnostico.idNino', '=', $idNiño)->get();

    if(count($tablasOrden) == 0)return null;

    $i = 1;
    foreach($tablasOrden as $o)
    {
      $datos[$i]["idOrden"] = $o->idOrdenDiagnostico;
      $datos[$i]["prioridad"] = $o->prioridad;
      $datos[$i]["inicio"] = date("d-m-Y", strtotime($o->created_at));

      $tablasCitas = Citas::obtenerCitasPorIdOrden($o->idOrdenDiagnostico);

      $auxCitas[1] = "Psicologico";
      $auxCitas[2] = "TerapeutaOcupacional";
      $auxCitas[3] = "Fonoaudiologo";
      $auxCitas[4] = "Psicopedagogo";

      $j = 1;
      foreach($tablasCitas as $c)
      {
          $datos[$i]["citas"][$j]["idCita"] = $c->idCitas;
          $datos[$i]["citas"][$j]["tipoEvaluacion"] = $c->tipoEvaluacion;
          $datos[$i]["citas"][$j]["idProfesional"] = $c->idProfesional;
          $datos[$i]["citas"][$j]["estado"] = $c->estado;
          $datos[$i]["citas"][$j]["fechaCita"] = date("d-m-Y", strtotime($c->fechaInicio));

          $datosProfesional = User::DatosUsuariosPorIdUsuario($datos[$i]["citas"][$j]["idProfesional"]);
          $datos[$i]["citas"][$j]["nombreProfesional"] = $datosProfesional["nombre"] . $datosProfesional["apellidos"];


          for ($k = 1; $k <=count($auxCitas) ; $k++) {
            if($auxCitas[$k] == $c->tipoEvaluacion)
            {
              $auxCitas[$k] = "encontrado";
            }
          }
          //var_dump($auxCitas);
        $j++;
      }

      foreach($auxCitas as $a)
      {
        if(!($a == "encontrado"))
        {
          $datos[$i]["citas"][$j]["tipoEvaluacion"] = $a;
          $datos[$i]["citas"][$j]["estado"] = "sin asignar";

          $j++;
        }


      }

      $i++;
    }
    return $datos;
  }

  public static function CambiarEstadoAEvaluandoPorIdOrden($idOrden)
  {
    OrdenDiagnostico::where('idOrdenDiagnostico',"=", $idOrden)->update(['estado' => "asignar"]);

  }
}
