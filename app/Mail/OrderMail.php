<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
        $subject = "Thank for your order";
        return $this->subject($subject)
            ->view('client.email.order-email');
    }
}
