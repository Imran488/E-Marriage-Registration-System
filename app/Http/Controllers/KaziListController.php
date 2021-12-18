<?php

namespace App\Http\Controllers;
use App\Models\KaziForm;
use App\Models\User;
use Illuminate\Http\Request;


class KaziListController extends Controller
{
    public function UserList()
    {
        $userlist=User::all();
        // dd($userlist);
        return view('admin.pages.userlist',compact('userlist'));
    }

    public function KaziList()
    {
        $kazilist=KaziForm::all();
        // dd($registerlist);
        return view('admin.pages.kazilist',compact('kazilist'));
    }
    public function KaziForm()
    {

        return view('admin.pages.kaziform');
    }
    public function KStore(Request $request)
    {
        //dd(date('Ymdhms'));
        // dd($request->all());
        KaziForm::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password, 
        'confirmpassword'=>$request->repassword,
        'address'=>$request->address,
     ]);
        return redirect()->back()/*route('marrigeregistration')*/->with('msg','Registration Successfull.');
    }
    public function KaziDetails($id)
    {
        $kazilist=KaziForm::find($id);
        return view('admin.pages.kazidetails',compact('kazilist'));
    }
    public function KaziDelete($id)
    {
        $kazilist=KaziForm::find($id)->delete();
        return redirect()->back()->with('msg','Delete Succesfully');
    }
}
