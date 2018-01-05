<?php

namespace App\Http\Controllers;

use App\Entity\Gift;
use App\Entity\GiftReservation;
use App\Mail\GiftReserved;
use App\Validation\FloatValue;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Mail\Mailer;
use Illuminate\View\View;

/**
 * Class GiftController
 */
class GiftController
{
    /**
     * @var Mailer
     */
    protected $mailer;

    /**
     * FormController constructor.
     *
     * @param Mailer $mailer
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function list(): View
    {
        /** @var Gift[] $gifts */
        $gifts = Gift::where(['active' => true])->orderBy('order', 'asc')->get();

        return view('gifts.list', ['gifts' => $gifts]);
    }

    /**
     * @param Request $request
     *
     * @param Response $response
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function post(Request $request, Response $response)
    {
        /** @var Gift $gift */
        $gift = Gift::find($request->get('gift_id'));

        $request->validate([
            'gift_id' => ['required', 'exists:gifts,id'],
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'amount' => ['required', new FloatValue(0.0, $gift->currentAmount())],
        ]);

        $giftReservation = new GiftReservation();
        $giftReservation->gift()->associate($gift);
        $giftReservation->first_name = $request->get('first_name');
        $giftReservation->last_name = $request->get('last_name');
        $giftReservation->email = $request->get('email');
        $giftReservation->amount = $request->get('amount');
        $giftReservation->save();

        $this->mailer->send(new GiftReserved($giftReservation));

        return $response->setContent(route('gift-thanks', ['id' => $giftReservation->id]))->setStatusCode(201);
    }

    public function thanks(int $id): View
    {
        $giftReservation = GiftReservation::find($id);

        return view('gifts.thanks', ['reservation' => $giftReservation]);
    }
}