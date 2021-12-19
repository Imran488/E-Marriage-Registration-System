@extends('master')

@section('contents')

<div class="container-fluid">
  <div class="row">
    <h1>Certificate Requests List</h1>
    <div class="col-md-6"></div>
    @if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
    
  </div>
</div>
<br>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Request ID</th>
      <th scope="col">Certificate Type</th>
      <th scope="col">Marriage Date</th>
      <th scope="col">Groom Name</th>
      <th scope="col">Groom NID</th>
      <th scope="col">Bride Name</th>
      <th scope="col">Groom NID</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($certificaterequestslist as $key=>$list)
    <tr>
      <th>{{$key+1}}</th>    
      <td>{{$list->certificate}}</td>
      <td>{{$list->datem}}</td>
      <td>{{$list->gname}}</td>
      <td>{{$list->gnid}}</td>
      <td>{{$list->bname}}</td>
      <td>{{$list->bnid}}</td>
      <td><a class= "btn btn-primary"href="#">View</td>
      <td><a class= "btn btn-danger"href="#">Delete</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection