<?php

namespace App\Http\Controllers;
use App\Models\RegistrationForm;
use Illuminate\Http\Request;

class MarriageRegistrationController extends Controller
{
    public function MarriageRegistration()
    {
        $registerlist=RegistrationForm::all();
        // dd($registerlist);
        return view('admin.pages.marriageregistration',compact('registerlist'));
    }
    public function UserRegistrationForm()
    {

        return view('admin.pages.userregistrationform');
    }
    public function Store(Request $request)
    {
        //dd($request->all());

       RegistrationForm::create ([
           //Husband Details
            'fullnameh'=>$request->fullnameh,
            'religion'=>$request->religion,
            'date'=>$request->date,
            'passportnumber'=>$request->passportnumber,
            'age'=>$request->age,
            'txtroomh'=>$request->txtroomh,
            'txtroadh'=>$request->txtroadh,
            'district'=>$request->district,
            'txtcityh'=>$request->txtcityh,
            'txtpincodeh'=>$request->txtpincodeh,
            //Wife Details
            'fullnamew'=>$request->fullnamew,
            'religionw'=>$request->religion,
            'datew'=>$request->datew,
            'passportnumberw'=>$request->passportnumberw,
            'agew'=>$request->agew,
            'txtroomw'=>$request->txtroomw,
            'txtroadw'=>$request->txtroadw,
            'districtw'=>$request->districtw,
            'txtcityw'=>$request->txtcityw,
            'txtpincodew'=>$request->txtpincodew,
            

        ]);
        return redirect('/admin/marrigeregistration');
        
    }
    }
        

