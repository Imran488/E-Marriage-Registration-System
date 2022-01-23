@extends('master')
@section('contents')
<center>
    <h1 style=" color:black"><u>Marriage Request Approved Form</u></h1>
    @if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
    <form action="{{route('marriage.update',$list->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="col-md-4">
                <label for="exampleInputName">Name</label>
                <input value="{{$list->name}}" type="name" name="name" class="form-control" id="exampleInputName"
                    placeholder="Enter Your Name">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-4">
                <label for="exampleInputName">NID Number</label>
                <input value="{{$list->nid}}" type="number" name="nid" class="form-control" id="exampleInputName"
                    placeholder="Enter Your NID Number">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-4">
                <label for="exampleInputName">Date of Birth</label>
                <input value="{{$list->date}}" type="date" name="date" class="form-control" id="exampleInputName"
                    placeholder="Enter Your Date of Birth">
                <small id="emailHelp" class="form-text text-muted">Your Age Should be Minimum 18 Years.</small>
            </div>
        </div>


        <div class="form-group">
            <div class="col-md-4">
                <label for="exampleInputPassword1">Address</label>
                <input value="{{$list->address}}" type="address" name="address" class="form-control"
                    id="exampleInputPassword1" placeholder="Enter Your Address">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-4">
                <label for="exampleInputEmail1">Email </label>
                <input value="{{$list->email}}" type="email" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter Your Email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-4">
                <label for="exampleInputPassword1">Contact Number</label>
                <input value="{{$list->contactnumber}}" type="number" name="contactnumber" class="form-control"
                    id="exampleInputPassword1" placeholder="Enter Your Contact Number">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-4">
                <label for="exampleInputName">Status</label>
                <select name="status" type="status" class="form-control" required data-parsley-required-message>
                    <option disabled selected="">Please Choose Option</option>
                    <option value="Approved">Approved</option>
                    <option value="Pending">pending</option>

                </select>
            </div>
        </div>


        <!-- <div class="form-check">
        <div class="col-md-4">
            <input type="checkbox" name="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">I Declare that all Informations are True</label>
        </div>
    </div> -->
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{route('marriage.requestlist')}}" class="btn btn-danger" border-radius:10px">Cancel</a>
    </form>
</center>
@endsection
