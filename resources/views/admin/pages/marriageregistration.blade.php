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
      <td><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.757 3l-2 2H5v14h14V9.243l2-2V20a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12.757zm3.728-.9L21.9 3.516l-9.192 9.192-1.412.003-.002-1.417L20.485 2.1z"/></svg>
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M17 6h5v2h-2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8H2V6h5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3zm1 2H6v12h12V8zm-9 3h2v6H9v-6zm4 0h2v6h-2v-6zM9 4v2h6V4H9z"/></svg></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection