<?php

namespace App\Http\Controllers\RSVP;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

/**
 * Class ThanksController
 */
class ThanksController extends Controller
{
    /**
     * @return View
     */
    public function get(): View
    {
        return view('rsvp.thanks');
    }
}