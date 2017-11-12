<?php

namespace App\Mail;

use App\Entity\Invitee;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RsvpSubmitted extends Mailable implements ShouldQueue
{
    use SerializesModels;

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
        return $this->markdown('emails.rsvp.submitted', ['invitees' => $this->invitees]);
    }
}
