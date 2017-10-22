<?php

namespace App\Http\Controllers\RSVP;

use App\Entity\EventPermission;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

/**
 * Class FormController
 */
class FormController extends Controller
{
    const PERMISSIONS = [
        'reception' => 1,
        'diner' => 2,
        'party' => 4
    ];

    /**
     * @param string $type
     *
     * @return View
     */
    public function get(string $type = null): View
    {
        $eventPermission = EventPermission::find($type);

        return view('rsvp.form', ['permissions' => $eventPermission]);
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function post(Request $request)
    {
        return \response('', 201);
    }
}
