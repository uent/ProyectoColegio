<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;

use App\User;
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

    public function CitasPendientesPorUsuario()
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
        }
      }

      return View::make('EvaluarCitas.MostrarCitasendientes')->with("datos",$data );

    }

}
