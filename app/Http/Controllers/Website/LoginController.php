<?php

namespace App\Http\Controllers\Website;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function Admin()
    {
        return view('website.pages.login');
    }

    public function AdminLogin(Request $request){
        // dd($request->all());
        $userpost = $request->except('_token');
        // dd($userpost);
        // dd(Auth::attempt($userpost));
        if (Auth::attempt($userpost)) {
            return redirect()->route('dashboard')->with('message','Login Succesfull');
        }
        else
        return redirect()->back()->with('error','Invalid email or password');

    }


    public function adminlogout(){
    
        Auth::logout();
        return redirect()->route('admin')->with('message','Logged Out Thank You');
    }


    public function User()
    {
        return view('website.pages.user');
    }
    public function Signup()
    {
        return view('website.pages.signup');
    }
    public function UserSignup(Request $request){
        // dd($request->all());
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password) ,
            'mobile'=>($request->number) ,
        ]);
        

        return redirect()->route('admin')->with('message','Registration Succesfull');
    }

    

    public function UserLogin(Request $request){
        // dd($request->all());
        $userpost = $request->except('_token');
        // dd($userpost);
        //  dd(Auth::attempt($userpost));
        if (Auth::attempt($userpost)) {
            return redirect()->route('home')->with('message','Login Succesfull');
        }
        else
        return redirect()->back()->with('error','Invalid email or password');

    }

    public function userlogout(){
        Auth::logout();
        return redirect()->route('admin')->with('message','Logged Out Thank You ');
    }
}



