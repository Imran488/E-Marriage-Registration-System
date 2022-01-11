@extends('website.master')
@section('slides')
<!-- @if(session()->has('message'))
<p class="alert alert-success">{{session()->get('message')}}</p>
@endif -->


<center>
@if(session()->has('error'))
<p class="alert alert-danger">{{session()->get('error')}}</p>
@endif

    <h1 style="color:black"><u>Login Here</u></h1>
<form action = "{{route('admin.login')}}" method="post">
    @csrf
    <div class="form-group">
        <div class="col-md-4">
            <label for="exampleInputEmail1">Email </label>
            <input type="email"name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
            <small id="emailHelp" style="color:black">If You didnt have Account Please SignUp.</small>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">SignIn</button>
    <a href="{{route('signup')}}" class="btn btn-primary">SignUp</a>
    
    
</form>
</center>
@endsection
