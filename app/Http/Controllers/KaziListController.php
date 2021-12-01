<?php

namespace App\Http\Controllers;
use App\Models\KaziForm;
use Illuminate\Http\Request;


class KaziListController extends Controller
{
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
        'password'=>$request->password,  ]);
        return redirect()->back()/*route('marrigeregistration')*/->with('msg','Registration Successfull.');
    }
}
