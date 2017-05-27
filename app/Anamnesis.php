<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anamnesis extends Model
{
  protected $table = 'Anamnesis';

    public static function FormularioAnamnesis($idOrden)
    {
      $tabla = Anamnesis::select()->where('idOrden','=',$idOrden)->first();

      if($tabla != null)
      {
        return $tabla;

      }return null;
    }


    public static function ActualizarReportePorIdOrden($idOrden,$tipoCita,$reporte)
    {
      $datos = Anamnesis::select()->where('idOrden','=',$idOrden)->first();

      if($datos == null)
      {
        $Anamnesis = new Anamnesis;

        $Anamnesis->idOrden = $idOrden;
        $Anamnesis->datosFono  = "";
        $Anamnesis->datosNeuro  = "";

        $Anamnesis->save();
      }

      if($tipoCita == "Fonoaudiologo")
                Anamnesis::where('idOrden',"=", $idOrden)->update(['datosFono' => $reporte]);

      if($tipoCita == "Neurolinguístico")
                Anamnesis::where('idOrden',"=", $idOrden)->update(['datosNeuro' => $reporte]);
    }

}
