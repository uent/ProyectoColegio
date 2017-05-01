<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;

use App\Usuarios;

class CitaController extends Controller
{
    public function PantallaAsignarCitasNiño()
    {
      $this->validate(request(), [
          'tipoCita' => ['required', 'max:200'],
          'idOrden' => ['required', 'max:200']
      ]);

    $data["datos"] = request()->all();

    $data["Profesionales"] = Usuarios::BuscarProfesionalesPorTipoCita($data["datos"]["tipoCita"]);


    return View::make('CitasPendientes.CrearCita')->with("datos",$data );

    }
}
