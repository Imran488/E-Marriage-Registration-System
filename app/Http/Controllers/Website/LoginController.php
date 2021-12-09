<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Admin()
    {
        return view('website.pages.admin');
    }
    public function User()
    {
        return view('website.pages.user');
    }
    public function Signup()
    {
        return view('website.pages.signup');
    }
}
