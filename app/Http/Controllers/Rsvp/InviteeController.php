<?php

namespace App\Http\Controllers\Rsvp;

use App\Entity\Invitee;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

/**
 * Class InviteeController
 */
class InviteeController extends Controller
{
    /**
     * @param Request $request
     *
     * @return View
     */
    public function get(Request $request): View
    {
        if (!$request->has('hash')) {
            return view('rsvp.incognito');
        }

        $invitee = Invitee::where('hash', $request->get('hash'))->first();

        return view('rsvp.known',['invitee' => $invitee]);
    }

    /**
     * @param Request $request
     */
    public function post(Request $request)
    {

    }
}
