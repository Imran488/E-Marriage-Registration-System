@extends('website.master')
@section('slides')
<center>
    <h1 style="color:black"><u>Devorce Request Form</u></h1>
    @if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif 
<form action="{{route('devorce.requestform')}}"method="post">
    @csrf

    <div class="form-group">
        <div class="col-md-4">
            <label for="exampleInputName">Marriage ID</label>
            <input type="number" name="mid" class="form-control" id="exampleInputName" placeholder="Marriage ID">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <label for="exampleInputName">Name</label>
            <input type="name" name="name" class="form-control" id="exampleInputName" placeholder="Name">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <label for="exampleInputPassword1">Address</label>
            <input type="address" name="address" class="form-control" id="exampleInputPassword1" placeholder="Address">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <label for="exampleInputEmail1">Email </label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <label for="exampleInputPassword1">Contact Number</label>
            <input type="string" name="contactnumber" class="form-control" id="exampleInputPassword1" placeholder="Contact Number">
        </div>
    </div>
    
    <div class="form-check">
        <div class="col-md-4">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">I Declare that all Informations are True</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{route('home')}}" class="btn" style="background-color:lightgray; border-radius:10px">Cancel</a>
</form>
</center>
@endsection
