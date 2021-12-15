@extends('website.master')
@section('slides')
<center>
    <h1 style="color:black"><u>User Login</u></h1>
<form action = "{{route('user.login')}}" method="post">
    @csrf
    <div class="form-group">
        <div class="col-md-4">
            <label for="exampleInputEmail1">Email </label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary">SignIn</button>
    <a href="{{route('signup')}}" class="btn" style="background-color:lightgray; border-radius:10px">SignUp</a>
</form>
</center>
@endsection
