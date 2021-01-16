<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


use Illuminate\Support\Facades\Mail;

class FeedBack extends Mailable
{
    use Queueable, SerializesModels;

  //  public $user;
    public $username;
    public $year;

    /**
     * Create a new message instance.
     *
     * @param MyRequest $MyRequest
     */
    public function __construct(String $year,String $username)
    {
        //$this->user = $user;

        $this->year = $year;

        $this->username = $username;
    }

  
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->subject('Annual Returns Notification')
        ->view('email.feedback');
    }
}
