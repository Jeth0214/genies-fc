<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
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

        $email = $this->subject('Contact Us')
            ->view('mail.contact-us')
            ->with(['data' => $this->data]);

        $email->attach(public_path('images/logos/logo-2.png'), [
            'as' => 'logo.jpg',
            'mime' => 'image/jpg',
        ]);

        return $email;
    }
}
