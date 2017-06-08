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

        $data = request()->all();

            $validator=Validator::make($data, [//reglas de validacion de los campos del formulario
              'Nombre' => ['required', 'max:50'],
              'Apellidos' => ['required', 'max:50'],
              'Rut' => ['required','unique:Ninos,rut','max:30'],
              'Profesion' => ['required', 'max:45'],
              'Email' => ['required','unique:Ninos,rut' ,'max:60'],
              'Password' => ['required', 'max:200']
              ]);

            if ($validator->fails())
          {
             return redirect()->back()->withErrors($validator->errors());
          }

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
