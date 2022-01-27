<?php

namespace App\Http\Controllers\Website;

use App\Models\KaziForm;
use App\Models\Appointment;
use App\Models\UserMessages;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\RegistrationForm;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function Message()
    {
        $user=User::all();

        return view('website.pages.message',compact('user'));
    }

    public function MessageForm(Request $request)
    {
        UserMessages::Create([
            'user_id'=>auth()->user()->id,
            'subject'=>$request->subject,
            'question'=>$request->question,

        ]);
        return redirect()->back()->with('msg','question submitted. wait for reply.');
    }
    public function messageview(){

        $message=UserMessages::with('user')->where('status','replied')->get();
        return view('website.pages.messagelist',compact('message'));
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
