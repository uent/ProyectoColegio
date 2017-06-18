<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anamnesis extends Model
{
  protected $table = 'Anamnesis';

    public static function FormularioAnamnesis($idOrden)
    {
      //cambiar nombre metodo!!!
      $tabla = Anamnesis::select()->where('idOrden','=',$idOrden)->first();

      if($tabla != null)
      {
        return $tabla;

      }return null;
    }

    public static function NuevaAnamnesis($idOrden)
    {
      //este metodo crea una tabla Anamnesis asociado a la orden del id recibido,
      //los demas campos quedaran como null
      $Anamnesis = new Anamnesis;

      $Anamnesis->idOrden = $idOrden;

      $Anamnesis->save();

      return Anamnesis::select()->where('idOrden','=',$idOrden)->first();
    }

    public static function ActualizarReporteFonoaudiologoPorIdOrden($idOrden,$tipoCita,
                                                        $condSocioComunicativa, $competComunicativa,
                                                        $lengComprensivo, $lengExpresivo,
                                                        $conclusiones, $sugerencias)
    {
      $datos = Anamnesis::select()->where('idOrden','=',$idOrden)->first();

      if($datos == null)
      {
        $Anamnesis = Anamnesis::NuevaAnamnesis($idOrden);
      }

      Anamnesis::where('idOrden',"=", $idOrden)
      ->update([
        'condSocioComunicativaFonoaudiologo'=> $condSocioComunicativa,
        'competComunicativaFonoaudiologo'=> $competComunicativa,
        'lengComprensivoFonoaudiologo'=> $lengComprensivo,
        'lengExpresivoFonoaudiologo'=> $lengExpresivo,
        'conclusionesFonoaudiologo'=> $conclusiones,
        'sugerenciasFonoaudiologo'=> $sugerencias]);
  }


  public static  function ActualizarReportePsicologoPorIdOrden(
                  $idOrden,$tipoEvaluacion,$desarrolloSocial,
                  $respEmocional,$refConjunta,$juego,
                  $conmunicacionLeng,$flexMental,
                  $pensamiento,$comportamientoGnrl,$conclu,$relacion,
                  $imitacion,$afecto,$cuerpo,$objetos)
  {
    $datos = Anamnesis::select()->where('idOrden','=',$idOrden)->first();

    if($datos == null)
    {
      $Anamnesis = Anamnesis::NuevaAnamnesis($idOrden);
    }

    Anamnesis::where('idOrden',"=", $idOrden)
    ->update([
    'desarrolloSocialPsicologo'=> $desarrolloSocial ,
    'respEmocionalPsicologo'=>  $respEmocional,
    'refConjuntaPsicologo'=> $refConjunta ,
    'juegoPsicologo'=> $juego ,
    'conmunicacionLengPsicologo'=>  $conmunicacionLeng,
    'flexMentalPsicologo'=> $flexMental ,
    'pensamientoPsicologo'=> $pensamiento ,
    'comportamientoGnrlPsicologo'=> $comportamientoGnrl ,
    'concluPsicologo'=> $conclu ,
    'relacionPsicologo'=> $relacion ,
    'imitacionPsicologo'=> $imitacion ,
    'afectoPsicologo'=> $afecto ,
    'cuerpoPsicologo'=> $cuerpo ,
    'objetosPsicologo'=> $objetos]);

  }


  public static  function ActualizarReporteTerapiaOcupacionalPorIdOrden(
                  $idOrden,$tipoEvaluacion,
                  $coordinacionObsTerapeutaOcupacional,
                  $coordinacionSugTerapeutaOcupacional,
                  $procesamientoObsTerapeutaOcupacional,
                  $procesamientoSugTerapeutaOcupacional,
                  $concluSugereniasTerapeutaOcupacional)
  {
    $datos = Anamnesis::select()->where('idOrden','=',$idOrden)->first();

    if($datos == null)
    {
      $Anamnesis = Anamnesis::NuevaAnamnesis($idOrden);
    }

    Anamnesis::where('idOrden',"=", $idOrden)
    ->update([
      'coordinacionObsTerapeutaOcupacional'=> $coordinacionObsTerapeutaOcupacional,
      'coordinacionSugTerapeutaOcupacional'=> $coordinacionSugTerapeutaOcupacional,
      'procesamientoObsTerapeutaOcupacional'=> $procesamientoObsTerapeutaOcupacional,
      'procesamientoSugTerapeutaOcupacional'=> $procesamientoSugTerapeutaOcupacional,
      'concluSugereniasTerapeutaOcupacional'=> $concluSugereniasTerapeutaOcupacional]);

  }
}
