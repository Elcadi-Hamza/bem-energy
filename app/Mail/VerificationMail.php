<?php

namespace App\Mail;

use App\Models\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $client;

    /**
     * Create a new message instance.
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->view('emails.verification')
                    ->with([
                        'verificationUrl' => route('verify.email', ['token' => $this->client->verification_token])
                    ]);
    }
}
