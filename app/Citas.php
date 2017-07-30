<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Citas extends Model
{
  protected $table = 'Citas'; #?????

  public static function obtenerCitasPorIdOrden($idOrden)
  {
    return Citas::select()->where('idOrden','=', $idOrden)->get();
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
    $Citas->hora = $datos["hora"];
    $Citas->fecha = $datos["dia"];
    $Citas->comentarios = $datos["comentarios"];


    $Citas->save();

    return Citas::select('idCitas')->where('idOrden','=', $datos["idOrden"])
            ->where('tipoEvaluacion','=', $datos["tipoCita"])->first();
  }

  public static function ObtenerDatosCitasPendientesMasDatosNinoPorIdUsuario($idUsuario)
  {
    return DB::table('citas')
          ->join('Ninos', 'citas.idNino', '=', 'Ninos.idNino')
          ->where('citas.idProfesional', '=', $idUsuario)
          ->where('citas.estado', '=', "pendiente")
          ->select('Ninos.idNino','citas.idCitas','citas.fechaInicio','citas.fechaFin','citas.tipoEvaluacion',
          'citas.comentarios','Ninos.nombre','Ninos.apellidos','Ninos.rut')
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


}
