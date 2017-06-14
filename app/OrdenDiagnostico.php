<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class OrdenDiagnostico extends Model
{
  protected $table = 'OrdenDiagnostico';

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
    }

    public static function OrdenesPendientesDeCitasMasDatosNinos()
    {

      $tablas = DB::table('OrdenDiagnostico')
            ->join('Ninos', 'OrdenDiagnostico.idNino', '=', 'Ninos.idNino')
            ->where('OrdenDiagnostico.estado', '=', "asignar")
            ->select('Ninos.idNino','OrdenDiagnostico.idOrdenDiagnostico','OrdenDiagnostico.prioridad','Ninos.nombre','Ninos.apellidos','Ninos.rut')
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

      $tablas = DB::table('OrdenDiagnostico')
            ->join('Ninos', 'OrdenDiagnostico.idNino', '=', 'Ninos.idNino')
            ->where('OrdenDiagnostico.estado', '=', "falta_anamnesis")
            ->select('Ninos.idNino','OrdenDiagnostico.idOrdenDiagnostico','OrdenDiagnostico.prioridad','Ninos.nombre','Ninos.apellidos','Ninos.rut')
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
        $statusCitas["Psicológico"] = 0;
        foreach($citas as $c)
        {
          //aqui van todos los tipos de citas necesarios para cambiar el estado de
          //"asignar" a "evaluando"

          if($c["tipoEvaluacion"] == "Fonoaudiologo")
          {
            $statusCitas["Fonoaudiologo"] = 1;
          }
          if($c["tipoEvaluacion"] == "Psicológico")
          {
            $statusCitas["Psicológico"] = 1;
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
        if($i == 2)
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

    $tablas = DB::table('OrdenDiagnostico')
          ->join('Ninos', 'OrdenDiagnostico.idNino', '=', 'Ninos.idNino')
          ->join('Nino_tutor', 'Ninos.idNino', '=', 'Nino_tutor.idNino')
          ->join('Users', 'Nino_tutor.idTutor', '=', 'Users.id')
          ->where('OrdenDiagnostico.estado', '=', "falta_coevaluacion")
          ->select()
          ->first();
    return $tablas;
  }

  public static function VerificarCoEvaluacionCompletoPorId($idOrden)
  {
    //cambiar si se permite que el formulario se pueda guardar sin todos los datos
    return true;
  }
}
