<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\OrdenDiagnostico;

use View;
use resources\views;

use App\Citas;

class OrdenDiagnosticoController extends Controller
{

    public static Function NuevaOrden($idNino,$prioridad)  //crea una nueva tabla diagnostico para el id del nino recibido
    {
      OrdenDiagnostico::crear($idNino,$prioridad);

    }

    public function PantallaMostrarCitasNino() //muestra una pantalla con todas las citas faltantes
    {
      $this->validate(request(), [
          'idOrden' => ['required', 'max:200']
      ]);

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
            $statusCitas["Fonoaudiologo"]["estado"] = $c->Estado;
            $statusCitas["Fonoaudiologo"]["hora"] = $c->hora;
            $statusCitas["Fonoaudiologo"]["fecha"] = $c->fecha;

          }
          if($c["tipoEvaluacion"] == "Neurolinguístico")
          {
            $statusCitas["Neurolinguístico"]["existe"] = true;
            $statusCitas["Neurolinguístico"]["estado"] = $c->Estado;
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

    public function PdfReportes() {

      $orden = OrdenDiagnostico::BuscarPorId(4);

        $citas = Citas::obtenerCitasPorIdOrden(4);

        $view =  \View::make('pdf.reportes')->with("citas",$citas )->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('invoice');


    }


}
