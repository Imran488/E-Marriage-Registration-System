@extends('website.master')
@section('slides')
<center>
    <h1>Certificate Request Form</h1>
<form>
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
            <input type ="date" name="datew" class="form-control" placeholder="Please Enter  Age" required data-parsley-required-message="Please Enter  Full Name of the Bride">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <label for="exampleInputName">Groom Name</label>
            <input type="gname" class="form-control" id="exampleInputName" placeholder="Name">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <label for="exampleInputName">Bride Name</label>
            <input type="bname" class="form-control" id="exampleInputName" placeholder="Name">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <label for="exampleInputPassword1">Groom Address</label>
            <input type="gaddress" class="form-control" id="exampleInputPassword1" placeholder="Address">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <label for="exampleInputPassword1">Bride Address</label>
            <input type="baddress" class="form-control" id="exampleInputPassword1" placeholder="Address">
        </div>
    </div>
    
    
    <div class="form-check">
        <div class="col-md-4">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</center>
@endsection
