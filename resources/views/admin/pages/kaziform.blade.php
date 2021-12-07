@extends('master')

@section('contents')
    <h1><center> Kazi Registration Form</center></h1>
    @if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif

    
    <form action="{{route('kstore')}}" method="POST"enctype="multipart/form-data">
        @csrf
        <div id="formapp1" class="card1 form active" style="font-size:14px;">
           

           <form data-parsley-validate="" method="post" id="apply">
               <div class="row form-group">
                   <div class="col-md-4">
                       <label class="red">*</label>
                       Full Name 
                   </div>
                   <div class="col-md-6">
                       <input name="name" type="text"  id="txtfname" class="form-control" placeholder="Please Enter Your Full Name " required data-parsley-required-message="Please Enter  Full Name of the Husband">
                    </div>
                </div>
                <div class="row form-group">
                   <div class="col-md-4">
                       <label class="red">*</label>
                       Email
                   </div>
                   <div class="col-md-6">
                       <input name="email" type="text"  id="txtfname" class="form-control" placeholder="Please Enter  Your Email" required data-parsley-required-message="Please Enter  Full Name of the Husband">
                    </div>
                </div>
                <div class="row form-group">
                   <div class="col-md-4">
                       <label class="red">*</label>
                       Password
                   </div>
                   <div class="col-md-6">
                       <input name="password" type="text"  id="txtfname" class="form-control" placeholder="Please Enter  Your Password" required data-parsley-required-message="Please Enter  Full Name of the Husband">
                    </div>
                </div>
                <div class="row form-group">
                   <div class="col-md-4">
                       <label class="red">*</label>
                       Confirm Password
                   </div>
                   <div class="col-md-6">
                       <input name="repassword" type="text"  id="txtfname" class="form-control" placeholder="Please Retype  Your Password" required data-parsley-required-message="Please Enter  Full Name of the Husband">
                    </div>
                </div>
                <div class="row form-group">
                   <div class="col-md-4">
                       <label class="red">*</label>
                      Address
                   </div>
                   <div class="col-md-6">
                       <input name="address" type="text"  id="txtfname" class="form-control" placeholder="Please Enter  Your Address" required data-parsley-required-message="Please Enter  Full Name of the Husband">
                    </div>
                </div>
            </form>
            <center><button type="submit" class="btn btn-primary">Submit</button></center>
        </div>
    </form>
@endsection