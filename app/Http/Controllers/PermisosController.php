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

      if( ('NinoController@pagCrear' == $peticion)
      or  ('NinoController@NuevaFicha' == $peticion))
            return 'IngresoNino';


      if( ('NinoController@MostrarNinosParaLlamar' == $peticion)
      or  ('NinoController@Contactar' == $peticion)
      or  ('NinoController@CambiarStatusContacto' == $peticion))
            return 'ContactosPendientes';

      if( ('OrdenDiagnosticoController@MostrarCitasPendientes' == $peticion)
      or  ('OrdenDiagnosticoController@PantallaMostrarCitasNino' == $peticion)
      or  ('CitaController@PantallaAsignarCitasNino' == $peticion)
      or  ('AjaxController@InsertarCita' == $peticion))
            return 'AsignarCitas';

      if(  ('CitaController@CitasPendientesPorUsuarioActual' == $peticion)
      or  ('CitaController@FormularioInformeCita' == $peticion)
      or  ('CitaController@AgregarReporteCitaFonoaudiologo' == $peticion)
      or  ('CitaController@AgregarReporteCitaPsicologo' == $peticion)
      or  ('CitaController@AgregarReporteCitaTerapiaOcupacional' == $peticion)
      or  ('CitaController@AgregarReporteCitaPsicopedagogo' == $peticion))
            return 'EvaluarCitas';

      if( ('UsuarioController@IngresoProfesional' == $peticion)
      or  ('UsuarioController@CrearProfesional' == $peticion))
            return 'IngresoProfesional';

      if  ('AnamnesisController@GenerarInformeFinal' == $peticion) return 'VisualizarInformesFinales';

      if( ('AnamnesisController@OrdenesPendientesDeAnamnesis' == $peticion)
      or  ('AnamnesisController@AprobarInformeFinal' == $peticion))
            return 'GenerarAnamnesis';

      if( ('EncuestaController@MostrarEncuesta' == $peticion)
      or  ('EncuestaController@IngresarEncuesta' == $peticion))
            return 'LlenarInformeTutor';

      if( ('NinoController@VerListadoFichas' == $peticion)
      or  ('NinoController@ListadoNinos' == $peticion)
      or  ('Nino_TutorController@ModificarDatosNinoTutores' == $peticion)
      or  ('NinoController@ActualizarDatosNino' == $peticion)
      or  ('TutorController@ActualizarDatosTutorPorId' == $peticion))
            return 'ModificarFichasNinos';

      if( ('UsuarioController@ListadoProfesionales' == $peticion)
      or  ('UsuarioController@ModificarDatosProfesional' == $peticion)
      or  ('UsuarioController@ActualizarDatosUsuarioPorId' == $peticion))
            return 'ModificarProfesionales';

      if('AnamnesisController@AprobarInformeFinal' == $peticion) return 'FinalizarInformeFinal';

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
              'NinoController@pagCrear'),$id))
              {
                $acceso['NinoController@pagCrear'] = true;
              }else $acceso['NinoController@pagCrear'] = false;

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
          'AnamnesisController@GenerarInformeFinal'),$id))
          {
            $acceso['AnamnesisController@GenerarInformeFinal'] = true;
          }else $acceso['AnamnesisController@GenerarInformeFinal'] = false;

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
