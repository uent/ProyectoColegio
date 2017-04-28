<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\OrdenDiagnostico;

use View;
use resources\views;

class OrdenDiagnosticoController extends Controller
{

    public static Function NuevaOrden($idNiño,$prioridad)  //crea una nueva tabla diagnostico para el id del niño recibido
    {
      OrdenDiagnostico::crear($idNiño,$prioridad);

    }

    public function PantallaAsignarCitasNiño($idNiño) //muestra una pantalla con todas las citas faltantes
    {
      $idOrden = OrdenDiagnostico::obtenerIdPorIdNiño($idNiño);

      $citas = Citas::obtenerCitasPorIdOrden($idOrden);

      //se evaluara que citas ya estan asignadas para esta orden
      $citaTipo1 = 0;
      $citaTipo2 = 0;
      $citaTipo3 = 0;
      $citaTipo4 = 0;

      if(count($tablas) == 0) $datos = NULL;
      else {
        foreach ($citas as $c)
        {
          if($c->tipoEvaluacion == "citaTipo1") $citaTipo1 = 1;
          if($c->tipoEvaluacion == "citaTipo2") $citaTipo2 = 1;
          if($c->tipoEvaluacion == "citaTipo3") $citaTipo3 = 1;
          if($c->tipoEvaluacion == "citaTipo4") $citaTipo4 = 1;
        }
      }

      if($citaTipo1 == 0) $citasPendientes["citaTipo1"] = false;
      else $citasPendientes["citaTipo1"] = true;
      if($citaTipo2 == 0) $citasPendientes["citaTipo2"] = false;
      else $citasPendientes["citaTipo2"] = true;
      if($citaTipo3 == 0) $citasPendientes["citaTipo3"] = false;
      else $citasPendientes["citaTipo3"] = true;
      if($citaTipo4 == 0) $citasPendientes["citaTipo4"] = false;
      else $citasPendientes["citaTipo4"] = true;

      return $citasPendientes;

    }

    public function MostrarCitasPendientes()
    {
        $ordenes = OrdenDiagnostico::OrdenesPendientesDeCitasMasDatosNiños();

        return View::make('CitasPendientes.DatosOrdenesNiños')->with("datos", $ordenes);
    }
}
