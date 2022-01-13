<?php

namespace App\Http\Controllers;
use App\Models\Payment;
use Illuminate\Http\Request;

class AdminPaymentController extends Controller
{
    public function PaymentList()
    {
        $key=null;
        if(request()->search){
            $key=request()->search;
            $paymentlist=Payment::where('name','LIKE','%'.$key.'%')->orWhere('txnid','LIKE','%'.$key.'%')->get();
            return view('admin.pages.paymentlist',compact('paymentlist','key'));
        }
        $paymentlist=Payment::all();
        //     // dd($userlist);
            return view('admin.pages.paymentlist',compact('paymentlist','key'));
    }

    public function PaymentDetails($id)
    {
        $paymentlist=Payment::find($id);
        return view('admin.pages.paymentdetails',compact('paymentlist'));
    }
}
