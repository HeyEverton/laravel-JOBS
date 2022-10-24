<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RegisterMail extends Mailable
{
    use Queueable, SerializesModels;

    private $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function build()
    {

        $this->subject('Assunto do email ');
        $this->from('reply@email.com');
        $this->replyTo('evertohn@everton.com');

        return $this->view('Mail.registerMail', [
            'nome' => $this->user->name,
        ])->attach(__DIR__ . '/../../public/boneco.png', [
            'as' => '404.png'
        ]);
    }
}
