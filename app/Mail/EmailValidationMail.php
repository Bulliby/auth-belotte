<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class EmailValidationMail extends Mailable
{
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.auth.registered');
    }
}
