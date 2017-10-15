<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

/**
 * Class HomeController
 */
class HomeController extends Controller
{
    /**
     * @return View
     */
    public function get(): View
    {
        return view('home');
    }
}
