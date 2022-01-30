@extends('website.master')
@section('slides')
<center>
    <h1 style="color:black"><u>Certificate Request Form</u></h1>
    @if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
<form action="{{route('certificate.requestform')}}"method="post">
    @csrf
    <div class=" form-group">
        <div class="col-md-4">
            <strong class="red">Certificate Type</strong>
        </div>
        <div class="col-md-4">
            <select  data-parsley-required-message="Please Select" name="certificate" id="certificate" class="form-control">
                <option disabled selected="">Please Choose Type</option>
                <option value="Marriage">Marriage</option>
                <option value="Devorce">Devorce</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <strong for="exampleInputEmail1">Marriage Date </strong>
            <input type ="date" name="datem" class="form-control" placeholder="Please Enter Marriage Date" required data-parsley-required-message="Please Enter Marriage Date">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <strong for="exampleInputName">Groom Name</strong>
            <input type="name" name="gname" class="form-control" id="exampleInputName" placeholder="Groom Name"required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <strong for="exampleInputName">Bride Name</strong>
            <input type="name" name="bname" class="form-control" id="exampleInputName" placeholder="BrideName"required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <strong for="exampleInputPassword1">Groom NID</strong>
            <input type="nid" name="gnid" class="form-control" id="exampleInputPassword1" placeholder="Groom NID"required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <strong for="exampleInputPassword1">Bride NID</strong>
            <input type="nid" name="bnid" class="form-control" id="exampleInputPassword1" placeholder="Bride NID"required>
        </div>
    </div>



    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{route('home')}}" class="btn btn-danger">Cancel</a>
</form>
<div style="height: 100px;"></div>
</center>
@endsection
