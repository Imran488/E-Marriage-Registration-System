@extends('master')

@section('contents')

<div class="container-fluid">
  <div class="row">
    <h1> Marriage Registration List</h1>
    <div class="col-md-6"></div>
    @if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
    <div class="col-md-6">
      <a href="{{route('userregistrationform')}}" class="btn btn-primary">Fill-Up Marriage Registration Form</a>
    </div>
    <form action="{{route('marrigeregistration')}}" method="GET">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <input value="" type="text" placeholder="Search " name="search" class="form-control">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-success">Search</button>
        </div>
    </div>
    </form>
  </div>
  

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
      <td><a class="btn btn-primary" href ="{{route('view',$list->id)}}">View</a></td>
      <td><a class="btn btn-primary" href ="{{route('edit',$list->id)}}">Edit</a></td>
      <td><a class="btn btn-danger" href ="{{route('delete',$list->id)}}">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection