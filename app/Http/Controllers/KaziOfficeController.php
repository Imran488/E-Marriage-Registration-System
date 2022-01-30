<?php

namespace App\Http\Controllers;
use App\Models\Office;
use Illuminate\Http\Request;

class KaziOfficeController extends Controller
{
    public function Office()
    {
        {
            $key=null;
            if(request()->search){
                $key=request()->search;
                $officelist=Office::where('name','LIKE','%'.$key.'%')->orWhere('address','LIKE','%'.$key.'%')->get();
                return view('admin.pages.office',compact('officelist','key'));
            }
        $officelist=Office::all();

        return view('admin.pages.office',compact('officelist','key'));
    }
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
        'contactnumber'=>$request->contactnumber
     ]);
        return redirect()->route('kazioffice')->with('msg','Registration Successfull.');
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


