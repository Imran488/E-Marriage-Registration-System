<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller

//User side
{
    public function Payment()
    {
        
        return view('website.pages.payment');
    }
    public function Paymentcondition()
    {
        
        return view('website.pages.paymentcondition');
    }

    //Admin side

    public function PaymentList()
    {
        return view ('admin.pages.paymentlist');

    }
}
