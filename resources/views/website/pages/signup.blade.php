@extends('website.master')
@section('slides')
<center>
    <h1 style="background-color:#800080; color:white">Sign Up Here..</h1>
    <form action = "" method = "post">
         @csrf
<div class="form-group">
        <div class="col-md-4">
            <label for="exampleInputPassword1">Name</label>
            <input type="name" class="form-control" id="exampleInputPassword1" placeholder="Name Please">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <label for="exampleInputEmail1">Email </label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password Please">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="cpassword" class="form-control" id="exampleInputPassword1" placeholder="Retype Password please">
        </div>
    </div>
    
    
    <a href="{{route('home')}}" class="btn" style="background-color:lightgray; border-radius:10px">SignUp</a>
</form>
</center>
@endsection

   