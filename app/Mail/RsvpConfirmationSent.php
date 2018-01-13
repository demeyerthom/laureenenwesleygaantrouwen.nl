<?php

namespace App\Mail;

use App\Entity\Invitee;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;

class RsvpConfirmationSent extends Mailable implements ShouldQueue
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
        return $this->to($this->invitees[0]->email)
            ->from(setting('site.rsvp', env('MAIL_FROM_ADDRESS')))
            ->subject('Bedankt voor het invullen van de RSVP!')
            ->markdown('emails.rsvp-confirmation', ['invitees' => $this->invitees]);
    }
}
