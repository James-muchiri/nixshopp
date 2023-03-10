<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewOrderRequest extends Mailable
{
    use Queueable, SerializesModels;

    public  $posts;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($posts)
    {
        $this->posts = $posts;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = $this->posts['email'];
        $name = $this->posts['names'];
        $subject = 'New Order Request';
        return $this->view('emails.neworder_request')
            ->from($address, $name)
            ->subject($subject);
    }
}
