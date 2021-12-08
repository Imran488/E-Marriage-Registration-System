<?php

namespace App\Http\Controllers\website;
use App\Models\Office;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FindUsController extends Controller
{
    public function Ouroffices()
    {
        $officelist=Office::all();
        // dd($officelistlist);
        return view('website.pages.ouroffices',compact('officelist'));
    }
    public function Support()
    {
        
        return view('website.pages.support');
    }
}
