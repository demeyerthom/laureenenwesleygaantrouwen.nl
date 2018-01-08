<?php

namespace App\Mail;

use App\Entity\GiftReservation;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;

class GiftReserved extends Mailable implements ShouldQueue
{
    /**
     * @var GiftReservation
     */
    protected $giftReservation;

    /**
     * GiftReserverd constructor.
     *
     * @param GiftReservation $reservation
     */
    public function __construct(GiftReservation $reservation)
    {
        $this->giftReservation = $reservation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->to($this->giftReservation->email)
            ->bcc(setting('site.rsvp', env('MAIL_FROM_ADDRESS')))
            ->subject('Bedankt voor de reservering!')
            ->markdown('emails.gift-reserved', ['reservation' => $this->giftReservation]);
    }
}
