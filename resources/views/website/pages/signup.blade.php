@extends('website.master')
@section('slides')
<center>
    <h1 style="color:black"><u>Sign Up Here..</u></h1>
    <form action = "{{route('user.signup')}}" method="post">
         @csrf
<div class="form-group">
        <div class="col-md-4">
            <label for="exampleInputPassword1">Name</label>
            <input type="name"name="name" class="form-control" id="exampleInputPassword1" placeholder="Name Please">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <label for="exampleInputEmail1">Email </label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password Please">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <label for="exampleInputPassword1">Mobile Number</label>
            <input type="number" name="number" class="form-control" id="exampleInputPassword1" placeholder="Mobile Number">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</center>
@endsection

   