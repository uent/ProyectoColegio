<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfil;

class PermisosController extends Controller
{
    public static function PermisoNecesarioRutas($peticion)
    {
      //recibe una peticion de pantalla en formato 'NinoController@MostrarNinosParaLlamar'
      //y retorna a que tipo de permiso corresponde
      //si retorna null es porque no se requiere ningun permiso en especial

      if('NinoController@pagCrear' == $peticion) return 'IngresoNino';

      if('NinoController@Crear' == $peticion) return 'IngresoNino';

      if('NinoController@MostrarNinosParaLlamar' == $peticion) return 'ContactosPendientes';

      if('TutorController@InsertarDatos' == $peticion) return 'IngresoTutor';

      if('NinoController@Contactar' == $peticion) return 'ContactosPendientes';

      if('NinoController@CambiarStatusContacto' == $peticion) return 'ContactosPendientes';

      if('OrdenDiagnosticoController@MostrarCitasPendientes' == $peticion) return 'AsignarCitas';

      if('OrdenDiagnosticoController@PantallaMostrarCitasNino' == $peticion) return 'AsignarCitas';

      if('CitaController@PantallaAsignarCitasNino' == $peticion) return 'AsignarCitas';

      if('CitaController@InsertarCita' == $peticion) return 'AsignarCitas';

      if('CitaController@CitasPendientesPorUsuarioActual' == $peticion) return 'EvaluarCitas';

      if('CitaController@FormularioInformeCita' == $peticion) return 'EvaluarCitas';

      if('CitaController@AgregarReporteCita' == $peticion) return 'EvaluarCitas';

      if('UsuarioController@IngresoProfesional' == $peticion) return 'IngresoProfesional';

      if('UsuarioController@CrearProfesional' == $peticion) return 'IngresoProfesional';

      if('AnamnesisController@OrdenesPendientesDeAnamnesis' == $peticion) return 'GenerarAnamnesis';

      if('AnamnesisController@GenerarInformeFinal' == $peticion) return 'GenerarAnamnesis';

      if('EncuestaController@MostrarEncuesta' == $peticion) return 'LlenarInformeTutor';

      if('EncuestaController@IngresarEncuesta' == $peticion) return 'LlenarInformeTutor';

      if('NinoController@VerListadoFichas' == $peticion) return 'ListarFichasNinos';

      if('UsuarioController@VerListadoProfesionales' == $peticion) return 'ListarProfesionales';

      if('AnamnesisController@AprobarInformeFinal' == $peticion) return 'FinalizarInformeFinal';

      if('AnamnesisController@VisualizarInformes' == $peticion) return 'VisualizarInformesFinales';//repetido

      if('AnamnesisController@AprobarInformeFinal' == $peticion) return 'VisualizarInformesFinales';//repetido

      if('CalendarioController@MostrarCalendarioProfesional' == $peticion) return 'MostrarCalendarioProfesional';


      return null;
    }


    public static function VistasDisponiblesPorIdUsuario($id)
    {
      //probablemente hay que optimizar esta funcion

      if(PermisosController::VerificarAccesoPorIdUsuario(PermisosController::PermisoNecesarioRutas(
              'NinoController@MostrarNinosParaLlamar'),$id))
              {
                $acceso['NinoController@MostrarNinosParaLlamar'] = true;
              }else $acceso['NinoController@MostrarNinosParaLlamar'] = false;

      if(PermisosController::VerificarAccesoPorIdUsuario(PermisosController::PermisoNecesarioRutas(
              'NinoController@Crear'),$id))
              {
                $acceso['NinoController@Crear'] = true;
              }else $acceso['NinoController@Crear'] = false;

      if(PermisosController::VerificarAccesoPorIdUsuario(PermisosController::PermisoNecesarioRutas(
              'OrdenDiagnosticoController@MostrarCitasPendientes'),$id))
              {
                $acceso['OrdenDiagnosticoController@MostrarCitasPendientes'] = true;
              }else $acceso['OrdenDiagnosticoController@MostrarCitasPendientes'] = false;

        if(PermisosController::VerificarAccesoPorIdUsuario(PermisosController::PermisoNecesarioRutas(
              'CitaController@CitasPendientesPorUsuarioActual'),$id))
              {
              $acceso['CitaController@CitasPendientesPorUsuarioActual'] = true;
              }else $acceso['CitaController@CitasPendientesPorUsuarioActual'] = false;

        if(PermisosController::VerificarAccesoPorIdUsuario(PermisosController::PermisoNecesarioRutas(
              'UsuarioController@IngresoProfesional'),$id))
              {
              $acceso['UsuarioController@IngresoProfesional'] = true;
              }else $acceso['UsuarioController@IngresoProfesional'] = false;

        if(PermisosController::VerificarAccesoPorIdUsuario(PermisosController::PermisoNecesarioRutas(
              'AnamnesisController@OrdenesPendientesDeAnamnesis'),$id))
              {
              $acceso['AnamnesisController@OrdenesPendientesDeAnamnesis'] = true;
              }else $acceso['AnamnesisController@OrdenesPendientesDeAnamnesis'] = false;

        if(PermisosController::VerificarAccesoPorIdUsuario(PermisosController::PermisoNecesarioRutas(
          'EncuestaController@MostrarEncuesta'),$id))
          {
            $acceso['EncuestaController@MostrarEncuesta'] = true;
          }else $acceso['EncuestaController@MostrarEncuesta'] = false;

        if(PermisosController::VerificarAccesoPorIdUsuario(PermisosController::PermisoNecesarioRutas(
          'NinoController@VerListadoFichas'),$id))
          {
            $acceso['NinoController@VerListadoFichas'] = true;
          }else $acceso['NinoController@VerListadoFichas'] = false;

        if(PermisosController::VerificarAccesoPorIdUsuario(PermisosController::PermisoNecesarioRutas(
          'UsuarioController@VerListadoProfesionales'),$id))
          {
            $acceso['UsuarioController@VerListadoProfesionales'] = true;
          }else $acceso['UsuarioController@VerListadoProfesionales'] = false;

        if(PermisosController::VerificarAccesoPorIdUsuario(PermisosController::PermisoNecesarioRutas(
          'AnamnesisController@VisualizarInformes'),$id))
          {
            $acceso['AnamnesisController@VisualizarInformes'] = true;
          }else $acceso['AnamnesisController@VisualizarInformes'] = false;

       if(PermisosController::VerificarAccesoPorIdUsuario(PermisosController::PermisoNecesarioRutas(
         'CalendarioController@MostrarCalendarioProfesional'),$id))
         {
           $acceso['CalendarioController@MostrarCalendarioProfesional'] = true;
         }else $acceso['CalendarioController@MostrarCalendarioProfesional'] = false;


              return $acceso;
    }

    public static function VerificarAccesoPorIdUsuario($permisoNecesario,$idUsuario)
    {
      $permisos = Perfil::PermisosPorIdUsuario($idUsuario);
      if($permisos != null)
      {
        foreach($permisos as $p)
        {
          if($p == $permisoNecesario) return true;
        }
      }
        return false;
    }
}
