@extends('master')

@section('contents')

<div class="container-fluid">
  <div class="row">
    <h1>Divorce Requests List</h1>
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
      <th scope="col">Marriage ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($devorcerequestslist as $key=>$list)
    <tr>
      <th>{{$list->mid}}</th>    
      <td>{{$list->name}}</td>
      <td>{{$list->address}}</td>
      <td>{{$list->email}}</td>
      <td>{{$list->contactnumber}}</td>
      <td><a class= "btn btn-primary"href="{{route('divorceview',$list->mid)}}">View</td>
      <td><a class= "btn btn-danger"href="{{route('divorcedelete',$list->mid)}}">Delete</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection