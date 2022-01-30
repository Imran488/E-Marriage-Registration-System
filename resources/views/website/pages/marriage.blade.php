@extends('website.master')
@section('slides')
<center>
    <h1 style=" color:black"><u>Marriage Request Form</u></h1>
    @if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
    <!-- server side validation start -->
    @if ($errors->any())
     <div class="alert alert-danger" role="alert">
       <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
          @endforeach
       </ul>
    </div>
    @endif
     <!-- server side validation end -->

<form action="{{route('marriage.requestform')}}" method="post">
    @csrf
    <div class="form-group">
        <div class="col-md-4">
            <strong for="exampleInputName">Marriage Date</strong>
            <input type="date" name="marriagedate" class="form-control" id="exampleInputName" placeholder="Enter When you will be marry"required>
            <strong id="emailHelp" style="color:#2980b9;">NB: When you will Marry</strong>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <strong for="exampleInputName">Groom Name</strong>
            <input type="name" name="name" class="form-control" id="exampleInputName" placeholder="Enter Your Name"required>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-4">
            <strong for="exampleInputName">Groom NID Number</strong>
            <input type="number" name="nid" class="form-control" id="exampleInputName" placeholder="Enter Your NID Number"required>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-4">
            <strong for="exampleInputName">Groom Date of Birth</strong>
            <input type="date" name="date" class="form-control" id="exampleInputName" placeholder="Enter Your Date of Birth"required>
            <strong id="emailHelp" style="color:#2980b9;">Groom Age Should be Minimum 21 Years.</strong>
        </div>
    </div>


    <div class="form-group">
        <div class="col-md-4">
            <strong for="exampleInputName">Bride Name</strong>
            <input type="name" name="nameb" class="form-control" id="exampleInputName" placeholder="Enter Your Name"required>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-4">
            <strong for="exampleInputName">Bride NID Number</strong>
            <input type="number" name="nidb" class="form-control" id="exampleInputName" placeholder="Enter Your NID Number"required>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-4">
           <strong>Bride Date of Birth</strong>
            <input type="date" name="dateb" class="form-control" id="exampleInputName" placeholder="Enter Your Date of Birth"required>
            <strong style="color:#2980b9;">NB: Bride Age Should be Minimum 18 Years.</strong>
        </div>
    </div>


    <div class="form-group">
        <div class="col-md-4">
            <strong for="exampleInputPassword1">Marriage Address</strong>
            <input type="address" name="address" class="form-control" id="exampleInputPassword1" placeholder="Enter Yours Marriage Address"required>
            <strong id="emailHelp" style="color:#2980b9;"> NB: Where yours Marriages Ceremony will Happen</strong>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <strong for="exampleInputEmail1">Email </strong>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email"required>
            <strong id="emailHelp" style="color:#2980b9;">NB:Groom or Bride Anyone Email </strong>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
           <strong>Contact Number</strong>
            <input type="number" name="contactnumber"class="form-control" id="exampleInputPassword1" placeholder="Enter Your Contact Number"required>
            <strong id="emailHelp" style="color:#2980b9;">NB:Groom or Bride Anyone Mobile Number </strong>
        </div>
    </div>

    <!-- <div class="form-check">
        <div class="col-md-4">
            <input type="checkbox" name="checkbox" class="form-check-input" id="exampleCheck1">
            <strong class="form-check-strong" for="exampleCheck1">I Declare that all Informations are True</strong>
        </div>
    </div> -->
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{route('home')}}" class="btn" style="background-color:lightgray; border-radius:10px">Cancel</a>
</form>
<div style="height: 100px;"></div>
</center>
@endsection
