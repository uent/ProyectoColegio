<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Controllers\PermisosController;
use Illuminate\Support\Facades\Auth;


class ControlPermisos
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $peticion = $request->route()->getActionName();

        $flag = true;
        while ($flag == true)
        {
          $pos = strpos($peticion,92);  //92 equivale al simbolo \
          if($pos == false)
          {
            
            $flag = false;

            $peticion = substr ($peticion,  $pos);

          }else $peticion = substr ($peticion, 1 + $pos);
        }

        $permisoNecesario = PermisosController::PermisoNecesarioRutas($peticion);
        $id = Auth::user()->id;

        if(PermisosController::VerificarAccesoPorIdUsuario($permisoNecesario,$id))
        {
          return $next($request);
        }else return redirect()->to('PantallaFaltaPermisos');

    }
}
