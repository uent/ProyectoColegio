<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function PantallaAsignarCitasNiño()
    {
      $this->validate(request(), [
          'tipoCita' => ['required', 'max:200'],
          'idOrden' => ['required', 'max:200'],
          'idNiño' => ['required', 'max:200']
      ]);

    $data = request()->all();

    //return View::make('CitasPendientes.CrearCita.blade')->with("datos",$data );

    }
}
