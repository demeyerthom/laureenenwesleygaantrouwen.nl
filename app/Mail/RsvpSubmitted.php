<?php

namespace App\Mail;

use App\Entity\Invitee;
use Illuminate\Mail\Mailable;

class RsvpSubmitted extends Mailable
{
    /**
     * @var Invitee[]
     */
    protected $invitees;

    /**
     * Create a new message instance.
     *
     * @param array $invitees
     */
    public function __construct(array $invitees)
    {
        $this->invitees = $invitees;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to(setting('site.rsvp'))
            ->markdown('emails.rsvp.submitted', ['invitees' => $this->invitees]);
    }
}
