<?php

namespace App\Http\Controllers\website;
use App\Models\DevorceRequest;
use App\Models\CertificateRequest;
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

    public function CertificateForm(Request $request){
         dd($request->all());
        // CertificateRequest::create([
        //     'certificate'=>$request->certificate,
        //     'datem'=>$request->datem,
        //     'gname'=>$request->gname,
        //     'bname'=>($request->bname) ,
        //     'gnid'=>($request->gnid) ,
        //     'bnid'=>($request->bnid) ,
        // ]);
        
        // return redirect()->back()->with('msg','Request submitted');
        // return redirect()->route('home');
     }
    public function DevorceForm(Request $request){
        //  dd($request->all());
        DevorceRequest::create([
            'mid'=>$request->mid,
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>($request->address) ,
            'contactnumber'=>($request->contactnumber) ,
        ]);
        
        return redirect()->back()->with('msg','Request submitted');
        // return redirect()->route('home');
     }
    }

