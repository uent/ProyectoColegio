<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Ninos;
use App\Citas;
use App\Tutor;
use App\Eventos;
use App\OrdenDiagnostico;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OrdenDiagnosticoController;
use Validator;
use View;


class AjaxController extends Controller
{
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
              //"url"=> $e->idCitas,
              "startEditable"=> 0,
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

    public function horarioNinoPorIdNino($idNino)
    {
      $eventos = Eventos::horarioNinoPorIdNino($idNino);

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
              //"url"=> $e->idCitas,
              "color"=> 'yellow',
              "startEditable"=> 0,
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

    public function horarioProfesionalesMenosUnoPorIdProfesional($idUser)
    {
      {
        $eventos = Eventos::horarioProfesionalesMenosUnoPorIdUsuario($idUser);

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
                "color"=> 'black',
                //"url"=> $e->idCitas,
                "startEditable"=> 0,
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
          return redirect()->back()->withInput()->withErrors($validator->errors());
        }

        $now = time();
        $target = strtotime($data["inicio"]);
        $diff = $now - $target;

         if($diff <= 0)   //return redirect()->back()->withInput()->

      if((!Citas::obtenerCitaPorIdOrdenYTipoCita($data["idOrden"],$data["tipoCita"])))
      {
        if($data["comentarios"] == null) $data["comentarios"] = "";

        $data["estado"] = "pendiente";

        $aux = OrdenDiagnostico::BuscarPorId($data["idOrden"]);
        $data["idNino"] = $aux["idNino"];

        Citas::InsertarCita($data);

        OrdenDiagnostico::ActualizarEstadoPorId($data["idOrden"]);

        $datosOrden = OrdenDiagnostico::BuscarPorId($data["idOrden"]);

        if(strcmp($datosOrden->estado , "evaluando") == 0)
        {
          $datosTutor = Tutor::UnTutorPorNinoPorIdNino($aux["idNino"]);
          MailController::MailEnvioNotificacionDeFechasCitas($datosTutor->email,Citas::obtenerCitasPorIdOrden($data["idOrden"]));

          return redirect()->to('Mi_menu');
        }
        else
        {
          return redirect()->to('mostrar_citas_nino?action=Asignar+Citas&idOrden=' . $data["idOrden"]);
        }
      }
      else
      {
        return redirect()->to('PantallaDeErrorProceso');
      }

    }

}
