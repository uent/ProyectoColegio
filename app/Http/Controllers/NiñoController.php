<?php

namespace App\Http\Controllers;

use App\Niño;

use resources\views;

use View;

use Illuminate\Http\Request;

class NiñoController extends Controller
{

    public function pagCrear()
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

    public function MostrarNiñosParaLlamar()
    {
      //muestra una lista de niños que cumplan la condicion de que aun no sean contactados
      $datos = Niño::MostrarNiñosParaLlamar();


      return View::make('ContactosPendientes.NiñosPendientes')->with("datos", $datos);
      //return redirect()->to('NiñosPendientes',$datos);
    }





}
