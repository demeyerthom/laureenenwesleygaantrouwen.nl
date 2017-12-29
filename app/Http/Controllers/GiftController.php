<?php

namespace App\Http\Controllers;

use App\Entity\Gift;
use Illuminate\View\View;

/**
 * Class GiftController
 */
class GiftController
{
    public function list(): View
    {
        /** @var Gift[] $gifts */
        $gifts = Gift::where(['active' => true])->orderBy('order', 'asc')->get();

        return view('gifts.list', ['gifts' => $gifts]);
    }
}