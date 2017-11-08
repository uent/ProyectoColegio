<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\OrdenDiagnostico;
use Validator;
use View;
use App\Citas;

class OrdenDiagnosticoController extends Controller
{

    public static Function NuevaOrden($idNino,$prioridad,
          $Diagnostico,$Derivacion,$Solicitud,$Escolaridad,$Observaciones)
          //crea una nueva tabla diagnostico para el id del nino recibido
    {
      OrdenDiagnostico::crear($idNino,$prioridad,
            $Diagnostico,$Derivacion,$Solicitud,$Escolaridad,$Observaciones);

    }

    public function PantallaMostrarCitasNino() //muestra una pantalla con todas las citas faltantes
    {
        //recibe idOrden
        $data = request()->all();


      $orden = OrdenDiagnostico::BuscarPorId($data["idOrden"]);

      $citas = Citas::obtenerCitasPorIdOrden($orden["idOrdenDiagnostico"]);
      //quizas falte agregar datos ninos

      //se evaluara que citas ya estan asignadas para esta orden

      $statusCitas["Fonoaudiologo"]["existe"] = false;
      $statusCitas["Psicologico"]["existe"] = false;
      $statusCitas["TerapeutaOcupacional"]["existe"] = false;
      $statusCitas["Psicopedagogo"]["existe"] = false;
      $statusCitas["MultiDisciplinario"]["existe"] = false;

      $statusCitas["datos"]["idOrden"] = $orden["idOrdenDiagnostico"];
      $statusCitas["datos"]["idNino"] = $orden["idNino"];


      if(count($citas) != 0)
      {
        foreach ($citas as $c)
        {

          if($c["tipoEvaluacion"] == "Fonoaudiologo")
          {
            $statusCitas["Fonoaudiologo"]["existe"] = true;
            $statusCitas["Fonoaudiologo"]["estado"] = $c->estado;
            $statusCitas["Fonoaudiologo"]["hora"] = $c->hora;
            $statusCitas["Fonoaudiologo"]["fecha"] = $c->fecha;
          }

          if($c["tipoEvaluacion"] == "Psicologico")
          {
            $statusCitas["Psicologico"]["existe"] = true;
            $statusCitas["Psicologico"]["estado"] = $c->estado;
            $statusCitas["Psicologico"]["hora"] = $c->hora;
            $statusCitas["Psicologico"]["fecha"] = $c->fecha;
          }

          if($c["tipoEvaluacion"] == "TerapeutaOcupacional")
          {
            $statusCitas["TerapeutaOcupacional"]["existe"] = true;
            $statusCitas["TerapeutaOcupacional"]["estado"] = $c->estado;
            $statusCitas["TerapeutaOcupacional"]["hora"] = $c->hora;
            $statusCitas["TerapeutaOcupacional"]["fecha"] = $c->fecha;
          }

          if($c["tipoEvaluacion"] == "Psicopedagogo")
          {
            $statusCitas["Psicopedagogo"]["existe"] = true;
            $statusCitas["Psicopedagogo"]["estado"] = $c->estado;
            $statusCitas["Psicopedagogo"]["hora"] = $c->hora;
            $statusCitas["Psicopedagogo"]["fecha"] = $c->fecha;
          }
          if($c["tipoEvaluacion"] == "MultiDisciplinario")
          {
            $statusCitas["MultiDisciplinario"]["existe"] = true;
            $statusCitas["MultiDisciplinario"]["estado"] = $c->estado;
            $statusCitas["MultiDisciplinario"]["hora"] = $c->hora;
            $statusCitas["MultiDisciplinario"]["fecha"] = $c->fecha;
          }
        }
      }
        //si un campo de $statusCitas queda con el valor false es porque aun no a sido asignada esa cita al nino

      return View::make('CitasPendientes.AsignarCitasPendientes')->with("Citas",$statusCitas );

    }

    public function MostrarCitasPendientes()
    {
        $ordenes = OrdenDiagnostico::OrdenesPendientesDeCitasMasDatosNinos();

        return View::make('CitasPendientes.DatosOrdenesNinos')->with("datos", $ordenes);
    }


    public function OrdenesPendientesDeAnamnesis()
    {
      $datos = OrdenDiagnostico::OrdenesPendientesDeAnamnesisMasDatosNinos();


      return View::make('AnamnesisPendientes.AnamnesisPendientes')->with("datos",$datos);

    }


    public static function OrdenesPendientesDeCoevaluacionPorIdTutor($idTutor)
    {
      //borrar metodo??
      //en el futuro debe mostrar una lista con todos los niños pendientes, no solo uno
      return OrdenDiagnostico::UnaOrdenPendienteDeCoevaluacionPorIdTutor($idTutor);
    }

    public static  function UnaOrdenPendienteDeCoevaluacionPorIdTutor($idTutor)
    {
      //borrar metodo??
      //repetida
      //en el futuro debe mostrar una lista con todos los niños pendientes, no solo uno
      return OrdenDiagnostico::UnaOrdenPendienteDeCoevaluacionPorIdTutor($idTutor);
    }
}
