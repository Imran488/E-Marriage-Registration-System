<?php

namespace App\Http\Controllers\website;
use App\Models\Payment;
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


    
    public function PaymentForm(Request $request)
    {
        
        // dd($request->all());
        Payment::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'cnumber'=>$request->cnumber, 
        'address'=>$request->address,
        'accountname'=>$request->accountname,
        'accountnumber'=>$request->accountnumber,
        'txnid'=>$request->txnid,
        'totalamount'=>$request->totalamount,
     ]);
     return redirect()->route('home')->with('msg','Payment submitted');
    }
}
