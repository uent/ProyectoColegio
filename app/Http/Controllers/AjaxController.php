<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ninos;
use App\Tutor;
use App\Eventos;

class AjaxController extends Controller
{
    public function validarRutNino($rutNino)
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

      return $eventos;
    }

}
