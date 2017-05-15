<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;

use App\User;
use App\Ninos;
use App\Citas;
use App\OrdenDiagnostico;
use Illuminate\Support\Facades\Auth;


class CitaController extends Controller
{
    public function PantallaAsignarCitasNino()
    {
      $this->validate(request(), [
          'tipoCita' => ['required', 'max:200'],
          'idOrden' => ['required', 'max:200']
      ]);

    $data["datos"] = request()->all();

    $data["profesionales"] = User::BuscarProfesionalesPorTipoCita($data["datos"]["tipoCita"]);


    return View::make('CitasPendientes.CrearCita')->with("datos",$data );

    }

    public function InsertarCita()
    {
      $this->validate(request(), [
          'id' => ['required', 'max:200'],
          'dia' => ['required', 'max:200'],
          'tipoCita' => ['required', 'max:200'],
          'hora' => ['required', 'max:200'],
          'idOrden' => ['required', 'max:200']
      ]);

      $data = request()->all();

      $data["estado"] = "pendiente";
      $data["comentarios"] = "";
      $data["reporte"] = "";

      $aux = OrdenDiagnostico::BuscarPorId($data["idOrden"]);
      $data["idNino"] = $aux["idNino"];

      Citas::InsertarCita($data);

      OrdenDiagnostico::ActualizarEstadoPorId($data["idOrden"]);

      return redirect()->to('Mi_menu');

    }

    public function CitasPendientesPorUsuarioActual()
    {
      $id = Auth::user()->id;

      $citas = Citas::ObtenerDatosCitasPendientesPorIdUsuario($id);

      if($citas != null)
      {
        $i=0;
        foreach($citas as $c)
        {
          $datos[$i]["idNino"] = $c->idNino;
          $datos[$i]["idcitas"] = $c->idcitas;
          $datos[$i]["nombre"] = $c->nombre;
          $datos[$i]["apellidos"] = $c->apellidos;
          $datos[$i]["rut"] = $c->rut;
          $datos[$i]["tipoEvaluacion"] = $c->tipoEvaluacion;
        }
      }

      return View::make('EvaluarCitas.MostrarCitasPendientes')->with("datos",$datos );

    }

    public function FormularioInformeCita()
    {
      $this->validate(request(), [
          'idCita' => ['required', 'max:200'],
      ]);

      $data = request()->all();

      $cita = Citas::BuscarPorId($data["idCita"]);

      if($cita != null)
      {
        $niño = Ninos::MostrarDatosNino($cita->idNino);

        if($niño != null)
        {
          $datos["idCita"] = $cita->idCitas;
          $datos["idNino"] = $cita->idNino;
          $datos["comentarios"] = $cita->comentarios;
          $datos["estado"] = $cita->estado;
          $datos["nombre"] = $niño["nombre"];
          $datos["apellidos"] = $niño["apellidos"];
          $datos["rut"] = $niño["rut"];

          return View::make('EvaluarCitas.FormularioCita')->with("datos",$datos);
        }
      }
      echo "No existe cita";
    }

    public function AgregarReporteCita()
    {

      $this->validate(request(), [
          'idCita' => ['required', 'max:200'],
          'reporte' => ['required', 'max:10000'],
      ]);

      $data = request()->all();

      Citas::agregarReporte($data["idCita"],$data["reporte"]);

      return redirect()->to('Mi_menu');
    }
}
