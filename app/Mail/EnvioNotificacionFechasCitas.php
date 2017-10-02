<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EnvioNotificacionFechasCitas extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public function __construct($emailReceptor,$datosCitas)
     {
         $this->emailReceptor = $emailReceptor;
         $this->datosCitas = $datosCitas;
     }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('MensajesMail.fechasCitas')
                      ->with('datosCitas',$this->datosCitas)
                      ->with('emailReceptor',$this->emailReceptor);
    }
}
