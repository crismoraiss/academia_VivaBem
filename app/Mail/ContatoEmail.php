<?php

namespace App\Mail;

use App\Models\Contato;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContatoEmail extends Mailable
{
    use Queueable, SerializesModels;

     public $contato;

    public function __construct(Contato $contato)
    {
        $this->contato = $contato;
    }

    public function build(){
        return $this->from('cloudwise@smpsistema.com.br')
        ->subject('Contato via site')
        ->view('site.email.contato');
    }


}
