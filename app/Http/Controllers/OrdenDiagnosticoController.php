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

    $idOrden = $data["idOrden"];

      $citas = Citas::obtenerCitasPorIdOrden($idOrden);
      //falta agregar datos niños

      //se evaluara que citas ya estan asignadas para esta orden

      $statusCitas["citaTipo1"]["existe"] = false;
      $statusCitas["citaTipo2"]["existe"] = false;
      $statusCitas["citaTipo3"]["existe"] = false;
      $statusCitas["citaTipo4"]["existe"] = false;

      $statusCitas["datos"]["idOrden"] = $idOrden;
      $statusCitas["datos"]["idNiño"] = $citas["idNiño"];



      if(count($citas) == 0) ;
      else {
        foreach ($citas as $c)
        {
          if($c->tipoEvaluacion == "citaTipo1")
          {
            $statusCitas["citaTipo1"]["existe"] = true;
            $statusCitas["citaTipo1"]["estado"] = $c->Estado;
            $statusCitas["citaTipo1"]["hora"] = $c->hora;
            $statusCitas["citaTipo1"]["fecha"] = $c->fecha;

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
