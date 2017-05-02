<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\OrdenDiagnostico;

use View;
use resources\views;

use App\Citas;

class OrdenDiagnosticoController extends Controller
{

    public static Function NuevaOrden($idNiño,$prioridad)  //crea una nueva tabla diagnostico para el id del niño recibido
    {
      OrdenDiagnostico::crear($idNiño,$prioridad);

    }

    public function PantallaMostrarCitasNiño() //muestra una pantalla con todas las citas faltantes
    {
      $this->validate(request(), [
          'idOrden' => ['required', 'max:200']
      ]);

    $data = request()->all();

      $orden = OrdenDiagnostico::BuscarPorId($data["idOrden"]);

      $citas = Citas::obtenerCitasPorIdOrden($orden["idOrdenDiagnostico"]);
      //falta agregar datos niños

      //se evaluara que citas ya estan asignadas para esta orden

      $statusCitas["Fonoaudiologo"]["existe"] = false;
      $statusCitas["Neurolinguístico"]["existe"] = false;


      $statusCitas["datos"]["idOrden"] = $orden["idOrdenDiagnostico"];
      $statusCitas["datos"]["idNiño"] = $orden["idNiño"];


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
        }
      }
        //si un campo de $statusCitas queda con el valor false es porque aun no a sido asignada esa cita al niño

      return View::make('CitasPendientes.AsignarCitasPendientes')->with("Citas",$statusCitas );

    }



    public function MostrarCitasPendientes()
    {
        $ordenes = OrdenDiagnostico::OrdenesPendientesDeCitasMasDatosNiños();

        return View::make('CitasPendientes.DatosOrdenesNiños')->with("datos", $ordenes);
    }



}
