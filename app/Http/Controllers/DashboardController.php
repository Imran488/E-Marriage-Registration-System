<?php

namespace App\Http\Controllers;
use App\Models\Office;
use App\Models\KaziForm;
use App\Models\UserMessages;
use Illuminate\Http\Request;
use App\Models\MarriageRequest;
use App\Models\RegistrationForm;


class DashboardController extends Controller
{
    public function Dashboard(){
        $officelist=Office::count();
        $registration = RegistrationForm::count();
        $marriagerequestslist = MarriageRequest::where('status','pending')->count();
        $marriagerequests = MarriageRequest::where('status','Approved')->count();
        // dd($marriagerequests);
        return view('admin.pages.dashboard',compact('registration','marriagerequestslist','marriagerequests','officelist'));
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

        return redirect()->route('admin.question.list')->with('msg','Replied successfully.') ;
    }

    public function Delete($question_id)
    {
        //dd("$mid");
        $questions = UserMessages::find($question_id)->delete();

        return redirect()->back()->with('msg','Delete Succesfully');
    }

}
