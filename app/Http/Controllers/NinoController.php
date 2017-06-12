<?php

namespace App\Http\Controllers;

use App\Ninos;
use App\Nino_tutor;
use App\Tutor;
use App\OrdenDiagnostico;
use Validator;
use resources\views;
use View;
use Mail;
use Session;
use App\Http\Controllers\MailController;
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
        'Apellidos' => ['required', 'max:70'],
        'Rut' => ['required','unique:Ninos,rut','max:30'],
        'Edad' => ['required','numeric'],
        'Diagnostico' => ['max:1000','nullable'],
        'Derivación' => ['max:50','nullable'],
        'Solicitud' => ['max:50','nullable'],
        'Escolaridad' => ['max:30','nullable'],
        'Observaciones' => ['max:1000','nullable']

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


        if($data['Diagnostico'] == null)$data['Diagnostico'] = "";
        if($data['Derivacion'] == null)$data['Derivacion'] = "";
        if($data['Solicitud'] == null)$data['Solicitud'] = "";
        if($data['Escolaridad'] == null)$data['Escolaridad'] = "";
        if($data['Observaciones'] == null)$data['Observaciones'] = "";

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
        if ($validator->fails())
        {
          return redirect()->back()->withErrors($validator->errors());
        }
      //recibe prioridad, idNino y idOrden

      $datosTutor = Tutor::UnTutorPorNinoPorIdNino($data["idNino"]);

      //genera la clave al tutor para que este pueda ingresar
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $randstring = '';

      $largoFinal = rand(6,10);

      for ($i = 0; $i < $largoFinal; $i++) {
          $randstring[$i] = $characters[rand(0, (strlen($characters)-1))];
      }

      $clave = $randstring;
      $email = $datosTutor->email;

      MailController::MailIngresoTutor($email,$clave);

      Tutor::ModificarClavePorIdTutor($datosTutor->id,$clave);

      OrdenDiagnostico::AsignarPrioridadPorIdOrden($data["idOrden"],$data["prioridad"]);

      OrdenDiagnostico::ActualizarEstadoPorId($data["idOrden"]);

      return redirect()->to('Mi_menu');
    }


}
