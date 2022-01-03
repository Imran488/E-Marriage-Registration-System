@extends('master')

@section('contents')

<div class="container-fluid">
  <div class="row">
    <h1>Marriage Requests List</h1>
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
      <th scope="col">Name</th>
      <th scope="col">NID Number</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($marriagerequestslist as $key=>$list)
    <tr>
      <th>{{$key+1}}</th>    
      <td>{{$list->name}}</td>
      <td>{{$list->nid}}</td>
      <td>{{$list->date}}</td>
      <td>{{$list->address}}</td>
      <td>{{$list->email}}</td>
      <td>{{$list->contactnumber}}</td>
      <td><a class= "btn btn-primary"href="#">Edit</td>
      <td><a class= "btn btn-danger"href="#">Delete</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection