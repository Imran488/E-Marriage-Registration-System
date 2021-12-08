<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function Payment()
    {
        
        return view('website.pages.payment');
    }
    public function Paymentcondition()
    {
        
        return view('website.pages.paymentcondition');
    }
}
