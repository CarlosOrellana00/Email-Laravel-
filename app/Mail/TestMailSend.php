<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMailSend extends Mailable
{
    use Queueable, SerializesModels;


    public $name;
    public $asunto;
    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($namex = 'usuario',$asunto ='correo enviado')
    {
        $this->name=$namex;
        $this->asunto=$asunto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('vistamail');
        return $this->subject($this->asunto)->view('promocional');
    }
}
