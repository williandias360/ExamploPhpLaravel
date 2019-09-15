<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function login()
    {
        return view('website.account.login');
    }
}
