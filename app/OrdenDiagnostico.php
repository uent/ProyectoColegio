<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
