<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RegistrationForm;
use App\Models\KaziForm;

class HomeController extends Controller
{

    public function Appointment()
    {
        return view('website.pages.appointment');
    }


    public function Home()
    {
        $registerlist=RegistrationForm::all();
        return view('website.pages.home',compact('registerlist'));
    }
    public function Rules()
    {
        return view('website.pages.marriagerules');
    }
    public function KaziList(){
        $key=null;
        // dd(request()->search);
        if(request()->search){
            
            $key=request()->search;
            $kazilist=KaziForm::where('address','LIKE','%'.$key.'%')->orWhere('name','LIKE','%'.$key.'%')->get();
            return view('website.pages.kazilist',compact('kazilist','key'));
        }
        $kazilist=KaziForm::all();
        return view('website.pages.kazilist',compact('kazilist','key'));
    }
}
    