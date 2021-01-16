<?php

namespace App\Mail;

use App\TaxAgent;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendRegistrationDetails2 extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public $password;

    public $companyName;

    public $tinNumber;

    /**
     * sendRegistrationDetails constructor.
     * @param TaxAgent $user
     * @param String $companyName
     * @param String $password
     */
    public function __construct(
        TaxAgent $user,
        String $companyName,
        String $password ,
        String $tinNumber)
    {
        $this->user = $user;

        $this->password = $password;

        $this->companyName = $companyName;

        $this->tinNumber = $tinNumber;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {
        return $this
            ->subject('Account Registration')
            ->view('email.registration');
    }
}
