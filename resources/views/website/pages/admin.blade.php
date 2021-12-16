@extends('website.master')
@section('slides')
<center>
    <h1 style="color:black"><u>Admin Login</u></h1>
<form>
    
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
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
        </div>
    </div>
    
    <a href="{{route('dashboard')}}" class="btn" style="background-color:lightgray; border-radius:10px">SignIn</a>
</form>
</center>
@endsection
