<?php

namespace App;

use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','rut','apellidos','Profesion'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function agregar($nombre,$apellido, $rut,$profesion,$email,$password,$telefono = null)
    { // eliminar $telefono = null en el futuro
      $datos = User::select('id')->where('rut','=', $rut)->get();

      if(count($datos) == 0)
      {
        $Users = new User;

        $Users->name = $nombre;
        $Users->rut  = $rut;
        $Users->apellidos  = $apellido;
        $Users->profesion  = $profesion;
        $Users->email  = $email;
        $Users->telefono  = $telefono;
        $Users->password  = bcrypt($password);

        $Users->save();

        $data = User::select('id')->where('rut','=', $rut)->first();

        $id = $data->id;

        Perfil::crearPerfil($id,$profesion);

        return TRUE;
      }
      else return FALSE;


    }

    public static function BuscarProfesionalesPorTipoCita($tipoCita)
    {
      $datos = DB::table('Users')
              ->join('Perfil_Usuario', 'Users.id', '=', 'Perfil_Usuario.id')
              ->join('Perfil', 'Perfil_Usuario.idPerfil', '=', 'Perfil.idPerfil')
              ->where('Perfil.nombrePerfil', '=',$tipoCita)
              ->get();

        if(count($datos) != 0)
        {
          $i=0;
          foreach ($datos as $t)
          {
            $tutores[$i]["id"] = $t->id;
            $tutores[$i]["nombre"] = $t->name;
            $tutores[$i]["apellidos"] = $t->apellidos;
            $i++;
          }

        }else $tutores=NULL;

        return $tutores;
    }

    public static function MostrarTodosLosProfesionales()
    {
      //retorna todos los profesionales del sistema, no se incluyen
      //Tutores que no trabajen en el colegio

      $tablas = User::select()->where('profesion','!=','Tutor')->get();

      return $tablas;
    }

    public static function DatosUsuariosPorIdUsuario($idUsuario)
    {
      return User::select()->where('id','=',$idUsuario)->first();
    }

    public static function ActualizarDatosUsuarioPorId($idUsuario, $nombre,
        $apellido, $rut, $mail, $fono)
    {
      User::where('id',"=", $idUsuario)
      ->update([
        'name'=> $nombre,
        'apellidos'=> $apellido,
        'rut'=> $rut,
        'email'=> $mail,
        'telefono'=> $fono]);
    }
}
