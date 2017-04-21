<?php

namespace App\Http\Controllers;

use App\Niño;

use Illuminate\Http\Request;

class NiñoController extends Controller
{

    public function index()
    {
      return view ('IngresoNiño\IngresoNiño');
    }

    public function agregar($data)
    {
      Niño::agregar($data['Nombre'],$data['Rut']);
    }

    public function crear()
    {
        $this->validate(request(), [
            'Nombre' => ['required', 'max:200'],
            'Rut' => ['required', 'max:200']
        ]);

      $data = request()->all();

      NiñoController::agregar($data);

      return redirect()->to('Mi_menu');
    }
}
