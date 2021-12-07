<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RegistrationForm;

class ManagementController extends Controller
{
    public function AboutUs()
    {
         return view('website.pages.aboutus');
    }
    public function Speciality()
    {
         return view('website.pages.ourspeciality');
    }
    public function Employee()
    {
        $registerlist=RegistrationForm::all();
        return view('website.pages.employeestory',compact('registerlist'));
    }
}
