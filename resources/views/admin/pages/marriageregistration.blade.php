@extends('master')

@section('contents')

<div class="container-fluid">
  <div class="row">
    <h1> Marriage Registration List</h1>
    <div class="col-md-6"></div>
    
    <div class="col-md-6">
      <a href="{{route('userregistrationform')}}" class="btn btn-primary">Fill-Up Marriage Registration Form</a>
    </div>
  </div>
</div>
<br>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Bridal ID</th>
      <th scope="col">GName</th>
      <th scope="col">BName</th>
      <th scope="col">GNID</th>
      <th scope="col">BNID</th>
      <th scope="col">GDistrict</th>
      <th scope="col">BDistrict</th>
      <th scope="col">GImage</th>
      <th scope="col">BImage</th>
      <th scope="col">GSignature</th>
      <th scope="col">BSignature</th>
      <th scope="col">MDate</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($registerlist as $key=>$list)
    <tr>
      <th>{{$key+1}}</th>    
      <td>{{$list->fullnameh}}</td>
      <td>{{$list->fullnamew}}</td>
      <td>{{$list->passportnumber}}</td>
      <td>{{$list->passportnumberw}}</td>
      <td>{{$list->district}}</td>
      <td>{{$list->districtw}}</td>
      <td><img  style="width:60px;height:60px" src="{{url('/uploades/'.$list->imageh)}}"  alt="imageh"></td>
      <td><img  style="width:60px;height:60px" src="{{url('/uploades/'.$list->imagew)}}"  alt="imagew"></td>
      <td><img  style="width:60px;height:60px" src="{{url('/uploades/'.$list->signatureh)}}"  alt="signatureh"></td>
      <td><img  style="width:60px;height:60px" src="{{url('/uploades/'.$list->signaturew)}}"  alt="signaturew"></td>
      <td>{{$list->mdate}}</td>
      <td><a class="btn-btn primary" href ="{{route('view')}}">View</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection