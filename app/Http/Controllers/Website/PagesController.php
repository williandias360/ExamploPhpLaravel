<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home()
    {
        return view('website.page.home');
    }
}
