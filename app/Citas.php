<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Citas extends Model
{
  protected $table = 'citas'; #?????

  public static function obtenerCitasPorIdOrden($idOrden)
  {
    return Citas::select()->where('idOrden','=', $idOrden)->get();
  }

  public static function obtenerCitaPorIdOrdenYTipoCita($idOrden,$tipoCita)
  {
    return Citas::select()->where('idOrden','=', $idOrden)
                  ->where('tipoEvaluacion','=', $tipoCita)
                  ->first();
  }

  public static function BuscarPorId($idCita)
  {
    return Citas::select()->where('idCitas','=', $idCita)->first();

  }

  public static function InsertarCita($datos)
  {
    $Citas = new Citas;
    $Citas->idOrden = $datos["idOrden"];
    $Citas->idProfesional = $datos["id"];
    $Citas->idNino = $datos["idNino"];
    $Citas->tipoEvaluacion = $datos["tipoCita"];
    $Citas->estado = $datos["estado"];
    $Citas->idOrden = $datos["idOrden"];
    $Citas->fechaInicio = $datos["inicio"];
    $Citas->fechafin = $datos["fin"];
    $Citas->comentarios = $datos["comentarios"];


    $Citas->save();

    return Citas::select('idCitas')->where('idOrden','=', $datos["idOrden"])
            ->where('tipoEvaluacion','=', $datos["tipoCita"])->first();
  }

  public static function ObtenerDatosCitasPendientesMasDatosNinoPorIdUsuario($idUsuario)
  {
    return DB::table('citas')
          ->join('ninos', 'citas.idNino', '=', 'ninos.idNino')
          ->where('citas.idProfesional', '=', $idUsuario)
          ->where('citas.estado', '=', "pendiente")
          ->select('ninos.idNino','citas.idCitas','citas.fechaInicio','citas.fechaFin','citas.tipoEvaluacion',
          'citas.comentarios','ninos.nombre','ninos.apellidos','ninos.rut')
          ->get();
  }

  public static function agregarReporteFonoaudiologo($idCita,$condSocioComunicativa, $competComunicativa,
                                                      $lengComprensivo, $lengExpresivo,
                                                      $conclusiones, $sugerencias)
  {

      Citas::where('idCitas',"=", $idCita)->update(['estado' => "completado"]);

      $datoCita = Citas::BuscarPorId($idCita);

      Anamnesis::ActualizarReporteFonoaudiologoPorIdOrden(
                      $datoCita["idOrden"],$datoCita["tipoEvaluacion"],$condSocioComunicativa,
                      $competComunicativa,
                      $lengComprensivo, $lengExpresivo,
                      $conclusiones, $sugerencias);

      OrdenDiagnostico::ActualizarEstadoPorId($datoCita["idOrden"]);
  }

  public static function agregarReportePsicologo($idCita,
                                    $desarrolloSocial,$respEmocional,$refConjunta,$juego,
                                    $conmunicacionLeng,$flexMental,
                                    $pensamiento,$comportamientoGnrl,$conclu,$relacion,
                                    $imitacion,$afecto,$cuerpo,$objetos)
  {

      Citas::where('idCitas',"=", $idCita)->update(['estado' => "completado"]);

      $datoCita = Citas::BuscarPorId($idCita);

      Anamnesis::ActualizarReportePsicologoPorIdOrden(
                      $datoCita["idOrden"],$datoCita["tipoEvaluacion"],$desarrolloSocial,
                      $respEmocional,$refConjunta,$juego,
                      $conmunicacionLeng,$flexMental,
                      $pensamiento,$comportamientoGnrl,$conclu,$relacion,
                      $imitacion,$afecto,$cuerpo,$objetos);

      OrdenDiagnostico::ActualizarEstadoPorId($datoCita["idOrden"]);
    }



  public static function agregarReporteTerapiaOcupacional($idCita,$coordinacionObsTerapeutaOcupacional,
                                                            $coordinacionSugTerapeutaOcupacional,
                                                            $procesamientoObsTerapeutaOcupacional,
                                                            $procesamientoSugTerapeutaOcupacional,
                                                            $concluSugereniasTerapeutaOcupacional)
  {

      Citas::where('idCitas',"=", $idCita)->update(['estado' => "completado"]);

      $datoCita = Citas::BuscarPorId($idCita);

      Anamnesis::ActualizarReporteTerapiaOcupacionalPorIdOrden(
                      $datoCita["idOrden"],$datoCita["tipoEvaluacion"],
                      $coordinacionObsTerapeutaOcupacional,
                      $coordinacionSugTerapeutaOcupacional,
                      $procesamientoObsTerapeutaOcupacional,
                      $procesamientoSugTerapeutaOcupacional,
                      $concluSugereniasTerapeutaOcupacional);

      OrdenDiagnostico::ActualizarEstadoPorId($datoCita["idOrden"]);
  }



  public static function agregarReportePsicopedagogo($idCita,
                                      $FPBNE1,$FPBNEESug1,  $FPBNE2,
                                      $FPBNEESug2,$FPBNE3,$FPBNEESug3,
                                      $FPBNE4,$FPBNEESug4,$comportamientoNivel,
                                      $ComportamientoSug,$aprendizajeNivel,$aprendizajeSug,
                                      $conclusionesSugerencias)
  {

      Citas::where('idCitas',"=", $idCita)->update(['estado' => "completado"]);

      $datoCita = Citas::BuscarPorId($idCita);

      Anamnesis::ActualizarReportePsicopedagogoPorIdOrden(
                      $datoCita["idOrden"],$datoCita["tipoEvaluacion"],
                      $FPBNE1,$FPBNEESug1,  $FPBNE2,
                      $FPBNEESug2,$FPBNE3,$FPBNEESug3,
                      $FPBNE4,$FPBNEESug4,$comportamientoNivel,
                      $ComportamientoSug,$aprendizajeNivel,$aprendizajeSug,
                      $conclusionesSugerencias);

      OrdenDiagnostico::ActualizarEstadoPorId($datoCita["idOrden"]);
  }

  public static function ObtenerDatosCitasPorIdNino($idNino)
  {
    return Citas::select()->where('idNino',"=", $idNino)->get();
  }

  public static function CambiarEstadoCitaAPendientePorIdCita($idCita)
  {
    Citas::where('idCitas',"=", $idCita)->update(['estado' => "pendiente"]);

    $tablasCita = Citas::BuscarPorId($idCita);

    OrdenDiagnostico::CambiarEstadoAEvaluandoPorIdOrden($tablasCita["idOrden"]);
  }

  public static function todosLosEventosProfesionales()
  {
    return Citas::select()->get();
  }
}
