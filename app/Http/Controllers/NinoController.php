<?php

namespace App\Http\Controllers;

use App\Ninos;
use App\Nino_tutor;
use App\Tutor;
use App\OrdenDiagnostico;
use Validator;
use resources\views;
use App\Http\Controllers\UtilidadesController;
use View;
use Mail;
use Session;
use App\Http\Controllers\MailController;
use Illuminate\Http\Request;

class NinoController extends Controller
{

    public function pagCrear()
    {
      return View::make('IngresoNino\IngresoNino');
    }

    public function NuevaFicha()
    {
      $data = request()->all();

      $validator=Validator::make($data, [//reglas de validacion de los campos del formulario
        'nombreNino' => ['required', 'max:50'],
        'apellidoNino' => ['required', 'max:70'],
        'rutNino' => ['required','unique:Ninos,rut','max:30'],
        'InputNac' => ['required','date'],
        'diagnostico' => ['max:1000','nullable'],
        'derivacion' => ['max:100','nullable'],
        'solicitud' => ['max:100','nullable'],
        'escolaridad' => ['max:50','nullable'],
        'observaciones' => ['max:1000','nullable'],
        'nombreTutor' => ['max:30','required'],
        'apellidoTutor' => ['max:30','required'],
        'rutTutor' => ['max:30','unique:Users,rut','required'],
        'mailTutor' => ['max:60','unique:Users,email','required'],
        'fonoTutor' => ['max:20','required'],
        'parentesco' => ['max:30','required']
  	    ]);

      if ($validator->fails())
   {
       return redirect()->back()->withInput()->withErrors($validator->errors());
   }

      $data = request()->all();
      //recibe rutNino ,nombreNino ,apellidoNino,InputNac(fecha nacimiento)
      //diagnostico,derivacion,solicitud,escolaridad,observaciones
      // nombreTutor,apellidoTutor,rutTutor,mailTutor,fonoTutor,parentesco

           Ninos::agregar($data['nombreNino'],$data['apellidoNino'],$data['rutNino'],$data["InputNac"]);

           $idNino = Ninos::BuscarPorRut($data['rutNino']);
           if($data['diagnostico'] == null)$data['diagnostico'] = "";
           if($data['derivacion'] == null)$data['derivacion'] = "";
           if($data['solicitud'] == null)$data['solicitud'] = "";
           if($data['escolaridad'] == null)$data['escolaridad'] = "";
           if($data['observaciones'] == null)$data['observaciones'] = "";

           OrdenDiagnosticoController::NuevaOrden($idNino,
                                             "",
                                             $data['diagnostico'],
                                             $data['derivacion'],
                                             $data['solicitud'],
                                             $data['escolaridad'],
                                             $data['observaciones']);



            if($idTutor = Tutor::IdTutorPorRutTutor($data["rutTutor"]) == NULL)  //comprueba de que no exista un tutor con el mismo rut
            {
              Tutor::agregar($data['nombreTutor'],$data['apellidoTutor'],
                              $data['rutTutor'],$data['mailTutor'],$data["fonoTutor"]);
                              //faltan campos por agregar

              $idTutor = Tutor::IdTutorPorRutTutor($data["rutTutor"]);

              Nino_tutor::agregar($idNino, $idTutor,$data["parentesco"]);

              return redirect()->to('Mi_menu');
            }

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
      $datosNino["edad"] = date_diff(date_create($datosNino["fechaNacimiento"]), date_create('now'))->y;

      $Tutores = Tutor::TutoresNinoPorIdNino($data["id"]);

      $orden = OrdenDiagnostico::BuscarPorIdNino($data["id"]);

      $datos[0] = $datosNino;
      $datos[1] = $Tutores;
      $datos[2] = $orden;

      return View::make('ContactosPendientes.DatosNino')->with("datos", $datos);

    }

    public function CambiarStatusContacto()
    {
      //que recibe??????
      $data = request()->all();

      $validator=Validator::make($data, [//reglas de validacion de los campos del formulario
        'prioridad' => ['required', 'max:10']
  	    ]);
        if ($validator->fails())
        {
          return redirect()->back()->withErrors($validator->errors());
        }
      //recibe prioridad, idNino y idOrden

      $tablaOrden = OrdenDiagnostico::BuscarPorId($data["idOrden"]);

      if($tablaOrden["estado"] == "contacto_pendiente")
      {
        $datosTutor = Tutor::UnTutorPorNinoPorIdNino($data["idNino"]);

        //genera la clave al tutor para que este pueda ingresar
        $clave = UtilidadesController::GeneradorDeContrasena();

        $email = $datosTutor->email;

        MailController::MailIngresoTutor($email,$clave);

        Tutor::ModificarClavePorIdTutor($datosTutor->id,$clave);

        OrdenDiagnostico::AsignarPrioridadPorIdOrden($data["idOrden"],$data["prioridad"]);

        OrdenDiagnostico::ActualizarEstadoPorId($data["idOrden"]);

        return redirect()->to('Mi_menu');
      }
      else {
        return redirect()->to('PantallaDeErrorProceso');
      }
    }

    public function ListadoNinos()
    {
      $tablas = Ninos::MostrarTodosLosNinos();

      return View::make('PantallasListar.ListarNinos')->with("datos", $tablas);
    }

    public function ActualizarDatosNino()
    {
      $data = request()->all();

      //reibe idNino, nombreNino, apellidoNino, rutNino, fechaNacimiento
      //faltan datos!!

      Ninos::ActualizarDatosNinoPorId($data["idNino"], $data["nombreNino"],
          $data["apellidoNino"], $data["rutNino"], $data["fechaNacimiento"]);

      return redirect()->to('Mi_menu');
    }
}
