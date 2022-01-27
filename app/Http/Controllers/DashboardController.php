<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\KaziForm;
use App\Models\UserMessages;
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

    public function QuestionList(){
        $questions = UserMessages::with('user')->get();
        return view('admin.pages.messagelist',compact('questions'));
    }
    public function Replyview($question_id){

        $questions = UserMessages::find($question_id);


        return view('admin.pages.reply',compact('questions'));
    }
    public function Reply(Request $request,$question_id){
        $questions = UserMessages::find($question_id);
        $questions->update([
           'reply'=>$request->reply,
            'status'=>'replied'
        ]);

        return redirect()->route('admin.question.list')->with('msg','replied successfully.') ;
    }

}
