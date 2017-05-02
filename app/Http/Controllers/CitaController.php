<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;

use App\Usuarios;
use App\Citas;
use App\OrdenDiagnostico;


class CitaController extends Controller
{
    public function PantallaAsignarCitasNiño()
    {
      $this->validate(request(), [
          'tipoCita' => ['required', 'max:200'],
          'idOrden' => ['required', 'max:200']
      ]);

    $data["datos"] = request()->all();

    $data["profesionales"] = Usuarios::BuscarProfesionalesPorTipoCita($data["datos"]["tipoCita"]);


    return View::make('CitasPendientes.CrearCita')->with("datos",$data );

    }

    public function InsertarCita()
    {
      $this->validate(request(), [
          'idUsuario' => ['required', 'max:200'],
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
      $data["idNiño"] = $aux["idNiño"];

      Citas::InsertarCita($data);

      return redirect()->to('Mi_menu');

    }
}
