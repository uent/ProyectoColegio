<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Reminder extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public function __construct($emailReceptor,$clave)
     {
         $this->emailReceptor = $emailReceptor;
         $this->clave = $clave;
     }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('MensajesMail.contacto')
                      ->with('clave',$this->clave)
                      ->with('emailReceptor',$this->emailReceptor);
    }
}
