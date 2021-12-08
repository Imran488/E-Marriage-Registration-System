@extends('website.master')
@section('slides')
<center>
    <h1>Marriage Request Form</h1>
<form>
    <div class="form-group">
        <div class="col-md-4">
            <label for="exampleInputName">Name</label>
            <input type="name" class="form-control" id="exampleInputName" placeholder="Name">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <label for="exampleInputPassword1">Address</label>
            <input type="address" class="form-control" id="exampleInputPassword1" placeholder="Address">
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
            <label for="exampleInputPassword1">Contact Number</label>
            <input type="cnumber" class="form-control" id="exampleInputPassword1" placeholder="Contact Number">
        </div>
    </div>
    <div class=" form-group">
        <div class="col-md-4">
            <label class="red">Marrital Status</label>
        </div>
        <div class="col-md-4">
            <select  data-parsley-required-message="Please Select" name="status" id="religion" class="form-control">
                <option disabled selected="">Please Choose Status</option>
                <option value="Islam">Married</option>
                <option value="Hindu">Unmarried</option>
                <option value="Khristian">Devorce</option>
                <option value="Others">Others</option>
            </select>
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
