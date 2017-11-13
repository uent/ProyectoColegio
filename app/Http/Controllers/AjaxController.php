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
          if($e->tipoEvaluacion == "Fonoaudiologo")
          {
            $color = "#fffa00"; //amarillo fuerte
          }
          if($e->tipoEvaluacion == "Psicologico")
          {
            $color = "#002aff"; //azul fuerte
          }
          if($e->tipoEvaluacion == "Psicopedagogo")
          {
            $color = "#06ff02"; //verde fuerte
          }
          if($e->tipoEvaluacion == "TerapeutaOcupacional")
          {
            $color = "#ff01fa"; //purpura fuerte
          }
          if($e->tipoEvaluacion == "Administrador")
          {
            $color = "#727272"; //plomo fuerte
          }

          //se arma un arreglo con los campos requeridos para utilizarlo en FullCalendar
          $data[] = array(
              "id"=> $e->idCitas,
              "title"=> $e->tipoEvaluacion . " " . $e->nombre . " " . $e->apellidos,
              "start"=> $e->fechaInicio,
              "end"=> $e->fechaFin,
              //"url"=> $e->idCitas,
              "color"=> $color,
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
        $diff1 = $target - $now;

        $citaLejana = Citas::citaMasLejanaPorIdOrden($data["idOrden"]);

        $diff2 = $target - strtotime($citaLejana["fechaFin"]) ;

      if($diff1 < 0)
      {
        return redirect()->back()->withInput( $msg_params = array('msg_error' => 'Debe seleccionar una fecha posterior a la actual'));
      }
      elseif($data["tipoCita"] == "MultiDisciplinario" && $diff2 < 0)
      {
        //echo $diff2;
        //echo strtotime($citaLejana["fechaFin"]);
        return redirect()->back()->withInput( $msg_params = array('msg_error' => 'Debe seleccionar una fecha posterior a la ultima cita asignada a este niño'));
      }
      else
      {
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



    public function horarioNinoProfesional($idNino,$idProfesional)
    {
      $eventosNinos = Eventos::horarioNinoPorIdNino($idNino);

      $i = 0;

      if(count($eventosNinos))
      {

        foreach($eventosNinos as $e)
        {
          $i = $i + 1;
          if($e->tipoEvaluacion == "Fonoaudiologo")
          {
            $color = "#fffa00"; //amarillo fuerte
          }
          if($e->tipoEvaluacion == "Psicologico")
          {
            $color = "#002aff"; //azul fuerte
          }
          if($e->tipoEvaluacion == "Psicopedagogo")
          {
            $color = "#06ff02"; //verde fuerte
          }
          if($e->tipoEvaluacion == "TerapeutaOcupacional")
          {
            $color = "#ff01fa"; //purpura fuerte
          }
          if($e->tipoEvaluacion == "Administrador")
          {
            $color = "#727272"; //plomo fuerte
          }

          //se arma un arreglo con los campos requeridos para utilizarlo en FullCalendar
          $data[] = array(
              "id"=> $e->idCitas,
              "title"=> $e->tipoEvaluacion . " " . $e->nombre . " " . $e->apellidos,
              "start"=> $e->fechaInicio,
              "end"=> $e->fechaFin,
              //"url"=> $e->idCitas,
              "color"=> $color,
              "startEditable"=> 0,
              "allDay"=> 0,
              "durationEditable"=> 0


              //"url"=>"cargaEventos".$id[$i]
              //en el campo "url" concatenamos el el URL con el id del evento para luego
              //en el evento onclick de JS hacer referencia a este y usar el método show
              //para mostrar los datos completos de un evento
          );
        }
      }


    $eventosProf = Eventos::todosLosEventosProfesionales();

    if(count($eventosProf))
    {
      foreach($eventosProf as $e)
      {
        $flag = 1;
        for ($j=0;$j < $i; $j = $j + 1)   // foreach($data as $d)
        {
          //var_dump($i);
          if($e->idCitas == $data[$j]["id"])
          {
            $flag = 0;
          }
        }

        if($flag == 1)
        {

          if($e->tipoEvaluacion == "Fonoaudiologo")
          {
            $color = "#fffc7c"; //amarillo suave
          }
          if($e->tipoEvaluacion == "Psicologico")
          {
            $color = "#8075ff"; //azul suave
          }
          if($e->tipoEvaluacion == "Psicopedagogo")
          {
            $color = "#74ff70"; //verde suave
          }
          if($e->tipoEvaluacion == "TerapeutaOcupacional")
          {
            $color = "#ff7aef"; //purpura suave
          }
          if($e->tipoEvaluacion == "MultiDisciplinario")
          {
            $color = "#afafaf"; //plomo suave
          }

          $data[] = array(
              "id"=> $e->idCitas,
              "title"=> $e->tipoEvaluacion . " " . $e->nombre . " " . $e->apellidos,
              "start"=> $e->fechaInicio,
              "end"=> $e->fechaFin,
              //"url"=> $e->idCitas,
              "color"=> $color,
              "startEditable"=> 0,
              "allDay"=> 0,
              "durationEditable"=> 0
            );
        }
      }
    }

    if(isset($data))
    {
      return json_encode($data); //retorna los datos como un Json
    }
    else {
      return json_encode(null);
    }
  }
}
