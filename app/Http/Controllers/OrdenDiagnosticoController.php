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
      $statusCitas["Neurolinguístico"]["existe"] = false;


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
          if($c["tipoEvaluacion"] == "Neurolinguístico")
          {
            $statusCitas["Neurolinguístico"]["existe"] = true;
            $statusCitas["Neurolinguístico"]["estado"] = $c->estado;
            $statusCitas["Neurolinguístico"]["hora"] = $c->hora;
            $statusCitas["Neurolinguístico"]["fecha"] = $c->fecha;

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
      //en el futuro debe mostrar una lista con todos los niños pendientes, no solo uno
      return OrdenDiagnostico::UnaOrdenPendienteDeCoevaluacionPorIdTutor($idTutor);
    }

    public static  function UnaOrdenPendienteDeCoevaluacionPorIdTutor($idTutor)
    {
      //repetida
      //en el futuro debe mostrar una lista con todos los niños pendientes, no solo uno
      return OrdenDiagnostico::UnaOrdenPendienteDeCoevaluacionPorIdTutor($idTutor);
    }
}
