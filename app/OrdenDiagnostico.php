<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class OrdenDiagnostico extends Model
{
  protected $table = 'OrdenDiagnostico';

    public static function crear($idNiño,$prioridad)
    {
      $orden = new OrdenDiagnostico;

      $orden->idNiño = $idNiño;
      $orden->estado = "asignar";
      $orden->prioridad = $prioridad;
      $orden->antecedentes = "";    //cambiar tipo dato

      $orden->save();
    }

    public static function OrdenesPendientesDeCitasMasDatosNiños()
    {

      $tablas = DB::table('OrdenDiagnostico')
            ->join('Niños', 'OrdenDiagnostico.idNiño', '=', 'Niños.idNiño')
            ->where('OrdenDiagnostico.estado', '=', "asignar")
            ->select('Niños.idNiño','OrdenDiagnostico.idOrdenDiagnostico','Niños.nombre','Niños.apellidos','Niños.rut')
            ->get();

        $i = 0;

        if(count($tablas) == 0) $datos = NULL;
        else
        {
          foreach ($tablas as $t)
          {
            $datos[$i]["idNiño"] = $t->idNiño;
            $datos[$i]["idOrden"] = $t->idOrdenDiagnostico;
            $datos[$i]["nombre"] = $t->nombre;
            $datos[$i]["apellidos"] = $t->apellidos;
            $datos[$i]["rut"] = $t->rut;

            $i++;
          }
        }

        return $datos;


    }

    public static function BuscarPorId($idOrden)
    {
      return OrdenDiagnostico::select()->where('idOrdenDiagnostico','=', $idOrden)->first();
    }
}
