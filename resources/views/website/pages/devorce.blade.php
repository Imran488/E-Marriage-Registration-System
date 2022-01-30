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
            <strong for="exampleInputName">Marriage ID</strong>
            <input type="number" name="id" class="form-control" id="exampleInputName" placeholder="Marriage ID"required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <strong for="exampleInputName">Name</strong>
            <input type="name" name="name" class="form-control" id="exampleInputName" placeholder="Name"required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <strong for="exampleInputPassword1">Address</strong>
            <input type="address" name="address" class="form-control" id="exampleInputPassword1" placeholder="Address"required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <strong for="exampleInputEmail1">Email </strong>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"required>
            <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <strong for="exampleInputPassword1">Contact Number</strong>
            <input type="string" name="contactnumber" class="form-control" id="exampleInputPassword1" placeholder="Contact Number"required>
        </div>
    </div>

    {{-- <div class="form-check">
        <div class="col-md-4">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <strong class="form-check-strong" for="exampleCheck1">I Declare that all Informations are True</strong>
        </div>
    </div> --}}
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{route('home')}}" class="btn" style="background-color:lightgray; border-radius:10px">Cancel</a>
</form>
<div style="height: 100px;"></div>
</center>
@endsection
