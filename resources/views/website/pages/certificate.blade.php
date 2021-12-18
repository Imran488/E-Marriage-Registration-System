@extends('website.master')
@section('slides')
<center>
    <h1 style="color:black"><u>Certificate Request Form</u></h1>
<form action="{{route('certificate.requestform')}}"method="post">
    <div class=" form-group">
        <div class="col-md-4">
            <label class="red">Certificate Type</label>
        </div>
        <div class="col-md-4">
            <select  data-parsley-required-message="Please Select" name="certificate" id="certificate" class="form-control">
                <option disabled selected="">Please Choose Type</option>
                <option value="Islam">Marriage</option>
                <option value="Hindu">Devorce</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <label for="exampleInputEmail1">Marriage Date </label>
            <input type ="date" name="datem" class="form-control" placeholder="Please Enter Marriage Date" required data-parsley-required-message="Please Enter Marriage Date">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <label for="exampleInputName">Groom Name</label>
            <input type="name" name="gname" class="form-control" id="exampleInputName" placeholder="Groom Name">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <label for="exampleInputName">Bride Name</label>
            <input type="name" name="bname" class="form-control" id="exampleInputName" placeholder="BrideName">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <label for="exampleInputPassword1">Groom NID</label>
            <input type="nid" name="gnid" class="form-control" id="exampleInputPassword1" placeholder="Groom NID">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <label for="exampleInputPassword1">Bride NID</label>
            <input type="nid" name="bnid" class="form-control" id="exampleInputPassword1" placeholder="Bride NID">
        </div>
    </div>
    
    
    <div class="form-check">
        <div class="col-md-4">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{route('home')}}" class="btn" style="background-color:lightgray; border-radius:10px">Cancel</a>
</form>
</center>
@endsection
