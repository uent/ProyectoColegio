<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Nino_tutor;
use App\Tutor;

class TutorController extends Controller
{
   //tutor sera un estado de Users, un Users sera tutor solo cuando este
   //relacionado con un niño a travez de la tabla Nino_tutor
    public function InsertarDatos()
    {
      $data = request()->all();

      $validator=Validator::make($data, [//reglas de validacion de los campos del formulario
        'Nombre' => ['required', 'max:50'],
        'Apellidos' => ['required', 'max:50'],
        'Rut' => ['required', 'max:30'],
        'Mail' => ['required', 'max:60'],
        'Telefono_fijo' => ['required'],//numeric
        'Celular' => ['required'],//numeric
        'Parentesco' => ['required','max: 30']
        ]);
        $mensaje="";
          if($validator->fails()){
              foreach ($validator->errors()->all() as $message) {
                  $mensaje=$mensaje.$message.'\n';
              }
              $json = response()->json(['estado'=>false,'mensaje'=>$mensaje]);

              return response()->json(['estado'=>false,'mensaje'=>$mensaje]);
          }
      //recibe  Nombre, Apellidos, Rut, Parentesco, Mail, idNino



      if($idTutor = Tutor::IdTutorPorRutTutor($data["Rut"]) == NULL)  //comprueba de que no exista un tutor con el mismo rut
      {
        Tutor::agregar( $data["Nombre"],
                        $data["Apellidos"],
                        $data["Rut"],
                        $data["Mail"],
                        $data['Telefono_fijo'],
                        $data['Celular'],
                        $data['Parentesco']
                        );

        $idTutor = Tutor::IdTutorPorRutTutor($data["Rut"]);

        Nino_tutor::agregar($data["idNino"], $idTutor);

        return redirect()->to('Mi_menu');
      }
      else echo "El tutor ya se encuentra ingresado en el sistema";




    }
}
