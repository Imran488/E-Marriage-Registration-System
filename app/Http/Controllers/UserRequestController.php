<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DevorceRequest;
class UserRequestController extends Controller
{
    public function DevorceRequestList()
    {
        $devorcerequestslist=DevorceRequest::all();
        // dd($devorcerequestslist);
        return view('admin.pages.devorcerequestslist',compact('devorcerequestslist'));
    }
    
}
