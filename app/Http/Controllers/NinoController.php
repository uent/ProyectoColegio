<?php

namespace App\Http\Controllers;

use App\Ninos;
use App\Nino_tutor;
use App\Tutor;
use App\OrdenDiagnostico;
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
        return Ninos::agregar($data['Nombre'],
                              $data['Apellidos'],
                              $data['Rut'],
                              $data['Edad'],
                              $data['Diagnostico'],
                              $data['Derivación'],
                              $data['Solicitud'],
                              $data['Escolaridad'],
                              $data['Observaciones']
          );

      }
      else return NULL;
    }

    public function Crear()
    {
      $data = request()->all();

      $validator=Validator::make($data, [//reglas de validacion de los campos del formulario
        'Nombre' => ['required', 'max:50'],
        'Apellidos' => ['required', 'max:50'],
        'Rut' => ['required','max:30'],
        'Edad' => ['required'],//numeric
        'Diagnostico' => ['max:1000'],
        'Derivación' => ['max:50'],
        'Solicitud' => ['max:50'],
        'Escolaridad' => ['max:30'],
        'Observaciones' => ['max:1000']

  	    ]);

      if ($validator->fails())
   {
       return redirect()->back()->withErrors($validator->errors());
   }


      $resultado = Ninos::Agregar($data['Nombre'],
                                  $data['Apellidos'],
                                  $data['Rut'],
                                  $data['Edad']);

      if ($resultado == true)
      {

        $idNino = Ninos::BuscarPorRut($data['Rut']);

        OrdenDiagnosticoController::NuevaOrden($idNino,
                                          "",
                                          $data['Diagnostico'],
                                          $data['Derivacion'],
                                          $data['Solicitud'],
                                          $data['Escolaridad'],
                                          $data['Observaciones']);

        $idTutor = Nino_tutor::BuscarIdTutorPorIdNino($idNino);

        if($idTutor == NULL)
        {
          return View::make('IngresoNino.IngresarTutor')->with("idNino",$idNino );
        }
        else echo "Niño/a ya tiene tutor asignado";

      }
      else echo "Niño/a ya se encuentra en el sistema";

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

      $orden = OrdenDiagnostico::BuscarPorIdNino($data["id"]);

      $datos[0] = $datosNino;
      $datos[1] = $Tutores;
      $datos[2] = $orden;

      return View::make('ContactosPendientes.DatosNino')->with("datos", $datos);

    }

    public function CambiarStatusContacto()
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
      //recibe prioridad, idNino y idOrden

      OrdenDiagnostico::AsignarPrioridadPorIdOrden($data["idOrden"],$data["prioridad"]);

      OrdenDiagnostico::ActualizarEstadoPorId($data["idOrden"]);

      return redirect()->to('Mi_menu');
    }


}
