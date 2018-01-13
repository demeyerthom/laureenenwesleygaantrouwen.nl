<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Page;

/**
 * Class PageController
 */
class PageController
{
    /**
     * @param string $slug
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function get(string $slug)
    {
        $page = Page::where(['slug' => $slug])->first();

        return view('page', ['page' => $page]);
    }
}