<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SuperAdminAssignment extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    /**
     * Create New Message Instance.
     *
     * @param User $user
     * @param $token
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Super Admin Role Assignment')
            ->view('email.super_admin_assignment');
    }
}
