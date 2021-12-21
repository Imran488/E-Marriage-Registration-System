@extends('master')

@section('contents')

<div class="container-fluid">
  <div class="row">
    <h1> Kazi List</h1>
    <div class="col-md-6"></div>
    @if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
    <div class="col-md-6">
      <a href="{{route('kaziform')}}" class="btn btn-primary">Add kazi</a>
    </div>
  </div>
</div>
<br>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($kazilist as $key=>$list)
    <tr>
      <th>{{$key+1}}</th>    
      <td>{{$list->name}}</td>
      <td>{{$list->email}}</td>
      <td>{{$list->confirmpassword}}</td>
      <td>{{$list->address}}</td>
      <td><a class= "btn btn-primary"href="{{route('kazidetails',$list->id)}}">View</td>
      <td><a class= "btn btn-danger"href="{{route('kazidelete',$list->id)}}">Delete</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection