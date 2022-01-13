<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistrationForm;
use App\Models\MarriageRequest;
class DashboardController extends Controller
{
    public function Dashboard(){
        $registration = RegistrationForm::count();
        $marriagerequestslist = MarriageRequest::where('status','pending')->count();
        $marriagerequests = MarriageRequest::where('status','Approved')->count();
        // dd($marriagerequests);
        return view('admin.pages.dashboard',compact('registration','marriagerequestslist','marriagerequests'));
    }
    
}
