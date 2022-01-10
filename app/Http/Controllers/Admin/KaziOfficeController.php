<?php

namespace App\Http\Controllers;
use App\Models\Office;
use Illuminate\Http\Request;

class KaziOfficeController extends Controller
{
    public function Office()
    {
        $officelist=Office::all();
        // dd($registerlist);
        return view('admin.pages.office',compact('officelist'));
    }
    public function OfficeForm()
    {

        return view('admin.pages.officeform');
    }
    public function OStore(Request $request)
    {
        //dd(date('Ymdhms'));
        // dd($request->all());
        Office::create([
        'name'=>$request->name,
        'address'=>$request->address,
     ]);
        return redirect()->back()/*route('marrigeregistration')*/->with('msg','Registration Successfull.');
    }
    public function OfficeDetails($id)
    {
        $officelist=Office::find($id);
        
        return view('admin.pages.officedetails',compact('officelist'));
    }
    public function OfficeDelete($id)
    {
        $officelist=Office::find($id)->delete();
        
        return redirect()->back()->with('msg','Delete Succesfully');
    }
}


