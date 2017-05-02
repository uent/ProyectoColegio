<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
  protected $table = 'Citas'; #?????

  public static function obtenerCitasPorIdOrden($idOrden)
  {
    return Citas::select()->where('idOrden','=', $idOrden)->get();

  }

  public static function InsertarCita($datos)
  {
    $Citas = new Citas;

    $Citas->idOrden = $datos["idOrden"];
    $Citas->idProfesional = $datos["idUsuario"];
    $Citas->idNiño = $datos["idNiño"];
    $Citas->tipoEvaluacion = $datos["tipoCita"];
    $Citas->estado = $datos["estado"];
    $Citas->idOrden = $datos["idOrden"];
    $Citas->hora = $datos["hora"];
    $Citas->fecha = $datos["dia"];
    $Citas->comentarios = $datos["comentarios"];
    $Citas->reporte = $datos["reporte"];

    $Citas->save();

    return Citas::select('idCitas')->where('idOrden','=', $datos["idOrden"])
            ->where('tipoEvaluacion','=', $datos["tipoCita"])->first();
  }

}
