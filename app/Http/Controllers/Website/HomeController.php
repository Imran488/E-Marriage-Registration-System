<?php

namespace App\Http\Controllers\Website;

use App\Models\KaziForm;
use App\Models\Messages;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\RegistrationForm;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function Message()
    {

        return view('website.pages.message');
    }

    public function MessageForm(Request $request)
    {
        Messages::Create([
            'sender_id'=>auth()->user()->id,
            'receiver_id'=>1,
            'is_seen'=>'no',
            'message'=>$request->message,
        ]);
        return redirect()->back()->with('msg','Message submitted');
    }




    public function Appointment()
    {
        return view('website.pages.appointment');
    }

    public function AppointmentForm(Request $request)
    {
        Appointment::Create([
            'name'=>$request->name,
            'nid'=>$request->nid,
            'date'=>$request->date,
            'address'=>($request->address) ,
            'email'=>($request->email) ,
            'contactnumber'=>($request->contactnumber) ,
        ]);
        return redirect()->route('kazi')->with('msg','Appointment submitted');
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
