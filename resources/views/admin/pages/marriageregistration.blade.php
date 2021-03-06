@extends('master')
@section('contents')

<center>
  <h1><b><u>This is Marriage Registered List</u></b></h1>
  <div class="col-md-6">
    <a href="{{route('userregistrationform')}}" class="btn btn-primary">Fill-Up Marriage Registration Form</a>
  </div>
  <br>

<div class="col-md-4">
  @if(session()->has('msg'))
  <p class="alert alert-success">{{session()->get('msg')}}</p>
  @endif
</div>
</center>
<form action="{{route('marrigeregistration')}}" method="GET">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <input value="{{$key}}" type="text" placeholder="Search By Marriage ID Or Groom Name " name="search" class="form-control">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z"/></svg></button>
        </div>
    </div>
</form>
@if($key)
    <h3>You are searching for: {{$key}}. Found {{$registerlist->count()}} results</h3>
    @endif

<br>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Marriage ID</th>
      <th scope="col">Groom Name</th>
      <th scope="col">Bride Name</th>
      <!-- <th scope="col">GNID</th>
      <th scope="col">BNID</th>
      <th scope="col">GDistrict</th>
      <th scope="col">BDistrict</th> -->
      <th scope="col">Groom Image</th>
      <th scope="col">Bride Image</th>
      <th scope="col">Groom Signature</th>
      <th scope="col">Bride Signature</th>
      <th scope="col">Marriage Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($registerlist as $key=>$list)
    <tr>
      <th>{{$key+1}}</th>    
      <td>{{$list->fullnameh}}</td>
      <td>{{$list->fullnamew}}</td>
      <!-- <td>{{$list->passportnumber}}</td>
      <td>{{$list->passportnumberw}}</td>
      <td>{{$list->district}}</td>
      <td>{{$list->districtw}}</td> -->
      <td><img  style="width:60px;height:60px" src="{{url('/uploades/'.$list->imageh)}}"  alt="imageh"></td>
      <td><img  style="width:60px;height:60px" src="{{url('/uploades/'.$list->imagew)}}"  alt="imagew"></td>
      <td><img  style="width:60px;height:60px" src="{{url('/uploades/'.$list->signatureh)}}"  alt="signatureh"></td>
      <td><img  style="width:60px;height:60px" src="{{url('/uploades/'.$list->signaturew)}}"  alt="signaturew"></td>
      <td>{{$list->mdate}}</td>
      <td><a class="btn btn-primary" href ="{{route('view',$list->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M1.181 12C2.121 6.88 6.608 3 12 3c5.392 0 9.878 3.88 10.819 9-.94 5.12-5.427 9-10.819 9-5.392 0-9.878-3.88-10.819-9zM12 17a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm0-2a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg></a></td>
      <td><a class="btn btn-primary" href ="{{route('edit',$list->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M6.414 16L16.556 5.858l-1.414-1.414L5 14.586V16h1.414zm.829 2H3v-4.243L14.435 2.322a1 1 0 0 1 1.414 0l2.829 2.829a1 1 0 0 1 0 1.414L7.243 18zM3 20h18v2H3v-2z"/></svg></a></td>
      <td><a class="btn btn-danger" href ="{{route('delete',$list->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4 8h16v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8zm2 2v10h12V10H6zm3 2h2v6H9v-6zm4 0h2v6h-2v-6zM7 5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v2h5v2H2V5h5zm2-1v1h6V4H9z"/></svg></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
<center>
<a href="{{route('marrigeregistration')}}" class="btn" style="background-color:lightgray; border-radius:10px">Back</a>
</center>
@endsection