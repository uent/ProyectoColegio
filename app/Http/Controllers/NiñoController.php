<?php

namespace App\Http\Controllers;

use App\Niños;

use resources\views;

use View;

use Illuminate\Http\Request;

class NiñoController extends Controller
{

    public function pagCrear()
    {
      return view ('IngresoNiño\IngresoNiño');
    }

    private function Agregar($data)
    {
      if(Niños::ExisteRut($data["Rut"]) == false)
      {
        Niños::agregar($data['Nombre'],$data['Apellidos'],$data['Rut']);
        return true;
      }
      else return false;
    }

    public function Crear()
    {
        $this->validate(request(), [
            'Nombre' => ['required', 'max:200'],
            'Apellidos' => ['required', 'max:200'],
            'Rut' => ['required', 'max:200']
        ]);

      $data = request()->all();


      $resultado = NiñoController::Agregar($data);
      if ($resultado == true)
      {
        return redirect()->to('Mi_menu');
      }
      else echo "ya existe niño";



    }

    public function MostrarNiñosParaLlamar()
    {
      //muestra una lista de niños que cumplan la condicion de que aun no sean contactados
      $datos = Niños::MostrarNiñosParaLlamar();


      return View::make('ContactosPendientes.NiñosPendientes')->with("datos", $datos);
      //return redirect()->to('NiñosPendientes',$datos);
    }

    public function Contactar()
    {
      $this->validate(request(), [
          'id' => ['required', 'max:200'],
      ]);

    $data = request()->all();

      $datos = Niños::MostrarDatosNiño($data["id"]);

      return View::make('ContactosPendientes.DatosNiño')->with("datos", $datos);

    }



}
