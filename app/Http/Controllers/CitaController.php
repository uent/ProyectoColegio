<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;

use View;
use Route;
use Validator;
use App\User;
use App\Ninos;
use App\Citas;
use App\Anamnesis;
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
          return redirect()->back()->withInput()->withErrors($validator->errors());
        }
    //recibe idOrden y tipoCita


    $data["profesionales"] = User::BuscarProfesionalesPorTipoCita($data["datos"]["tipoCita"]);
    $datosOrden = OrdenDiagnostico::BuscarPorId($data["datos"]["idOrden"]);
    $data["datosNino"] = $datosOrden["idNino"];

    $data["disponible"] = true;

    if($data["datos"]["tipoCita"] == "MultiDisciplinario")
    {
      $citasNino = Citas::obtenerCitasPorIdOrden($data["datos"]["idOrden"]);

      if(count($citasNino) == 4)
      {
        $data["disponible"] = true;
      }
      else
      {
        $data["disponible"] = false;
      }
    }

    return View::make('CitasPendientes.CrearCita')->with("datos",$data );

    }

    /*public function InsertarCita()
    {
      $data = request()->all();

      $validator=Validator::make($data, [//reglas de validacion de los campos del formulario
        'dia' => ['required', 'max:30'],
        'tipoCita' => ['required', 'max:30'],
        'inicio' => ['required', 'max:50'],
        'fin' => ['required', 'max:50'],
        'comentarios' => ['nullable', 'max:400'],
        ]);
        if ($validator->fails())
        {
          return redirect()->back()->withInput()->withErrors($validator->errors());
        }
      //recibe un id??, dia, tipoCita, hora, comentarios, idOrden



      if($data["comentarios"] == null) $data["comentarios"] = "";

      $data["estado"] = "pendiente";


      $aux = OrdenDiagnostico::BuscarPorId($data["idOrden"]);
      $data["idNino"] = $aux["idNino"];

      Citas::InsertarCita($data);

      OrdenDiagnostico::ActualizarEstadoPorId($data["idOrden"]);

      return redirect()->to('Mi_menu');

    }*/

    public function CitasPendientesPorUsuarioActual()
    {
      $id = Auth::user()->id;

      $citas = Citas::ObtenerDatosCitasPendientesMasDatosNinoPorIdUsuario($id);

      $datos = null;

      if($citas != null)
      {
        $i=0;
        foreach($citas as $c)
        {
          $datos[$i]["idNino"] = $c->idNino;
          $datos[$i]["idCitas"] = $c->idCitas;
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
      //comentar
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

          $datos["datosInformes"] = Anamnesis::BuscarPorIdOrden($cita->idOrden);

          //determina que vista se cargara en funcion del tipo de cita
          if($cita["tipoEvaluacion"] == "Fonoaudiologo")
          {
            return View::make('FormularioCitas.evaluacionFonoaudiologica')->with("datos",$datos);
          }
          else if($cita["tipoEvaluacion"] == "Psicologico")
          {
            return View::make('FormularioCitas.evaluacionPsicologica')->with("datos",$datos);
          }
          else if($cita["tipoEvaluacion"] == "Psicopedagogo")
          {
            return View::make('FormularioCitas.evaluacionPsicopedagogica')->with("datos",$datos);
          }
          else if($cita["tipoEvaluacion"] == "TerapeutaOcupacional")
          {
            return View::make('FormularioCitas.evaluacionTerapiaOcupacional')->with("datos",$datos);
          }
          else if($cita["tipoEvaluacion"] == "MultiDisciplinario")
          {
            return View::make('FormularioCitas.evaluacionMultiDisciplinario')->with("datos",$datos);
          }
          else echo "hay un error, tipo cita no existe";
          /* en caso de emergencia (para presentar el proyecto) comentar lo anterior y dejar solo esto
          return View::make('EvaluarCitas.FormularioCita')->with("datos",$datos);
          */
        }
        else echo "existe un error";
      }else echo "No existe cita";
    }

    public function AgregarReporteCitaFonoaudiologo()
    {
      $data = request()->all();
      //falta realizar las validaciones

      //recibe idCita, condSocioComunicativa, competComunicativa, lengComprensivo
      //   lengExpresivo, conclusiones, sugerencias,procEvaluaFono
      $tablaCita = Citas::BuscarPorId($data["idCita"]);

      if($tablaCita["estado"] == "pendiente")
      {
        Citas::agregarReporteFonoaudiologo($data["idCita"],
                              $data["condSocioComunicativa"], $data["competComunicativa"],
                              $data["lengComprensivo"], $data["lengExpresivo"],
                              $data["conclusiones"], $data["sugerencias"], $data["procEvaluaFono"]);

        return redirect()->to('Mi_menu');
      }
      else {
        return redirect()->to('PantallaDeErrorProceso');
      }
    }

    public function AgregarReporteCitaPsicologo()
    {
      $data = request()->all();
      //falta realizar las validaciones

      //recibe idCitas, desarrolloSocial,respEmocional,refConjunta,juego,conmunicacionLeng,
      //flexMental,pensamiento,comportamientoGnrl,conclu,relacion,imitacion,afecto,cuerpo,objetos,procEvaluaPsicologo
      $tablaCita = Citas::BuscarPorId($data["idCita"]);

      if($tablaCita["estado"] == "pendiente")
      {
        Citas::agregarReportePsicologo($data["idCita"],
                                          $data["desarrolloSocial"],$data["respEmocional"],
                                          $data["refConjunta"],$data["juego"],
                                          $data["conmunicacionLeng"],$data["flexMental"],
                                          $data["pensamiento"],$data["comportamientoGnrl"],
                                          $data["conclu"],$data["procEvaluaPsicologo"]/*$data["relacion"],*/
                                          /*$data["imitacion"],$data["afecto"],*/
                                        /*$data["cuerpo"],$data["objetos"]*/);

        return redirect()->to('Mi_menu');
      }
      else {
        return redirect()->to('PantallaDeErrorProceso');
      }
    }

    public function AgregarReporteCitaTerapiaOcupacional()
    {
      $data = request()->all();
      //falta realizar las validaciones

      //recibe idCitas, coordinacionObs,coordinacionSug,procesamientoObs,
      //procesamientoSug,concluSugerencias,procEvaluaTO

      $tablaCita = Citas::BuscarPorId($data["idCita"]);

      if($tablaCita["estado"] == "pendiente")
      {
        Citas::agregarReporteTerapiaOcupacional($data["idCita"],
                                          $data["coordinacionObs"],
                                          $data["coordinacionSug"],
                                          $data["procesamientoObs"],
                                          $data["procesamientoSug"],
                                          $data["concluSugerencias"],
                                          $data["procEvaluaTO"]);

       return redirect()->to('Mi_menu');
     }
     else {
       return redirect()->to('PantallaDeErrorProceso');
     }
   }


    public function AgregarReporteCitaPsicopedagogo()
    {
      $data = request()->all();
      //falta realizar las validaciones

      //recibe idCitas, coordinacionObs,coordinacionSug,procesamientoObs,
      //procesamientoSug,concluSugerenias

  //idCita, FPBNE1, FPBNEESug1, FPBNE2, FPBNEESug2, FPBNE3, FPBNEESug3, FPBNE4,
  //FPBNEESug4, comportamientoNivel, ComportamientoSug, aprendizajeNivel,
  // aprendizajeSug, conclusionesSugerencias,procEvaluaPsicopedagogo

      $tablaCita = Citas::BuscarPorId($data["idCita"]);

      if($tablaCita["estado"] == "pendiente")
      {
        Citas::agregarReportePsicopedagogo($data["idCita"],
                                          $data["FPBNE1"],
                                          $data["FPBNEESug1"],
                                          $data["FPBNE2"],
                                          $data["FPBNEESug2"],
                                          $data["FPBNE3"],
                                          $data["FPBNEESug3"],
                                          $data["FPBNE4"],
                                          $data["FPBNEESug4"],
                                          $data["comportamientoNivel"],
                                          $data["ComportamientoSug"],
                                          $data["aprendizajeNivel"],
                                          $data["aprendizajeSug"],
                                          $data["conclusionesSugerencias"],
                                          $data["procEvaluaPsicopedagogo"]);

        return redirect()->to('Mi_menu');
      }
      else {
        return redirect()->to('PantallaDeErrorProceso');
      }
   }

   public function AgregarReporteCitaMultiDisciplinario()
   {
     $data = request()->all();
     //falta realizar las validaciones

     //recibe idCita,procEvaluaMulti

     $tablaCita = Citas::BuscarPorId($data["idCita"]);

     if($tablaCita["estado"] == "pendiente")
     {
       Citas::AgregarReporteMultiDisciplinario(
                                $data["idCita"],
                                $data["relacion"],
                                $data["imitacion"],
                                $data["afecto"],
                                $data["cuerpo"],
                                $data["objetos"],
                                $data["adaptacion"],
                                $data["respVisual"],
                                $data["respAuditiva"],
                                $data["gustoOlfatoTacto"],
                                $data["ansiedadMiedo"],
                                $data["comunicVerbal"],
                                $data["comunicNoVerbal"],
                                $data["nivelAct"],
                                $data["respIntelectual"],
                                $data["impresGnrl"],
                                $data["total"],
                                $data["motivoDeEvaluacion"],
                                $data["sugerencias"],
                                $data["antecedentesRelevantes"],
                                $data["conclusiones"],
                                $data["sugerencias"],
                                $data["procEvaluaMulti"]);

       return redirect()->to('Mi_menu');
     }
     else {
       return redirect()->to('PantallaDeErrorProceso');
     }
  }


   public function SolicitarModificacionCita()
   {
     $data = request()->all();
     //recibe idCita

     Citas::CambiarEstadoCitaAPendientePorIdCita($data["idCita"]);

     return redirect()->to('Mi_menu');
   }
}
