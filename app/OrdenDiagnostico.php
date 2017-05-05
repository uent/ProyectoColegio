<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class OrdenDiagnostico extends Model
{
  protected $table = 'OrdenDiagnostico';

    public static function crear($idNiño,$prioridad)
    {
      $orden = new OrdenDiagnostico;

      $orden->idNiño = $idNiño;
      $orden->estado = "asignar";
      $orden->prioridad = $prioridad;
      $orden->antecedentes = "";    //cambiar tipo dato

      $orden->save();
    }

    public static function OrdenesPendientesDeCitasMasDatosNiños()
    {

      $tablas = DB::table('OrdenDiagnostico')
            ->join('Niños', 'OrdenDiagnostico.idNiño', '=', 'Niños.idNiño')
            ->where('OrdenDiagnostico.estado', '=', "asignar")
            ->select('Niños.idNiño','OrdenDiagnostico.idOrdenDiagnostico','OrdenDiagnostico.prioridad','Niños.nombre','Niños.apellidos','Niños.rut')
            ->get();

        $i = 0;

        if(count($tablas) == 0) $datos = NULL;
        else
        {
          foreach ($tablas as $t)
          {
            $datos[$i]["idNiño"] = $t->idNiño;
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


    public static function ActualizarEstadoPorId($idOrden)
    {

      $orden = OrdenDiagnostico::BuscarPorId($idOrden);

      if($orden["estado"] == "asignar")
      {
        $citas = Citas::obtenerCitasPorIdOrden($idOrden);

        $statusCitas["Fonoaudiologo"] = 0;
        $statusCitas["Neurolinguístico"] = 0;
        foreach($citas as $c)
        {
          //aqui van todos los tipos de citas necesarios para cambiar el estado de
          //"asignar" a "evaluando"

          if($c["tipoEvaluacion"] == "Fonoaudiologo")
          {
            $statusCitas["Fonoaudiologo"] = 1;
          }
          if($c["tipoEvaluacion"] == "Neurolinguístico")
          {
            $statusCitas["Neurolinguístico"] = 1;
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

            OrdenDiagnostico::ActualizarEstadoPorId($idOrden);
          }
        }
      }
      //aqui van los otros condicionales para cambiar el estado de ordenDiagnostico


    }
}
