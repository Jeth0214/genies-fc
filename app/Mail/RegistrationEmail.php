<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistrationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $email = $this->subject('New Registration')
            ->view('mail.register')
            ->with(['data' => $this->data]);

        $email->attach(public_path('images/logos/logo-2.png'), [
            'as' => 'logo.jpg',
            'mime' => 'image/jpg',
        ]);

        return $email;
    }
}
