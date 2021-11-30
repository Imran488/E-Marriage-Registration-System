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

        if($request->hasfile('imageh'))
        {
            $file=$request->file('imageh');
            $filenameh = date('Ymdhms').'h.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploades',$filenameh);
           
        }
        if($request->hasfile('imagew'))
        {
            $file=$request->file('imagew');
            $filenamew = date('Ymdhms').'w.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploades',$filenamew);
        }
        if($request->hasfile('signatureh'))
        {
            $file=$request->file('signatureh');
            $filenamesh = date('Ymdhms').'sh.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploades',$filenamesh);
           
        }
        if($request->hasfile('signaturew'))
        {
            $file=$request->file('signaturew');
            $filenamesw = date('Ymdhms').'sw.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploades',$filenamesw);
        }

       RegistrationForm::create ([

           //Husband Details
            'fullnameh'=>$request->fullnameh,
            'religion'=>$request->religion,
            'date'=>$request->date,
            'passportnumber'=>$request->passportnumber,
            'imageh'=>$filenameh,
            'signatureh'=>$filenamesh,
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
            'imagew'=>$filenamew,
            'signaturew'=>$filenamesw,
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


