<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use app\Models\Fan;

class FanMail extends Mailable
{
    use Queueable, SerializesModels;
    
    private $fan;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Fan $fan)
    {
        $this->fan = $fan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("mon.mail.app@gmail.com")->subject("Hi, Fan")->view('hello-mail')->with("fan", $this->fan);
    }
}
