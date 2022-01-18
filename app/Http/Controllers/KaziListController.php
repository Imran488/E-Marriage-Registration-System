<?php

namespace App\Http\Controllers;
use App\Models\KaziForm;
use App\Models\User;
use Illuminate\Http\Request;


class KaziListController extends Controller
{
    public function UserList()
    {
        $key=null;
        if(request()->search){
            $key=request()->search;
            $userlist=User::where('name','LIKE','%'.$key.'%')->orWhere('id','LIKE','%'.$key.'%')->get();
            return view('admin.pages.userlist',compact('userlist','key'));
        }
        $userlist=User::all();
        //     // dd($userlist);
            return view('admin.pages.userlist',compact('userlist','key'));
    }

    public function UserDelete($id)
    {
        $userlist=User::find($id)->delete();
        return redirect()->back()->with('msg','Delete Succesfully');
    }
    

    public function KaziList()
    {
        {
            $key=null;
            if(request()->search){
                $key=request()->search;
                $kazilist=KaziForm::where('name','LIKE','%'.$key.'%')->orWhere('address','LIKE','%'.$key.'%')->get();
                return view('admin.pages.kazilist',compact('kazilist','key'));
            }
            $kazilist=KaziForm::all();
            
            return view('admin.pages.kazilist',compact('kazilist','key'));
        }
        
    }
    public function KaziForm()
    {

        return view('admin.pages.kaziform');
    }
    public function KStore(Request $request)
    {
        //dd(date('Ymdhms'));
        // dd($request->all());
        KaziForm::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password, 
        'confirmpassword'=>$request->repassword,
        'address'=>$request->address,
     ]);
        return redirect()->route('kazilist')->with('msg','Registration Successfull.');
    }
    public function KaziDetails($id)
    {
        $kazilist=KaziForm::find($id);
        return view('admin.pages.kazidetails',compact('kazilist'));
    }
    public function KaziDelete($id)
    {
        $kazilist=KaziForm::find($id)->delete();
        return redirect()->back()->with('msg','Delete Succesfully');
    }
}
