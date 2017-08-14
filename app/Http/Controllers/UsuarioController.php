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
              'Rut' => ['required','unique:Users,rut','max:30'],
              'Profesion' => ['required', 'max:45'],
              'Email' => ['required','unique:Users,email' ,'max:60'],
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

    public function ListadoProfesionales()
    {
      $datos = User::MostrarTodosLosProfesionales();

      return View::make('PantallasListar.ListarProfesionales')->with("datos", $datos);
    }

    public function ModificarDatosProfesional()
    {
      $data = request()->all();
      //recibe idUsuario

      $datosTablas = User::DatosUsuariosPorIdUsuario($data["idUsuario"]);

      return View::make('PantallasEditar.EditarUsuario')->with("datos", $datosTablas);
    }

    public function ActualizarDatosUsuarioPorId()
    {
      $data = request()->all();
      //recibe idUsuario, nombre, apellido, rut, mail, fono

      User::ActualizarDatosUsuarioPorId($data["idUsuario"], $data["nombre"],
          $data["apellido"], $data["rut"], $data["mail"], $data["fono"]);

      return redirect()->to('Mi_menu');
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
