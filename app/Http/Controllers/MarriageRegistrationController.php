<?php

namespace App\Http\Controllers;
use App\Models\RegistrationForm;
use Illuminate\Http\Request;

class MarriageRegistrationController extends Controller
{
    public function MarriageRegistration()
    {
        $registerlist=RegistrationForm::all();
        //dd($registerlist)
        return view('admin.pages.marriageregistration',compact('registerlist'));
    }
    public function UserRegistrationForm()
    {

        return view('admin.pages.userregistrationform');
    }
    public function Store(Request $request)
    {
        //dd($requesr->all());
        RegistrationForm::create ([
            'Name'=>$request->fullnameh,
            'Religion'=>$request->religion,
            'DoB'=>$request->date,
            'NID'=>$request->passportnumber,
            'Age'=>$request->age,
            

        ]);
        
    }
    }
        

