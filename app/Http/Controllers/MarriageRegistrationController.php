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
        //dd(date('Ymdhms'));
        //dd($request->all());
        $filename ='';

        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploades',$filename);
        }

       RegistrationForm::create ([

           //Husband Details
            'fullnameh'=>$request->fullnameh,
            'religion'=>$request->religion,
            'date'=>$request->date,
            'passportnumber'=>$request->passportnumber,
            'image'=>$filename,
            'age'=>$request->age,
            'txtroomh'=>$request->txtroomh,
            'txtroadh'=>$request->txtroadh,
            'district'=>$request->district,
            'txtcityh'=>$request->txtcityh,
            'txtpincodeh'=>$request->txtpincodeh,
            //Wife Details
            'fullnamew'=>$request->fullnamew,
            'religionw'=>$request->religionw,
            'datew'=>$request->datew,
            'passportnumberw'=>$request->passportnumberw,
            'imagew'=>$filename,
            'agew'=>$request->agew,
            'txtroomw'=>$request->txtroomw,
            'txtroadw'=>$request->txtroadw,
            'districtw'=>$request->districtw,
            'txtcityw'=>$request->txtcityw,
            'txtpincodew'=>$request->txtpincodew,
            //Witness Details
            'witnessname1'=>$request->witnessname1,
            'witnessaddress1'=>$request->witnessaddress1,
            'witnessname2'=>$request->witnessname2,
            'witnessaddress2'=>$request->witnessaddress2,
            'witnessname3'=>$request->witnessname3,
            'witnessaddress3'=>$request->witnessaddress3,
            
        ]);
         return redirect()->back()/*route('marrigeregistration')*/->with('msg','Registration Successfull.');
        
    } 
}


