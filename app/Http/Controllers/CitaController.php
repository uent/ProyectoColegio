<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;

class CitaController extends Controller
{
    public function PantallaAsignarCitasNiño()
    {
      $this->validate(request(), [
          'tipoCita' => ['required', 'max:200'],
          'idOrden' => ['required', 'max:200']
      ]);

    $data = request()->all();

    //var_dump($data);

    return View::make('CitasPendientes.CrearCita')->with("datos",$data );

    }
}
