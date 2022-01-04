@extends('master')

@section('contents')
    <h1><center> Groom Bride Registration Form</center></h1>
    @if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    
    <form action="{{route('store')}}" method="POST"enctype="multipart/form-data">
        @csrf
        <div id="formapp1" class="card1 form active" style="font-size:14px;">
           

           <form data-parsley-validate="" method="post" id="apply">
               <div class="card">
                   <div class="card-body">
                       <h5 class="title-head">GROOM DETAILS</h5>
                    </div>
                </div>

                <div class="row form-group">
                   <div class="col-md-4">
                       Marriage Date 
                   </div>
                   <div class="col-md-6">
                       <input type ="date" name="mdate" class="form-control" placeholder=" Enter  Marriage Date" required data-parsley-required-message="Please Enter  Marriage Date">
                   </div>
               </div>

               <div class="row form-group">
                   <div class="col-md-4">
                       <label class="red">*</label>
                       Full Name of the Groom
                   </div>
                   <div class="col-md-6">
                       <input name="fullnameh" type="text"  id="txtfname" class="form-control" placeholder="Enter  Full Name of the Groom" required data-parsley-required-message="Please Enter  Full Name of the Groom">
                    </div>
                </div>
            
                <div class="row form-group">
                    <div class="col-md-4">
                       <label class="red">*</label>
                       Age
                   </div>
                   <div class="col-md-6">
                       <input name="age" type="text"  id="txtfname" class="form-control" placeholder=" Enter  Age" required data-parsley-required-message="Please Enter  Full Name of the Groom">

                    </div>
                </div>

               <div class="row form-group">
                   <div class="col-md-4">
                       <label class="red">*</label>
                       Religion
                   </div>
                   <div class="col-md-3">
                       <select   name="religion" id="religion" class="form-control"required data-parsley-required-message>
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
                       <input type ="date" name="date" class="form-control" placeholder="Enter  Date of Birth" required data-parsley-required-message>
                   </div>
               </div>

               <div class="row form-group">
                   <div class="col-md-4">NID Number</div>
                   <!-- <div class="col-md-3">
                       <select  data-parsley-required-message="Please Select" name="chooseidw" id="chooseidw" class="form-control">
                           <option disabled selected="">Please choose ID</option>
                           <option value="Voter ID">Voter ID</option>
                           <option value="Driving license">Driving license</option>
                           <option value="Passport No.">Passport No.</option>
                       </select>
                   </div> -->
                   <div class="col-md-3">
                       <input name="passportnumber" type="text" placeholder="Enter Groom NID Number" id="passportw" class="form-control " required data-parsley-required-message="Already Used">
                    </div>
                </div>

                <div class="row form-group">
                   <div class="col-md-4">Choose Image</div>
                   <div class="col-md-3">
                       <input name="imageh" class="form-control" type="file" id="formFileMultiple" multiple required data-parsley-required-message>
                   </div>
                </div>

                <div class="row form-group">
                   <div class="col-md-4">Choose Signature</div>
                   <div class="col-md-3">
                   <input name="signatureh" class="form-control" type="file" id="formFileMultiple" multiple required data-parsley-required-message >
                   </div>
                </div>

                <div class="row form-group">
                   <div class="col-md-12">
                       <h5>Permanent Address</h5>
                   </div>
                   <div class="col-md-6">
                       <div class="row form-group">
                           <div class="col-md-4">
                               <label class="red">*</label>
                               Flat / Room No. 
                           </div>
                           <div class="col-md-8">
                               <input name="txtroomh" type="text" maxlength="250" id="txtroomh" class="form-control" placeholder="Enter Flat / Room No." required data-parsley-required-message="Please Enter Flat / Room No.">
                            </div>
                       </div>
                   </div>

                   <div class="col-md-6">
                       <div class="row form-group">
                           <div class="col-md-4">
                               <label class="red">*</label>
                               Road / Street Name
                           </div>
                           <div class="col-md-8">
                               <input name="txtroadh" type="text" maxlength="250" id="txtroadh" class="form-control" placeholder=" Enter Road / Street Name" required data-parsley-required-message="Please Enter Road / Street Name">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                       <div class="row form-group">
                           <div class="col-md-4">
                               <label class="red">*</label>
                               Select District
                           </div>
                           <div class="col-md-8">
                               <select   name="district" id="district" class="form-control"required data-parsley-required-message>
                                   <option disabled selected="">Select</option>
                                   <option >Dhaka</option>
                                   <option  >Rajshahi</option>
                                   <option >Barishal</option>
                                   <option  >Khulna</option>
                                   <option  >Rangpur</option>
                                   <option  >Sylhet</option>
                                   <option >Mymonsingh</option>
                                   <option  >Chottogram</option>
                                   <option  >Barguna</option>
                                   <option  >Bhola</option><option  >Jhalkati</option><option  >Patuakhali</option><option  >Pirojpur</option><option  >Bandarban</option><option  >Brahmanbaria</option><option  >Chandpur</option><option >Comilla</option><option  >Cox's Bazar</option><option >Feni</option><option  >Khagrachhari</option><option  >Lakshmipur</option><option  >Noakhali</option><option  >Rangamati</option><option  >Faridpur</option><option  >Gazipur</option><option  >Gopalgang</option><option  >Kishoregang</option><option  >Madaripur</option><option  >Manikgang</option><option  >Munsigang</option><option  >Narayangang</option><option  >Narsingdi</option><option >Rajbari</option><option  >Shariatpur</option><option  >Tangail</option><option  >Bagerhat</option><option  >Chuadanga</option><option  >Jessore</option><option  >Jhenaidha</option><option  >Kustia</option><option  >Magura</option><option  >Meherpur</option><option  >Narail</option><option  >Satkhira</option><option  >Jamalpur</option><option  >Netrokona</option><option  >Sherpur</option><option  >Bogra</option><option  >Joypurhat</option><option >Naogaon</option><option  >Natore</option><option  >Chapai Nawabgang</option><option  >Pabna</option><option  >Sirajganj</option><option  >Dinajpur</option><option  >Gaibandha</option><option >Kurigram</option><option >Lalmonirhat</option><option  >Nilphamari</option><option  >Panchagarh</option><option  >Thakurgaon</option><option  >Habigang</option><option >Moulvibazar</option><option >Sunamgang</option>
                                </select>
                               
                           </div>
                       </div>
                   </div>

                   <div class="col-md-6">
                       <div class="row form-group">
                           <div class="col-md-4">
                               Sub-District
                           </div>
                           <div class="col-md-8">
                               <input name="txtcityh" type="text" maxlength="100" id="txtcityh" class="form-control" placeholder="Enter Sub-District " required data-parsley-required-message>
                               <span id="RequiredFieldValidator11" style="color:Red;visibility:hidden;">Please Enter Sub-District Name</span>
                           </div>
                       </div>
                   </div>
                   
                   <div class="col-md-6">
                       <div class="row form-group">
                           <div class="col-md-4">
                               <label class="red">*</label>
                               Pincode / Zipcode 
                           </div>
                           <div class="col-md-8">
                               <input required data-parsley-required-message=" Enter Pincode / Zipcode " name="txtpincodeh" type="text" maxlength="10" id="txtpincodeh" class="form-control" placeholder="Pincode / Zipcode " onkeypress="return isNumberKey(event)">
                               <span id="RequiredFieldValidator12" style="color:Red;visibility:hidden;">Please Enter Pincode / Zipcode</span>
                           </div>
                       </div>
                   </div>
                </div>



                <div class="card">
                   <div class="card-body">
                       <h5 class="title-head">BRIDE DETAILS</h5>
                    </div>
                </div>

               <div class="row form-group">
                   <div class="col-md-4">
                       <label class="red">*</label>
                       Full Name of the Bride
                   </div>
                   <div class="col-md-6">
                       <input name="fullnamew" type="text"  id="txtfname" class="form-control" placeholder="Enter  Full Name of the Bride" required data-parsley-required-message="Please Enter  Full Name of the Bride">
                    </div>
                </div>
            
                <div class="row form-group">
                    <div class="col-md-4">
                       <label class="red">*</label>
                       Age
                   </div>
                   <div class="col-md-6">
                       <input name="agew" type="text"  id="txtfname" class="form-control" placeholder="Enter Bride  Age" required data-parsley-required-message="Please Enter  Full Name of the Bride">

                    </div>
                </div>

               <div class="row form-group">
                   <div class="col-md-4">
                       <label class="red">*</label>
                       Religion
                   </div>
                   <div class="col-md-3">
                       <select   name="religionw" id="religion" class="form-control"required data-parsley-required-message>
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
                       <input type ="date" name="datew" class="form-control" placeholder=" Enter  Date of Birth" required data-parsley-required-message="Please Enter  Full Name of the Bride">
                   </div>
               </div>

               <div class="row form-group">
                   <div class="col-md-4">NID Number</div>
                   <!-- <div class="col-md-3">
                       <select  data-parsley-required-message="Please Select" name="chooseidw" id="chooseidw" class="form-control">
                           <option disabled selected="">Please choose ID</option>
                           <option value="Voter ID">Voter ID</option>
                           <option value="Driving license">Driving license</option>
                           <option value="Passport No.">Passport No.</option>
                       </select>
                   </div> -->
                   <div class="col-md-3">
                       <input name="passportnumberw" type="text" placeholder="Enter Bride NID Number" id="passportw" class="form-control "required data-parsley-required-message="Already Used">
                    </div>
                </div>

                <div class="row form-group">
                   <div class="col-md-4">Choose Image</div>
                   <div class="col-md-3">
                       <input name="imagew" class="form-control" type="file" id="formFileMultiple" multiple required data-parsley-required-message>
                   </div>
                </div>

                <div class="row form-group">
                   <div class="col-md-4">Choose Signature</div>
                   <div class="col-md-3">
                   <input name="signaturew" class="form-control" type="file" id="formFileMultiple" multiple required data-parsley-required-message>
                   </div>
                </div>

                <div class="row form-group">
                   <div class="col-md-12">
                       <h5>Permanent Address</h5>
                   </div>
                   <div class="col-md-6">
                       <div class="row form-group">
                           <div class="col-md-4">
                               <label class="red">*</label>
                               Flat / Room No. 
                           </div>
                           <div class="col-md-8">
                               <input name="txtroomw" type="text" maxlength="250" id="txtroomh" class="form-control" placeholder=" Enter Flat / Room No." required data-parsley-required-message="Please Enter Flat / Room No.">
                            </div>
                       </div>
                   </div>

                   <div class="col-md-6">
                       <div class="row form-group">
                           <div class="col-md-4">
                               <label class="red">*</label>
                               Road / Street Name
                           </div>
                           <div class="col-md-8">
                               <input name="txtroadw" type="text" maxlength="250" id="txtroadh" class="form-control" placeholder="Enter Road / Street Name" required data-parsley-required-message="Please Enter Road / Street Name">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                       <div class="row form-group">
                           <div class="col-md-4">
                               <label class="red">*</label>
                               Select District
                           </div>
                           <div class="col-md-8">
                               <select  name="districtw" id="district" class="form-control"required data-parsley-required-message>
                                   <option disabled selected="">Select</option>
                                   <option >Dhaka</option>
                                   <option  >Rajshahi</option>
                                   <option >Barishal</option>
                                   <option  >Khulna</option>
                                   <option  >Rangpur</option>
                                   <option  >Sylhet</option>
                                   <option >Mymonsingh</option>
                                   <option  >Chottogram</option>
                                   <option  >Barguna</option>
                                   <option  >Bhola</option><option  >Jhalkati</option><option  >Patuakhali</option><option  >Pirojpur</option><option  >Bandarban</option><option  >Brahmanbaria</option><option  >Chandpur</option><option >Comilla</option><option  >Cox's Bazar</option><option >Feni</option><option  >Khagrachhari</option><option  >Lakshmipur</option><option  >Noakhali</option><option  >Rangamati</option><option  >Faridpur</option><option  >Gazipur</option><option  >Gopalgang</option><option  >Kishoregang</option><option  >Madaripur</option><option  >Manikgang</option><option  >Munsigang</option><option  >Narayangang</option><option  >Narsingdi</option><option >Rajbari</option><option  >Shariatpur</option><option  >Tangail</option><option  >Bagerhat</option><option  >Chuadanga</option><option  >Jessore</option><option  >Jhenaidha</option><option  >Kustia</option><option  >Magura</option><option  >Meherpur</option><option  >Narail</option><option  >Satkhira</option><option  >Jamalpur</option><option  >Netrokona</option><option  >Sherpur</option><option  >Bogra</option><option  >Joypurhat</option><option >Naogaon</option><option  >Natore</option><option  >Chapai Nawabgang</option><option  >Pabna</option><option  >Sirajganj</option><option  >Dinajpur</option><option  >Gaibandha</option><option >Kurigram</option><option >Lalmonirhat</option><option  >Nilphamari</option><option  >Panchagarh</option><option  >Thakurgaon</option><option  >Habigang</option><option >Moulvibazar</option><option >Sunamgang</option>
                                </select>
                               
                           </div>
                       </div>
                   </div>

                   <div class="col-md-6">
                       <div class="row form-group">
                           <div class="col-md-4">
                               Sub-District
                           </div>
                           <div class="col-md-8">
                               <input name="txtcityw" type="text" maxlength="100" id="txtcityh" class="form-control" placeholder="Enter Sub-District " required data-parsley-required-message>
                               <span id="RequiredFieldValidator11" style="color:Red;visibility:hidden;">Please Enter Sub-District Name</span>
                           </div>
                       </div>
                   </div>
                   
                   <div class="col-md-6">
                       <div class="row form-group">
                           <div class="col-md-4">
                               <label class="red">*</label>
                               Pincode / Zipcode 
                           </div>
                           <div class="col-md-8">
                               <input required data-parsley-required-message=" Enter Pincode / Zipcode " name="txtpincodew" type="text" maxlength="10" id="txtpincodeh" class="form-control" placeholder="Pincode / Zipcode " onkeypress="return isNumberKey(event)">
                               <span id="RequiredFieldValidator12" style="color:Red;visibility:hidden;">Please Enter Pincode / Zipcode</span>
                           </div>
                       </div>
                   </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="title-head">WITNESS DETAILS</h5>
                    </div>
                </div>
                <div class="row form-group">
                        <div class="col-md-4">
                            <label class="red">*</label>
                            Full Name of the Witness1
                        </div>
                        <div class="col-md-6">
                            <input name="witnessname1" type="text"  id="witnessname1" class="form-control" placeholder=" Enter  Full Name of the Witness"  required data-parsley-required-message>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-4">
                            <label class="red">*</label>
                            Address of Witness1
                        </div>
                        <div class="col-md-6">
                            <textarea name="witnessaddress1" id="witnessaddress1" class="form-control" placeholder=" Enter  Address of the Witness"  required data-parsley-required-message></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-4">
                            <label class="red">*</label>
                            Full Name of the Witness2
                        </div>
                        <div class="col-md-6">
                            <input name="witnessname2" type="text"  id="witnessname2" class="form-control" placeholder=" Enter  Full Name of the Witness"  required data-parsley-required-message>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-4">
                            <label class="red">*</label>
                            Address of Witness2
                        </div>
                        <div class="col-md-6">
                            <textarea name="witnessaddress2" id="witnessaddress2" class="form-control" placeholder=" Enter  Address of the Witness"  required data-parsley-required-message></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-4">
                            <label class="red">*</label>
                            Full Name of the Witness 3
                        </div>
                        <div class="col-md-6">
                            <input name="witnessname3" type="text"  id="witnessname3" class="form-control" placeholder=" Enter  Full Name of the Witness"  required data-parsley-required-message>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-4">
                            <label class="red">*</label>
                            Address of Witness3
                        </div>
                        <div class="col-md-6">
                            <textarea name="witnessaddress3" id="witnessaddress3" class="form-control" placeholder=" Enter  Address of the Witness"  required data-parsley-required-message></textarea>
                        </div>
                    </div>
            </form>
           <center><button type="submit" class="btn btn-primary">Submit</button></center>
            
        </div>
    </form>    
@endsection
