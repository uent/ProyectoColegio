<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;
use Route;
use Validator;
use App\User;
use App\Ninos;
use App\Citas;
use App\OrdenDiagnostico;
use Illuminate\Support\Facades\Auth;


class CitaController extends Controller
{
    public function PantallaAsignarCitasNino()
    {
      $data["datos"] = request()->all();

      $validator=Validator::make($data["datos"], [//reglas de validacion de los campos del formulario
        'tipoCita' => ['required', 'max:30'],
        ]);

        if ($validator->fails())
        {
          return redirect()->back()->withErrors($validator->errors());
        }
    //recibe idOrden y tipoCita


    $data["profesionales"] = User::BuscarProfesionalesPorTipoCita($data["datos"]["tipoCita"]);


    return View::make('CitasPendientes.CrearCita')->with("datos",$data );

    }

    public function InsertarCita()
    {
      $data = request()->all();

      $validator=Validator::make($data, [//reglas de validacion de los campos del formulario
        'dia' => ['required', 'max:30'],
        'tipoCita' => ['required', 'max:30'],
        'hora' => ['required', 'max:30'],
        'comentarios' => ['nullable', 'max:400'],
        ]);
        if ($validator->fails())
        {
          return redirect()->back()->withErrors($validator->errors());
        }
      //recibe un id??, dia, tipoCita, hora, comentarios, idOrden



      if($data["comentarios"] == null) $data["comentarios"] = "";

      $data["estado"] = "pendiente";


      $aux = OrdenDiagnostico::BuscarPorId($data["idOrden"]);
      $data["idNino"] = $aux["idNino"];

      Citas::InsertarCita($data);

      OrdenDiagnostico::ActualizarEstadoPorId($data["idOrden"]);

      return redirect()->to('Mi_menu');

    }

    public function CitasPendientesPorUsuarioActual()
    {
      $id = Auth::user()->id;

      $citas = Citas::ObtenerDatosCitasPendientesPorIdUsuario($id);

      $datos = null;

      if($citas != null)
      {
        $i=0;
        foreach($citas as $c)
        {
          $datos[$i]["idNino"] = $c->idNino;
          $datos[$i]["idcitas"] = $c->idcitas;
          $datos[$i]["nombre"] = $c->nombre;
          $datos[$i]["apellidos"] = $c->apellidos;
          $datos[$i]["rut"] = $c->rut;
          $datos[$i]["tipoEvaluacion"] = $c->tipoEvaluacion;
          $i++;
        }
      }

      return View::make('EvaluarCitas.MostrarCitasPendientes')->with("datos",$datos);

    }

    public function FormularioInformeCita()
    {

      //recibe idCita
      $data = request()->all();

      $cita = Citas::BuscarPorId($data["idCita"]);

      if($cita != null)
      {
        $niño = Ninos::MostrarDatosNino($cita->idNino);

        if($niño != null)
        {
          $datos["idCita"] = $cita->idCitas;
          $datos["idNino"] = $cita->idNino;
          $datos["comentarios"] = $cita->comentarios;
          $datos["estado"] = $cita->estado;
          $datos["nombre"] = $niño["nombre"];
          $datos["apellidos"] = $niño["apellidos"];
          $datos["rut"] = $niño["rut"];

          //determina que vista se cargara en funcion del tipo de cita
          if($cita["tipoEvaluacion"] == "Fonoaudiologo")
          {
            return View::make('FormularioCitas.evaluacionFonoaudiologica')->with("datos",$datos);
          }
          else if($cita["tipoEvaluacion"] == "Psicológico")
          {
            return View::make('FormularioCitas.evaluacionPsicologica')->with("datos",$datos);
          }
          else if($cita["tipoEvaluacion"] == "Psicopedagogica")
          {
            return View::make('FormularioCitas.evaluacionPsicopedagogica')->with("datos",$datos);
          }
          else if($cita["tipoEvaluacion"] == "TerapiaOcupacional")
          {
            return View::make('FormularioCitas.evaluacionTerapiaOcupacional')->with("datos",$datos);
          }
          /* en caso de emergencia (para presentar el proyecto) comentar lo anterior y dejar solo esto
          return View::make('EvaluarCitas.FormularioCita')->with("datos",$datos);
          */
        }
        else echo "existe un error";
      }
      echo "No existe cita";
    }

    public function AgregarReporteCitaFonoaudiologo()
    {
      $data = request()->all();
      //falta realizar las validaciones

      //recibe idCitas, condSocioComunicativa, competComunicativa, lengComprensivo
      //   lengExpresivo, conclusiones, sugerencias

      Citas::agregarReporteFonoaudiologo($data["idCita"],
                            $data["condSocioComunicativa"], $data["competComunicativa"],
                            $data["lengComprensivo"], $data["lengExpresivo"],
                            $data["conclusiones"], $data["sugerencias"]);

      return redirect()->to('Mi_menu');
    }

    public function AgregarReporteCitaPsicologo()
    {
      $data = request()->all();
      //falta realizar las validaciones

      //recibe idCitas, desarrolloSocial,respEmocional,refConjunta,juego,conmunicacionLeng,
      //flexMental,pensamiento,comportamientoGnrl,conclu,relacion,imitacion,afecto,cuerpo,objetos

      Citas::agregarReportePsicologo($data["idCita"],
                                        $data["desarrolloSocial"],$data["respEmocional"],
                                        $data["refConjunta"],$data["juego"],
                                        $data["conmunicacionLeng"],$data["flexMental"],
                                        $data["pensamiento"],$data["comportamientoGnrl"],
                                        $data["conclu"],$data["relacion"],
                                        $data["imitacion"],$data["afecto"],
                                        $data["cuerpo"],$data["objetos"]);

      return redirect()->to('Mi_menu');
    }

}
