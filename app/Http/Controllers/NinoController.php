<?php

namespace App\Http\Controllers;

use App\Ninos;
use App\Nino_tutor;
use App\Tutor;

use Validator;
use resources\views;

use View;

use Illuminate\Http\Request;

class NinoController extends Controller
{

    public function pagCrear()
    {
      return view ('IngresoNino\IngresoNino');
    }

    private function Agregar($data)
    {
      if(Ninos::ExisteRut($data["Rut"]) == false)
      {
        return Ninos::agregar($data['Nombre'],$data['Apellidos'],$data['Rut']);

      }
      else return NULL;
    }

    public function Crear()
    {
      $data = request()->all();

      $validator=Validator::make($data, [//reglas de validacion de los campos del formulario
        'Nombre' => ['required', 'max:50'],
        'Apellidos' => ['required', 'max:50'],
        'Rut' => ['required','max:30']
  	    ]);
  	    $mensaje="";
          if($validator->fails()){
              foreach ($validator->errors()->all() as $message) {
                  $mensaje=$mensaje.$message.'\n';
              }
              $json = response()->json(['estado'=>false,'mensaje'=>$mensaje]);

              return response()->json(['estado'=>false,'mensaje'=>$mensaje]);
          }
      $data = request()->all();

      $resultado = Ninos::Agregar($data['Nombre'],$data['Apellidos'],$data['Rut']);

      if ($resultado == true)
      {
        $idNino = Ninos::BuscarPorRut($data['Rut']);
        $idTutor = Nino_tutor::BuscarIdTutorPorIdNino($idNino);
        if($idTutor == NULL)
        {
          return View::make('IngresoNino.IngresarTutor')->with("idNino",$idNino );
        }
        else echo "El nino ya tiene tutor";

      }
      else echo "ya existe nino";

      //return redirect()->to('Mi_menu');

    }

    public function MostrarNinosParaLlamar()
    {
      //muestra una lista de ninos que cumplan la condicion de que aun no sean contactados
      $datos = Ninos::MostrarNinosParaLlamar();

      return View::make('ContactosPendientes.NinosPendientes')->with("datos", $datos);
      //return redirect()->to('NinosPendientes',$datos);
    }

    public function Contactar()
    {
      //recibe id niño
      $data = request()->all();

      $datosNino = Ninos::MostrarDatosNino($data["id"]);

      $Tutores = Tutor::TutoresNinoPorIdNino($data["id"]);

      $datos[0] = $datosNino;
      $datos[1] = $Tutores;

      return View::make('ContactosPendientes.DatosNino')->with("datos", $datos);

    }

    public function CambiarStatusContacto() //asigna el estado de contactado a un nino                                            //y crea la orden de diagnostico
    {
      $data = request()->all();
      $validator=Validator::make($data, [//reglas de validacion de los campos del formulario
        'prioridad' => ['required', 'max:10']
  	    ]);
  	    $mensaje="";
          if($validator->fails()){
              foreach ($validator->errors()->all() as $message) {
                  $mensaje=$mensaje.$message.'\n';
              }
              $json = response()->json(['estado'=>false,'mensaje'=>$mensaje]);

              return response()->json(['estado'=>false,'mensaje'=>$mensaje]);
          }
      //recibe id niño y la prioridad de la orden


      if($data["prioridad"] == "alta") $prioridad = "alta";
      else $prioridad = "normal";

      Ninos::CambiarStatusContacto($data["id"]);

      OrdenDiagnosticoController::NuevaOrden($data["id"],$prioridad);

      return redirect()->to('Mi_menu');
    }


}
