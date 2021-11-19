@extends('master')

@section('contents')
    <h1><center> Husband Wife Registration Form</center></h1>

    
    <form action="{{route('store')}}" method="POST">
        @csrf
        <div id="formapp1" class="card1 form active" style="font-size:14px;">
           

           <form data-parsley-validate="" method="post" id="apply">
       <div class="card">
                   <div class="card-body">
               <h5 class="title-head">HUSBAND DETAILS</h5>
               
               <hr>
               <div class="row form-group">
                   <div class="col-md-4">
                       <label class="red">*</label>
                       Full Name of the Husband
                   </div>
                   <div class="col-md-6">
                       <input name="fullnameh" type="text"  id="txtfname" class="form-control" placeholder="Please Enter  Full Name of the Husband" required data-parsley-required-message="Please Enter  Full Name of the Husband">

                   </div>
                   <div class="col-md-4">
                       <label class="red">*</label>
                       Age
                   </div>
                   <div class="col-md-6">
                       <input name="age" type="text"  id="txtfname" class="form-control" placeholder="Please Enter  Age" required data-parsley-required-message="Please Enter  Full Name of the Husband">

                   </div>
</div>
               <div class="row form-group">
                   <div class="col-md-4">
                       <label class="red">*</label>
                       Religion
                   </div>
                   <div class="col-md-3">
                   <select  data-parsley-required-message="Please Select" name="religion" id="religion" class="form-control">
                           <option disabled selected="">Please Choose Religion</option>
                           <option value="Islam">Islam</option>
                           <option value="Hindu">Hindu</option>
                           <option value="Khristian">Khristian</option>
                           <option value="Others">Others</option>
                       </select>
                   </div>

               </div>
               <div class="row form-group">
                   <div class="col-md-4">
                       Date of Birth 
                   </div>
                   <div class="col-md-3">
                   <input type ="date" name="date">
                       <span id="regexpName" style="color:Red;visibility:hidden;">Date is not in a valid format.</span>

                   </div>
               </div>

               <div class="row form-group">
                   <div class="col-md-4">Choose ID Type</div>
                   <div class="col-md-3">
                       <select  data-parsley-required-message="Please Select" name="chooseidw" id="chooseidw" class="form-control">
                           <option disabled selected="">Please choose ID</option>
                           <option value="Voter ID">Voter ID</option>
                           <option value="Driving license">Driving license</option>
                           <option value="Passport No.">Passport No.</option>
                       </select>
                   </div>
                   <div class="col-md-3">
                       <input name="passportnumber" type="text" placeholder="Please ID Number" id="passportw" class="form-control ">
                   </div>
               </div>
           </div>
   </div>
              


        <br>
       <center> <button type="submit" class="btn btn-primary">Submit</button></center>
    </form>
@endsection
