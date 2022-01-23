<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\KaziForm;
use App\Models\MarriageRequest;
use App\Models\RegistrationForm;


class DashboardController extends Controller
{
    public function Dashboard(){
        $kazilist=KaziForm::count();
        $registration = RegistrationForm::count();
        $marriagerequestslist = MarriageRequest::where('status','pending')->count();
        $marriagerequests = MarriageRequest::where('status','Approved')->count();
        // dd($marriagerequests);
        return view('admin.pages.dashboard',compact('registration','marriagerequestslist','marriagerequests','kazilist'));
    }

}
