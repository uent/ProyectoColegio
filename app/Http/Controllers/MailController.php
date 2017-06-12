<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Reminder;
use Mail;

class MailController extends Controller
{
  /**
 * Send Reminder E-mail Example
 *
 * @return void
 */
public static function MailIngresoTutor($emailReceptor,$clave)
{
  //$fromEmail='ad.altavida@gmail.com';
  //$fromName='Equipo Altavida';

    $to_email = $emailReceptor;
    Mail::to($to_email)->send(new Reminder($emailReceptor,$clave));
    return "E-mail has been sent Successfully";
}
}
