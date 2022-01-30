@extends('master')

@section('contents')

<center>
    <h1>Please Fillup This Form</h1>
    @if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif


    <form action="{{route('ostore')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <form>
            <div class="row form-group">
                <div class="col-md-4">
                    <label class="red">*</label>
                    Full Name of Register
                </div>
                <div class="col-md-6">
                    <input name="name" type="text" id="name" class="form-control"
                        placeholder="Please Enter  Full Name of the Register"
                        data-parsley-required-message="">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-4">
                    <label class="red">*</label>
                     Register Contact Number
                </div>
                <div class="col-md-6">
                    <input name="contactnumber" type="number" id="name" class="form-control"
                        placeholder="Please Enter Register Contact Number"
                        data-parsley-required-message="">
                </div>
            </div>


            <div class="row form-group">
                <div class="col-md-4">
                    <label class="red">*</label>
                    Office Address
                </div>
                <div class="col-md-6">
                    <textarea name="address" id="address" class="form-control"
                        placeholder="Please Enter  Office Address"
                        data-parsley-required-message="Please Enter  Address of the Witness"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('kazioffice')}}" class="btn"
                style="background-color:lightgray; border-radius:10px">Back</a>
        </form>
</center>
@endsection
