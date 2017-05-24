<?php

namespace App\Http\Controllers;

use View;
use Validator;
use App\Perfil;
use App\User;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function IngresoProfesional()
    {
      $datos = Perfil::TiposPerfiles();
      return View::make('CrearProfesional.IngresoProfesional')->with("datos",$datos );
    }

    public function CrearProfesional()
    {
        $this->validate(request(), [
            'Nombre' => ['required', 'max:50'],
            'Apellidos' => ['required', 'max:50'],
            'Rut' => ['required', 'max:30'],
            'Profesion' => ['required', 'max:45'],
            'Email' => ['required', 'max:60'],
            'Password' => ['required', 'max:200']

        ]);
      // se recibe  Nombre, Apellidos,  Rut,  Profesion, Email, Password
      $data = request()->all();

      $resultado = User::Agregar($data['Nombre'],$data['Apellidos'],
                                  $data['Rut'],$data['Profesion'],$data['Email'],$data['Password']);

      if ($resultado == true)
      {
        return redirect()->to('Mi_menu');
      }
      else echo "ya existe usuario";

    }

    /*private function Agregar($data)
    {
      if(User::ExisteRut($data["Rut"]) == false)
      {
        return User::agregar($data['Nombre'],$data['Apellidos'],$data['Rut']);

      }
      else return NULL;
    }*/

}
