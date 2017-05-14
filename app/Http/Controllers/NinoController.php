<?php

namespace App\Http\Controllers;

use App\Ninos;
use App\Nino_tutor;
use App\Tutor;

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
        $this->validate(request(), [
            'Nombre' => ['required', 'max:200'],
            'Apellidos' => ['required', 'max:200'],
            'Rut' => ['required', 'max:200']
        ]);

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
      $this->validate(request(), [
          'id' => ['required', 'max:200']
      ]);

      $data = request()->all();

      $datosNino = Ninos::MostrarDatosNino($data["id"]);

      $Tutores = Tutor::TutoresNinoPorIdNino($data["id"]);

      $datos[0] = $datosNino;
      $datos[1] = $Tutores;

      return View::make('ContactosPendientes.DatosNino')->with("datos", $datos);



    }

    public function CambiarStatusContacto() //asigna el estado de contactado a un nino
                                            //y crea la orden de diagnostico
    {
      $this->validate(request(), [
          'id' => ['required', 'max:200'],
          'prioridad' => ['required', 'max:200']
      ]);

      $data = request()->all();

      if($data["prioridad"] == "alta") $prioridad = "alta";
      else $prioridad = "normal";

      Ninos::CambiarStatusContacto($data["id"]);

      OrdenDiagnosticoController::NuevaOrden($data["id"],$prioridad);

      return redirect()->to('Mi_menu');
    }


}
