<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RegistrationForm;

class HomeController extends Controller
{
    public function Home()
    {
        $registerlist=RegistrationForm::all();
        return view('website.pages.home',compact('registerlist'));
    }
    public function Register()
    {
        return view('website.pages.register');
    }
}
    