<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function Marriage()
    {
        return view('website.pages.marriage');
    }
    public function Devorce()
    {
        return view('website.pages.devorce');
    }
    public function Certificate()
    {
        return view('website.pages.certificate');
    }
}
