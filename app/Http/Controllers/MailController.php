<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\EnvioDatosIngreso;
use App\Mail\EnvioNotificacionInformeFinal;
use App\Mail\EnvioNotificacionFechasCitas;
//use Illuminate\Mail\Mailable;
use Mail;

class MailController extends Controller
{
  /**
 * Send EnvioDatosIngreso E-mail Example
 *
 * @return void
 */
 public static function MailIngresoTutor($emailReceptor,$clave)
 {
   //$fromEmail='ad.altavida@gmail.com';
   //$fromName='Equipo Altavida';

   $to_email = $emailReceptor;
   Mail::to($to_email)->send(new EnvioDatosIngreso($emailReceptor,$clave));
   return "E-mail has been sent Successfully";
 }

 public static function MailEnvioNotificacionDeFinalizacionDeInformeFinal($emailReceptor)
 {
   $to_email = $emailReceptor;
   Mail::to($to_email)->send(new EnvioNotificacionInformeFinal($emailReceptor));
   return "E-mail has been sent Successfully";
 }

 public static function MailEnvioNotificacionDeFechasCitas($emailReceptor,$datosCitas)
 {
   $to_email = $emailReceptor;
   Mail::to($to_email)->send(new EnvioNotificacionFechasCitas($emailReceptor,$datosCitas));
   return "E-mail has been sent Successfully";
 }

}
