<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfil;

class PermisosController extends Controller
{
    public static function PermisoNecesarioRutas($peticion)
    {
      //recibe una peticion de pantalla y retorna a que tipo de permiso corresponde

      if('NinoController@pagCrear' == $peticion) return 'IngresoNino';

      if('NinoController@Crear' == $peticion) return 'IngresoNino';

      if('NinoController@MostrarNinosParaLlamar' == $peticion) return 'ContactosPendientes';

      if('TutorController@InsertarDatos' == $peticion) return null;

      if('NinoController@Contactar' == $peticion) return 'ContactosPendientes';

      if('NinoController@CambiarStatusContacto' == $peticion) return 'ContactosPendientes';

      if('OrdenDiagnosticoController@MostrarCitasPendientes' == $peticion) return 'AsignarCitas';

      if('OrdenDiagnosticoController@PantallaMostrarCitasNino' == $peticion) return 'AsignarCitas';

      if('CitaController@PantallaAsignarCitasNino' == $peticion) return 'AsignarCitas';

      if('CitaController@InsertarCita' == $peticion) return 'AsignarCitas';

      if('CitaController@CitasPendientesPorUsuarioActual' == $peticion) return 'EvaluarCitas';

      if('CitaController@FormularioInformeCita' == $peticion) return 'EvaluarCitas';

      if('CitaController@AgregarReporteCita' == $peticion) return null;

      return null;
    }

    public static function VistasDisponiblesPorIdUsuario($idUsuario)
    {
      //to do
    }

    public static function VerificarAccesoPorIdUsuario($permisoNecesario,$idUsuario)
    {
      $permisos = Perfil::PermisosPorIdUsuario($idUsuario);
      if($permisos != null)
      {
        foreach($permisos as $p)
        {
          //echo $p , "<br>";
          if($p == $permisoNecesario) return true;
        }
      }
        return false;
    }
}
