<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ninos;
use App\Citas;
use App\Tutor;
use App\Eventos;
use App\OrdenDiagnostico;
use Validator;


class AjaxController extends Controller
{
    public function validarRutNino($rutNino) //metodo no usado
    {
      $idNino = Ninos::BuscarPorRut($rutNino);

      if($idNino != null)
      {
        $datosNino = Ninos::MostrarDatosNino($idNino);
        $datosPadre = Tutor::UnTutorPorNinoPorIdNino($idNino);

        if($datosPadre == null)
        {
          $response = array(
                    'status' => 'success',
                    'statusNino' => 'existe',
                    'ninoNombre' => $datosNino["nombre"],
                    'ninoApellidos' => $datosNino["apellidos"],
                    'ninoId' => $datosNino["idNino"],
                    'statusPadre' => "noExiste",
                    'padreNombre' => "",
                    'padreApellido' => "",
                );
                return \Response::json($response);
        }
        else
        {
          $response = array(
                    'status' => 'success',
                    'statusNino' => 'existe',
                    'ninoNombre' => $datosNino["nombre"],
                    'ninoApellidos' => $datosNino["apellidos"],
                    'ninoId' => $datosNino["idNino"],
                    'statusPadre' => "existe",
                    'padreNombre' => $datosPadre->name,
                    'padreApellido' => $datosPadre->apellidos,
                );
                return \Response::json($response);
        }
      }
      else if(AjaxController::ValidarRut($rutNino) == true)
      {

        $response = array(
                    'status' => 'success',
                    'statusNino' => 'rutNoExiste',
                );
        return \Response::json($response);
      }
      else
      {
        $response = array(
                    'status' => 'success',
                    'statusNino' => 'rutNoValido',
                );
        return \Response::json($response);
      }

    }

    public function ValidarRut($rutNino)
    {
      //ToDo
      return true;
    }

    public function horarioProfesionalPorIdProfesional($idUser)
    {
      $eventos = Eventos::ObtenerEventosProfesionalPorIdUsuario($idUser);

      if(count($eventos))
      {
        foreach($eventos as $e)
        {
          //se arma un arreglo con los campos requeridos para utilizarlo en FullCalendar
          $data[] = array(
              "id"=> $e->idCitas,
    					"title"=> $e->tipoEvaluacion . " " . $e->nombre . " " . $e->apellidos,
    					"start"=> $e->fechaInicio,
              "end"=> $e->fechaFin,
              "url"=> $e->idCitas,
              "startEditable"=> 1,
              "allDay"=> 0,
              "durationEditable"=> 0


              //"url"=>"cargaEventos".$id[$i]
              //en el campo "url" concatenamos el el URL con el id del evento para luego
              //en el evento onclick de JS hacer referencia a este y usar el método show
              //para mostrar los datos completos de un evento
          );
        }

        return json_encode($data); //retorna los datos como un Json
      }
      else {
        return json_encode(null);
      }

    }

    public function InsertarCita()
    {
      $data = request()->all();

      $validator=Validator::make($data, [//reglas de validacion de los campos del formulario
        'inicio' => ['required', 'date'],
        'fin' => ['required', 'date'],
        'idOrden' => ['required', 'Numeric'],
        'id' => ['required', 'Numeric'],
        'tipoCita' => ['required', 'max:30'],
        'comentarios' => ['nullable', 'max:400'],
        ]);
        if ($validator->fails())
        {
          return redirect()->back()->withErrors($validator->errors());
        }

      if($data["comentarios"] == null) $data["comentarios"] = "";

      $data["estado"] = "pendiente";

      $aux = OrdenDiagnostico::BuscarPorId($data["idOrden"]);
      $data["idNino"] = $aux["idNino"];

      Citas::InsertarCita($data);

      OrdenDiagnostico::ActualizarEstadoPorId($data["idOrden"]);

      return redirect()->to('Mi_menu');
    }

}
