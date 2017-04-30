<?php

namespace App\Http\Controllers;

use View;

use App\Usuarios;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function IngresoProfesional()
    {
      return view ('CrearProfesional\IngresoProfesional');
    }

    public function CrearProfesional()
    {
        $this->validate(request(), [
            'Nombre' => ['required', 'max:200'],
            'Apellidos' => ['required', 'max:200'],
            'Rut' => ['required', 'max:200'],
            'Profesion' => ['required', 'max:200']
        ]);

      $data = request()->all();


      $resultado = Usuarios::Agregar($data['Nombre'],$data['Apellidos'],$data['Rut'],$data['Profesion']);

      if ($resultado == true)
      {
        return redirect()->to('Mi_menu');
      }
      else echo "ya existe usuario";

      //return redirect()->to('Mi_menu');
    }

    private function Agregar($data)
    {
      if(Usuario::ExisteRut($data["Rut"]) == false)
      {
        return Usuario::agregar($data['Nombre'],$data['Apellidos'],$data['Rut']);

      }
      else return NULL;
    }

}
