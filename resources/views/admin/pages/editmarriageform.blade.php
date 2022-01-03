@extends('master')

@section('contents')
    <h1><center> Groom Bride Registration Update Form</center></h1>
    @if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif

    
    <form action="{{route('update',$list->id)}}" method="POST"enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
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
                       <input value="{{$list->mdate}}"type ="date" name="mdate" class="form-control" placeholder="Please Enter  Marriage Date" required data-parsley-required-message="Please Enter  Marriage Date">
                   </div>
               </div>

               <div class="row form-group">
                   <div class="col-md-4">
                       <label class="red">*</label>
                       Full Name of the Groom
                   </div>
                   <div class="col-md-6">
                       <input value="{{$list->fullnameh}}" name="fullnameh" type="text"  id="txtfname" class="form-control" placeholder="Please Enter  Full Name of the Groom" required data-parsley-required-message="Please Enter  Full Name of the Groom">
                    </div>
                </div>
            
                <div class="row form-group">
                    <div class="col-md-4">
                       <label class="red">*</label>
                       Age
                   </div>
                   <div class="col-md-6">
                       <input value="{{$list->age}}" name="age" type="text"  id="txtfname" class="form-control" placeholder="Please Enter  Age" required data-parsley-required-message="Please Enter  Full Name of the Groom">

                    </div>
                </div>

               <div class="row form-group">
                   <div class="col-md-4">
                       <label class="red">*</label>
                       Religion
                   </div>
                   <div class="col-md-3">
                       <select  data-parsley-required-message="Please Select" value="{{$list->religion}}" name="religion" id="religion" class="form-control">
                           <option disabled selected="">Please Choose Religion</option>
                           <option @if($list->religion == 'Islam') selected @endif value="Islam">Islam</option>
                           <option @if($list->religion == 'Hindu') selected @endif value="Hindu">Hindu</option>
                           <option @if($list->religion == 'Khristian') selected @endif value="Khristian">Khristian</option>
                           <option @if($list->religion == 'Buddhist') selected @endif value="Buddhist">Buddhist</option>
                       </select>
                   </div>

                </div>

               <div class="row form-group">
                   <div class="col-md-4">
                       Date of Birth 
                   </div>
                   <div class="col-md-3">
                       <input value="{{$list->date}}" type ="date" name="date" class="form-control" placeholder="Please Enter  Age" required data-parsley-required-message="Please Enter  Full Name of the Groom">
                   </div>
               </div>

               <div class="row form-group">
                   <div class="col-md-4">NID Number</div>
                   <div class="col-md-3">
                       <!-- <select  data-parsley-required-message="Please Select" value="{{$list->chooseidw}}" name="chooseidw" id="chooseidw" class="form-control">
                           <option disabled selected="">Please choose ID</option>
                           <option value="Voter ID">Voter ID</option>
                           <option value="Driving license">Driving license</option>
                           <option value="Passport No.">Passport No.</option>
                       </select>
                   </div>
                   <div class="col-md-3"> -->
                       <input value="{{$list->passportnumber}}" name="passportnumber" type="text" placeholder="Please NID Number" id="passportw" class="form-control ">
                    </div>
                </div>

                <div class="row form-group">
                   <div class="col-md-4">Choose Image</div>
                   <div class="col-md-3">
                       <input  name="imageh" class="form-control" type="file" id="formFileMultiple" multiple />
                   </div>
                </div>

                <div class="row form-group">
                   <div class="col-md-4">Choose Signature</div>
                   <div class="col-md-3">
                   <input name="signatureh" class="form-control" type="file" id="formFileMultiple" multiple />
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
                               <input value="{{$list->txtroomh}}" name="txtroomh" type="text" maxlength="250" id="txtroomh" class="form-control" placeholder="Flat / Room No." required data-parsley-required-message="Please Enter Flat / Room No.">
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
                               <input value="{{$list->txtroadh}}" name="txtroadh" type="text" maxlength="250" id="txtroadh" class="form-control" placeholder="Road / Street Name" required data-parsley-required-message="Please Enter Road / Street Name">
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
                               <select required="" data-parsley-required-message="Please Select District" value="{{$list->district}}" name="district" id="district" class="form-control">
                                   <option disabled selected="">Select</option>
                                   <option @if($list->district == 'Dhaka') selected @endif value="Dhaka" >Dhaka</option>
                                   <option @if($list->district == 'Rajshahi') selected @endif value="Rajshahi"  >Rajshahi</option>
                                   <option @if($list->district == 'Barishal') selected @endif value="Barishal"  >Barishal</option>
                                   <option @if($list->district == 'Khulna') selected @endif value="Khulna"  >Khulna</option>
                                   <option @if($list->district == 'Rangpur') selected @endif value="Rangpur" >Rangpur</option>
                                   <option @if($list->district == 'Sylhet') selected @endif value="Sylhet" >Sylhet</option>
                                   <option @if($list->district == 'Mymonsingh') selected @endif value="Mymonsingh">Mymonsingh</option>
                                   <option @if($list->district == 'Chottogram') selected @endif value="Chottogram" >Chottogram</option>
                                   <option  @if($list->district == 'Barguna') selected @endif value="Barguna">Barguna</option>
                                   <option  @if($list->district == 'Bhola') selected @endif value="Bhola">Bhola</option>
                                   <option @if($list->district == 'Jhalkati') selected @endif value="Jhalkati" >Jhalkati</option>
                                   <option @if($list->district == 'Patuakhali') selected @endif value="Patuakhali" >Patuakhali</option>
                                   <option @if($list->district == 'Pirojpur') selected @endif value="Pirojpur" >Pirojpur</option>
                                   <option @if($list->district == 'Bandarban') selected @endif value="Bandarban" >Bandarban</option>
                                   <option @if($list->district == 'Brahmanbaria') selected @endif value="Brahmanbaria" >Brahmanbaria</option>
                                   <option @if($list->district == 'Chandpur') selected @endif value="Chandpur" >Chandpur</option>
                                   <option @if($list->district == 'Comilla') selected @endif value="Comilla" >Comilla</option>
                                   <option @if($list->district == 'Coxs Bazar') selected @endif value="Coxs Bazar" >Cox's Bazar</option>
                                   <option @if($list->district == 'Feni') selected @endif value="Feni" >Feni</option>
                                   <option  @if($list->district == 'Khagrachhari') selected @endif value="Khagrachhari">Khagrachhari</option>
                                   <option  @if($list->district == 'Lakshmipur') selected @endif value="Lakshmipur">Lakshmipur</option>
                                   <option  @if($list->district == 'Noakhali') selected @endif value="Noakhali">Noakhali</option>
                                   <option  @if($list->district == 'Rangamati') selected @endif value="Rangamati">Rangamati</option>
                                   <option  @if($list->district == 'Faridpur') selected @endif value="Faridpur">Faridpur</option
                                   ><option  @if($list->district == 'Gazipur') selected @endif value="Gazipur">Gazipur</option>
                                   <option  @if($list->district == 'Gopalgang') selected @endif value="Gopalgang">Gopalgang</option>
                                   <option  @if($list->district == 'Kishoregang') selected @endif value="Kishoregang">Kishoregang</option>
                                   <option @if($list->district == 'Madaripur') selected @endif value="Madaripur" >Madaripur</option>
                                   <option @if($list->district == 'Manikgang') selected @endif value="Manikgang" >Manikgang</option
                                   ><option  @if($list->district == 'Munsigang') selected @endif value="Munsigang">Munsigang</option>
                                   <option  @if($list->district == 'Narayangang') selected @endif value="Narayangang">Narayangang</option>
                                   <option @if($list->district == 'Narsingdi') selected @endif value="Narsingdi" >Narsingdi</option>
                                   <option @if($list->district == 'Rajbari') selected @endif value="Rajbari">Rajbari</option>
                                   <option @if($list->district == 'Shariatpur') selected @endif value="Shariatpur" >Shariatpur</option>
                                   <option  @if($list->district == 'Tangail') selected @endif value="Tangail">Tangail</option>
                                   <option @if($list->district == 'Bagerhat') selected @endif value="Bagerhat" >Bagerhat</option>
                                   <option  @if($list->district == 'Chuadanga') selected @endif value="Chuadanga">Chuadanga</option>
                                   <option @if($list->district == 'Jessore') selected @endif value="Jessore" >Jessore</option>
                                   <option  @if($list->district == 'Jhenaidha') selected @endif value="Jhenaidha">Jhenaidha</option>
                                   <option @if($list->district == 'Kustia') selected @endif value="Kustia" >Kustia</option>
                                   <option @if($list->district == 'Magura') selected @endif value="Magura" >Magura</option>
                                   <option @if($list->district == 'Meherpur') selected @endif value="Meherpur" >Meherpur</option>
                                   <option @if($list->district == 'Narail') selected @endif value="Narail" >Narail</option>
                                   <option @if($list->district == 'Satkhira') selected @endif value="Satkhira" >Satkhira</option>
                                   <option  @if($list->district == 'Jamalpur') selected @endif value="Jamalpur">Jamalpur</option>
                                   <option @if($list->district == 'Netrokona') selected @endif value="Netrokona" >Netrokona</option>
                                   <option @if($list->district == 'Sherpur') selected @endif value="Sherpur" >Sherpur</option>
                                   <option @if($list->district == 'Bogra') selected @endif value="Bogra" >Bogra</option>
                                   <option @if($list->district == 'Joypurhat') selected @endif value="Joypurhat" >Joypurhat</option>
                                   <option @if($list->district == 'Naogaon') selected @endif value="Naogaon" >Naogaon</option>
                                   <option @if($list->district == 'Natore') selected @endif value="Natore" >Natore</option>
                                   <option  @if($list->district == 'Chapai Nawabgang') selected @endif value="Chapai Nawabgang">Chapai Nawabgang</option>
                                   <option @if($list->district == 'Pabna') selected @endif value="Pabna" >Pabna</option>
                                   <option  @if($list->district == 'Sirajganj') selected @endif value="Sirajganj">Sirajganj</option>
                                   <option @if($list->district == 'Dinajpur') selected @endif value="Dinajpur" >Dinajpur</option>
                                   <option  @if($list->district == 'Gaibandha') selected @endif value="Gaibandha">Gaibandha</option>
                                   <option @if($list->district == 'Kurigram') selected @endif value="Kurigram">Kurigram</option>
                                   <option @if($list->district == 'Lalmonirhat') selected @endif value="Lalmonirhat">Lalmonirhat</option>
                                   <option  @if($list->district == 'Nilphamari') selected @endif value="Nilphamari">Nilphamari</option>
                                   <option  @if($list->district == 'Panchagarh') selected @endif value="Panchagarh">Panchagarh</option>
                                   <option @if($list->district == 'Thakurgaon') selected @endif value="Thakurgaon" >Thakurgaon</option>
                                   <option @if($list->district == 'Habigang') selected @endif value="Habigang" >Habigang</option>
                                   <option @if($list->district == 'Moulvibazar') selected @endif value="Moulvibazar">Moulvibazar</option>
                                   <option @if($list->district == 'Sunamgang') selected @endif value="Sunamgang">Sunamgang</option>
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
                               <input value="{{$list->txtcityh}}" name="txtcityh" type="text" maxlength="100" id="txtcityh" class="form-control" placeholder="Sub-District Name">
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
                               <input value="{{$list->txtpincodeh}}" required data-parsley-required-message="Please Enter Pincode / Zipcode " name="txtpincodeh" type="text" maxlength="10" id="txtpincodeh" class="form-control" placeholder="Pincode / Zipcode " onkeypress="return isNumberKey(event)">
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
                       <input value="{{$list->fullnamew}}" name="fullnamew" type="text"  id="txtfname" class="form-control" placeholder="Please Enter  Full Name of the Bride" required data-parsley-required-message="Please Enter  Full Name of the Bride">
                    </div>
                </div>
            
                <div class="row form-group">
                    <div class="col-md-4">
                       <label class="red">*</label>
                       Age
                   </div>
                   <div class="col-md-6">
                       <input value="{{$list->agew}}" name="agew" type="text"  id="txtfname" class="form-control" placeholder="Please Enter  Age" required data-parsley-required-message="Please Enter  Full Name of the Bride">

                    </div>
                </div>

               <div class="row form-group">
                   <div class="col-md-4">
                       <label class="red">*</label>
                       Religion
                   </div>
                   <div class="col-md-3">
                       <select  data-parsley-required-message="Please Select" value="{{$list->religionw}}" name="religionw" id="religion" class="form-control">
                           <option disabled selected="">Please Choose Religion</option>
                           <option @if($list->religion == 'Islam') selected @endif value="Islam">Islam</option>
                           <option @if($list->religion == 'Hindu') selected @endif value="Hindu">Hindu</option>
                           <option @if($list->religion == 'Khristian') selected @endif value="Khristian">Khristian</option>
                           <option @if($list->religion == 'Buddhist') selected @endif value="Buddhist">Buddhist</option>
                       </select>
                   </div>

                </div>

               <div class="row form-group">
                   <div class="col-md-4">
                       Date of Birth 
                   </div>
                   <div class="col-md-3">
                       <input value="{{$list->datew}}" type ="date" name="datew" class="form-control" placeholder="Please Enter  Age" required data-parsley-required-message="Please Enter  Full Name of the Bride">
                   </div>
               </div>

               <div class="row form-group">
                   <div class="col-md-4">NID Number</div>
                   <!-- <div class="col-md-3">
                       <select  data-parsley-required-message="Please Select" value="{{$list->chooseidw}}" name="chooseidw" id="chooseidw" class="form-control">
                           <option disabled selected="">Please choose ID</option>
                           <option value="Voter ID">Voter ID</option>
                           <option value="Driving license">Driving license</option>
                           <option value="Passport No.">Passport No.</option>
                       </select>
                   </div> -->
                   <div class="col-md-3">
                       <input value="{{$list->passportnumberw}}" name="passportnumberw" type="text" placeholder="Please ID Number" id="passportw" class="form-control ">
                    </div>
                </div>

                <div class="row form-group">
                   <div class="col-md-4">Choose Image</div>
                   <div class="col-md-3">
                       <input  name="imagew" class="form-control" type="file" id="formFileMultiple" multiple />
                   </div>
                </div>

                <div class="row form-group">
                   <div class="col-md-4">Choose Signature</div>
                   <div class="col-md-3">
                   <input  name="signaturew" class="form-control" type="file" id="formFileMultiple" multiple />
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
                               <input value="{{$list->txtroomw}}" name="txtroomw" type="text" maxlength="250" id="txtroomh" class="form-control" placeholder="Flat / Room No." required data-parsley-required-message="Please Enter Flat / Room No.">
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
                               <input value="{{$list->txtroadw}}" name="txtroadw" type="text" maxlength="250" id="txtroadh" class="form-control" placeholder="Road / Street Name" required data-parsley-required-message="Please Enter Road / Street Name">
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
                               <select required="" data-parsley-required-message="Please Select District" value="{{$list->districtw}}" name="districtw" id="district" class="form-control">
                                   <option disabled selected="">Select</option>
                                   <option @if($list->districtw == 'Dhaka') selected @endif value="Dhaka" >Dhaka</option>
                                   <option @if($list->districtw == 'Rajshahi') selected @endif value="Rajshahi"  >Rajshahi</option>
                                   <option @if($list->districtw == 'Barishal') selected @endif value="Barishal"  >Barishal</option>
                                   <option @if($list->districtw == 'Khulna') selected @endif value="Khulna"  >Khulna</option>
                                   <option @if($list->districtw == 'Rangpur') selected @endif value="Rangpur" >Rangpur</option>
                                   <option @if($list->districtw == 'Sylhet') selected @endif value="Sylhet" >Sylhet</option>
                                   <option @if($list->districtw == 'Mymonsingh') selected @endif value="Mymonsingh">Mymonsingh</option>
                                   <option @if($list->districtw == 'Chottogram') selected @endif value="Chottogram" >Chottogram</option>
                                   <option  @if($list->districtw == 'Barguna') selected @endif value="Barguna">Barguna</option>
                                   <option  @if($list->districtw == 'Bhola') selected @endif value="Bhola">Bhola</option>
                                   <option @if($list->districtw == 'Jhalkati') selected @endif value="Jhalkati" >Jhalkati</option>
                                   <option @if($list->districtw == 'Patuakhali') selected @endif value="Patuakhali" >Patuakhali</option>
                                   <option @if($list->districtw == 'Pirojpur') selected @endif value="Pirojpur" >Pirojpur</option>
                                   <option @if($list->districtw == 'Bandarban') selected @endif value="Bandarban" >Bandarban</option>
                                   <option @if($list->districtw == 'Brahmanbaria') selected @endif value="Brahmanbaria" >Brahmanbaria</option>
                                   <option @if($list->districtw == 'Chandpur') selected @endif value="Chandpur" >Chandpur</option>
                                   <option @if($list->districtw == 'Comilla') selected @endif value="Comilla" >Comilla</option>
                                   <option @if($list->districtw == 'Coxs Bazar') selected @endif value="Coxs Bazar" >Cox's Bazar</option>
                                   <option @if($list->districtw == 'Feni') selected @endif value="Feni" >Feni</option>
                                   <option  @if($list->districtw == 'Khagrachhari') selected @endif value="Khagrachhari">Khagrachhari</option>
                                   <option  @if($list->districtw == 'Lakshmipur') selected @endif value="Lakshmipur">Lakshmipur</option>
                                   <option  @if($list->districtw == 'Noakhali') selected @endif value="Noakhali">Noakhali</option>
                                   <option  @if($list->districtw == 'Rangamati') selected @endif value="Rangamati">Rangamati</option>
                                   <option  @if($list->districtw == 'Faridpur') selected @endif value="Faridpur">Faridpur</option
                                   ><option  @if($list->districtw == 'Gazipur') selected @endif value="Gazipur">Gazipur</option>
                                   <option  @if($list->districtw == 'Gopalgang') selected @endif value="Gopalgang">Gopalgang</option>
                                   <option  @if($list->districtw == 'Kishoregang') selected @endif value="Kishoregang">Kishoregang</option>
                                   <option @if($list->districtw == 'Madaripur') selected @endif value="Madaripur" >Madaripur</option>
                                   <option @if($list->districtw == 'Manikgang') selected @endif value="Manikgang" >Manikgang</option
                                   ><option  @if($list->districtw == 'Munsigang') selected @endif value="Munsigang">Munsigang</option>
                                   <option  @if($list->districtw == 'Narayangang') selected @endif value="Narayangang">Narayangang</option>
                                   <option @if($list->districtw == 'Narsingdi') selected @endif value="Narsingdi" >Narsingdi</option>
                                   <option @if($list->districtw == 'Rajbari') selected @endif value="Rajbari">Rajbari</option>
                                   <option @if($list->districtw == 'Shariatpur') selected @endif value="Shariatpur" >Shariatpur</option>
                                   <option  @if($list->districtw == 'Tangail') selected @endif value="Tangail">Tangail</option>
                                   <option @if($list->districtw == 'Bagerhat') selected @endif value="Bagerhat" >Bagerhat</option>
                                   <option  @if($list->districtw == 'Chuadanga') selected @endif value="Chuadanga">Chuadanga</option>
                                   <option @if($list->districtw == 'Jessore') selected @endif value="Jessore" >Jessore</option>
                                   <option  @if($list->districtw == 'Jhenaidha') selected @endif value="Jhenaidha">Jhenaidha</option>
                                   <option @if($list->districtw == 'Kustia') selected @endif value="Kustia" >Kustia</option>
                                   <option @if($list->districtw == 'Magura') selected @endif value="Magura" >Magura</option>
                                   <option @if($list->districtw == 'Meherpur') selected @endif value="Meherpur" >Meherpur</option>
                                   <option @if($list->districtw == 'Narail') selected @endif value="Narail" >Narail</option>
                                   <option @if($list->districtw == 'Satkhira') selected @endif value="Satkhira" >Satkhira</option>
                                   <option  @if($list->districtw == 'Jamalpur') selected @endif value="Jamalpur">Jamalpur</option>
                                   <option @if($list->districtw == 'Netrokona') selected @endif value="Netrokona" >Netrokona</option>
                                   <option @if($list->districtw == 'Sherpur') selected @endif value="Sherpur" >Sherpur</option>
                                   <option @if($list->districtw == 'Bogra') selected @endif value="Bogra" >Bogra</option>
                                   <option @if($list->districtw == 'Joypurhat') selected @endif value="Joypurhat" >Joypurhat</option>
                                   <option @if($list->districtw == 'Naogaon') selected @endif value="Naogaon" >Naogaon</option>
                                   <option @if($list->districtw == 'Natore') selected @endif value="Natore" >Natore</option>
                                   <option  @if($list->districtw == 'Chapai Nawabgang') selected @endif value="Chapai Nawabgang">Chapai Nawabgang</option>
                                   <option @if($list->districtw == 'Pabna') selected @endif value="Pabna" >Pabna</option>
                                   <option  @if($list->districtw == 'Sirajganj') selected @endif value="Sirajganj">Sirajganj</option>
                                   <option @if($list->districtw == 'Dinajpur') selected @endif value="Dinajpur" >Dinajpur</option>
                                   <option  @if($list->districtw == 'Gaibandha') selected @endif value="Gaibandha">Gaibandha</option>
                                   <option @if($list->districtw == 'Kurigram') selected @endif value="Kurigram">Kurigram</option>
                                   <option @if($list->districtw == 'Lalmonirhat') selected @endif value="Lalmonirhat">Lalmonirhat</option>
                                   <option  @if($list->districtw == 'Nilphamari') selected @endif value="Nilphamari">Nilphamari</option>
                                   <option  @if($list->districtw == 'Panchagarh') selected @endif value="Panchagarh">Panchagarh</option>
                                   <option @if($list->districtw == 'Thakurgaon') selected @endif value="Thakurgaon" >Thakurgaon</option>
                                   <option @if($list->districtw == 'Habigang') selected @endif value="Habigang" >Habigang</option>
                                   <option @if($list->districtw == 'Moulvibazar') selected @endif value="Moulvibazar">Moulvibazar</option>
                                   <option @if($list->districtw == 'Sunamgang') selected @endif value="Sunamgang">Sunamgang</option>
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
                               <input value="{{$list->txtcityw}}" name="txtcityw" type="text" maxlength="100" id="txtcityh" class="form-control" placeholder="Sub-District Name">
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
                               <input value="{{$list->txtpincodew}}" required data-parsley-required-message="Please Enter Pincode / Zipcode " name="txtpincodew" type="text" maxlength="10" id="txtpincodeh" class="form-control" placeholder="Pincode / Zipcode " onkeypress="return isNumberKey(event)">
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
                            <input value="{{$list->witnessname1}}" name="witnessname1" type="text"  id="witnessname1" class="form-control" placeholder="Please Enter  Full Name of the Witness"  data-parsley-required-message="Please Enter  Full Name of the Witness">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-4">
                            <label class="red">*</label>
                            Address of Witness1
                        </div>
                        <div class="col-md-6">
                            <textarea value="" name="witnessaddress1" id="witnessaddress1" class="form-control" placeholder="Please Enter  Address of the Witness"  data-parsley-required-message="Please Enter  Address of the Witness">{{$list->witnessaddress1}}</textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-4">
                            <label class="red">*</label>
                            Full Name of the Witness2
                        </div>
                        <div class="col-md-6">
                            <input value="{{$list->witnessname2}}" name="witnessname2" type="text"  id="witnessname2" class="form-control" placeholder="Please Enter  Full Name of the Witness"  data-parsley-required-message="Please Enter  Full Name of the Witness">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-4">
                            <label class="red">*</label>
                            Address of Witness2
                        </div>
                        <div class="col-md-6">
                            <textarea value="{{$list->witnessaddress2}}" name="witnessaddress2" id="witnessaddress2" class="form-control" placeholder="Please Enter  Address of the Witness"  data-parsley-required-message="Please Enter  Address of the Witness">{{$list->witnessaddress2}}</textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-4">
                            <label class="red">*</label>
                            Full Name of the Witness 3
                        </div>
                        <div class="col-md-6">
                            <input value="{{$list->witnessname3}}" name="witnessname3" type="text"  id="witnessname3" class="form-control" placeholder="Please Enter  Full Name of the Witness"  data-parsley-required-message="Please Enter  Full Name of the Witness">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-4">
                            <label class="red">*</label>
                            Address of Witness3
                        </div>
                        <div class="col-md-6">
                            <textarea value="{{$list->witnessaddress3}}" name="witnessaddress3" id="witnessaddress3" class="form-control" placeholder="Please Enter  Address of the Witness"  data-parsley-required-message="Please Enter  Address of the Witness">{{$list->witnessaddress3}}</textarea>
                        </div>
                    </div>
            </form>
           <center><button type="submit" class="btn btn-primary">Update</button>
           <button type="submit" class="btn btn-danger" href="{{route('marriage')}}">Cancel</button>
        </center>
            
        </div>
    </form>    
@endsection
