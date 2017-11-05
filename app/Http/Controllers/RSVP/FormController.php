<?php

namespace App\Http\Controllers\RSVP;

use App\Entity\EventPermission;
use App\Entity\Invitee;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * Class FormController
 */
class FormController extends Controller
{
    /**
     * @param Request $request
     *
     * @return View
     */
    public function get(Request $request): View
    {
        /** @var EventPermission $eventPermission */
        $eventPermission = EventPermission::where('token', $request->get('token'))->first();

        return view('rsvp.form', ['hasToken' => $request->has('token'), 'permissions' => $eventPermission]);
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function post(Request $request)
    {
        /** @var EventPermission $eventPermission */
        $eventPermission = EventPermission::where('token', $request->get('token'))->first();

        $rows = $request->validate(
            [
                'invitee.*.first-name' => 'required|string|max:255',
                'invitee.*.last-name' => 'required|string',
                'invitee.*.email' => 'required|email',
                'invitee.*.reception' => $eventPermission->reception ? 'required|boolean' : 'boolean',
                'invitee.*.dinner' => $eventPermission->dinner ? 'required|in:meat,fish,vegetarian,0' : 'string',
                'invitee.*.party' => $eventPermission->party ? 'required|boolean' : 'boolean',
            ]
        );

        foreach ($rows['invitee'] as $row) {
            $invitee = new Invitee();
            $invitee->first_name = $row['first-name'];
            $invitee->last_name = $row['last-name'];
            $invitee->email = $row['email'];
            $invitee->at_reception = isset($row['reception']) ? (boolean)$row['reception'] : false;
            $invitee->at_dinner = isset($row['dinner']) ? (boolean)$row['dinner'] : false;
            $invitee->dinner_type = isset($row['dinner']) ? $row['dinner'] : null;
            $invitee->at_party = isset($row['party']) ? (boolean)$row['party'] : false;
            $invitee->save();
        }

        return \response(route('rsvp-thanks'), 201);
    }
}
