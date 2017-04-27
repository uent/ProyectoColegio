<?php

namespace App\Http\Controllers;

use App\Niños;
use App\Niño_tutor;
use App\Tutor;

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
        return Niños::agregar($data['Nombre'],$data['Apellidos'],$data['Rut']);

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


      $resultado = Agregar($data);

      if ($resultado == true)
      {
        $idNiño = Niños::BuscarPorRut($data['Rut']);
        $idTutor = Niño_tutor::BuscarIdTutorPorIdNiño($idNiño);
        if($idTutor == NULL)
        {
          return View::make('IngresoNiño.IngresarTutor')->with("idNiño",$idNiño );
        }
        else echo "El niño ya tiene tutor";

      }
      else echo "ya existe niño";

      //return redirect()->to('Mi_menu');

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
          'id' => ['required', 'max:200']
      ]);

      $data = request()->all();

      $datosNiño = Niños::MostrarDatosNiño($data["id"]);

      $idTutores = Tutor::TutoresNiñoPorIdNiño($data["id"]);

      $datos[0] = $datosNiño;
      $datos[1] = $idTutores;

      return View::make('ContactosPendientes.DatosNiño')->with("datos", $datos);

        echo "ads";

    }

    public function CambiarStatusContacto() //asigna el estado de contactado a un niño
                                            //y crea la orden de diagnostico
    {
      $this->validate(request(), [
          'id' => ['required', 'max:200']
      ]);

      $data = request()->all();

      Niños::CambiarStatusContacto($data["id"]);

      OrdenDiagnosticoController::NuevaOrden($data["id"],"normal");

      return redirect()->to('Mi_menu');
    }


}
