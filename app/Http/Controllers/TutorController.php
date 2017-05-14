<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nino_tutor;
use App\Tutor;

class TutorController extends Controller
{
    public function InsertarDatos()
    {
      $this->validate(request(), [
          'Nombre' => ['required', 'max:200'],
          'Apellidos' => ['required', 'max:200'],
          'Rut' => ['required', 'max:200'],
          'Parentesco' => ['required', 'max:200'],
          'Mail' => ['required', 'max:200'],
          'idNino' => ['required', 'max:200']
      ]);

      $data = request()->all();

      if($idTutor = Tutor::IdTutorPorRutTutor($data["Rut"]) == NULL)  //comprueba de que no exista un tutor con el mismo rut
      {
        Tutor::agregar($data["Nombre"],$data["Apellidos"],$data["Rut"] ,
              $data["Parentesco"],$data["Mail"]);

        $idTutor = Tutor::IdTutorPorRutTutor($data["Rut"]);

        Nino_tutor::agregar($data["idNino"], $idTutor);

        return redirect()->to('Mi_menu');
      }
      else echo "ya existe tutor";




    }
}
