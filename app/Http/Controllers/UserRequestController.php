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


    public function DevorceRequestList()
    {
        $devorcerequestslist=DevorceRequest::all();
        // dd($devorcerequestslist);
        return view('admin.pages.devorcerequestslist',compact('devorcerequestslist'));
    }

    public function CertificateRequestList()
    {
        $certificaterequestslist=CertificateRequest::all();
        // dd($devorcerequestslist);
        return view('admin.pages.certificaterequestslist',compact('certificaterequestslist'));
    }
    
}
