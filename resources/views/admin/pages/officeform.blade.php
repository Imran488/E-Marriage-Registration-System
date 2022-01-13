@extends('master')

@section('contents')

<center>
    <h1>Please Fillup This Form</h1>
    @if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif

    
    <form action="{{route('ostore')}}" method="POST"enctype="multipart/form-data">
        @csrf
<form>
    <div class="row form-group">
                        <div class="col-md-4">
                            <label class="red">*</label>
                            Full Name of Kazi
                        </div>
                        <div class="col-md-6">
                            <input name="name" type="text"  id="name" class="form-control" placeholder="Please Enter  Full Name of the Kazi"  data-parsley-required-message="Please Enter  Full Name of the Witness">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-4">
                            <label class="red">*</label>
                            Office Address 
                        </div>
                        <div class="col-md-6">
                            <textarea name="address" id="address" class="form-control" placeholder="Please Enter  Office Address"  data-parsley-required-message="Please Enter  Address of the Witness"></textarea>
                        </div>
                    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <center><a href="{{route('dashboard')}}" class="btn" style="background-color:lightgray; border-radius:10px">Back</a></center>
</form>
</center>
@endsection