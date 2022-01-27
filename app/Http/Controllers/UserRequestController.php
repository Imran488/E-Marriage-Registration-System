<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MarriageRequest;
use App\Models\DevorceRequest;
use App\Models\CertificateRequest;
class UserRequestController extends Controller
{

    public function MarriageRequestList()
    {
        $marriagerequestslist=MarriageRequest::all();
        // dd($marriagerequestslist);
        return view('admin.pages.marriagerequestslist',compact('marriagerequestslist'));
    }


    public function MarriageEdit($id)
    {
        // dd($mid);
        $list=MarriageRequest::where('id',$id)->first();

// dd($list);
        return view('admin.pages.editmarriagerequestform',compact('list'));
    }


    public function MarriageUpdate(Request $request,$id){
        //  dd($request->all());

        $list=MarriageRequest::find($id);
        $list->update([
            'marriagedate'=>$request->marriagedate,
            'name'=>$request->name,
            'nid'=>$request->nid,
            'date'=>$request->date,
            'address'=>($request->address) ,
            'email'=>($request->email) ,
            'contactnumber'=>($request->contactnumber) ,
            'status'=>($request->status),

        ]);

        return redirect()->route('marriage.requestlist')->with('msg','Updated');

     }


    public function MarriageDelete($id)
    {
        //dd("$mid");
        $list=MarriageRequest::find($id)->delete();

        return redirect()->back()->with('msg','Delete Succesfully');
    }





    public function DevorceRequestList()
    {
        $devorcerequestslist=DevorceRequest::all();
        // dd($devorcerequestslist);
        return view('admin.pages.devorcerequestslist',compact('devorcerequestslist'));
    }
    public function DivorceView($id)
    {
        // dd($mid);
        $list=DevorceRequest::where('id',$id)->first();

// dd($list);
        return view('admin.pages.divorcedetails',compact('list'));
    }
    public function DivorceDelete($id)
    {
        //dd("$mid");
        $list=DevorceRequest::find($id)->delete();

        return redirect()->back()->with('msg','Delete Succesfully');
    }

    public function CertificateRequestList()
    {
        $certificaterequestslist=CertificateRequest::all();
        // dd($devorcerequestslist);
        return view('admin.pages.certificaterequestslist',compact('certificaterequestslist'));
    }

}
