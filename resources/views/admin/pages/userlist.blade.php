@extends('master')

@section('contents')

<div class="container-fluid">
  <div class="row">
    <h1> User List</h1>
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
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($userlist as $key=>$list)
    <tr>
      <th>{{$key+1}}</th>    
      <td>{{$list->name}}</td>
      <td>{{$list->email}}</td>
      <td>{{$list->password}}</td>
      <td><a class= "btn btn-primary"href="#">View</td>
      <td><a class= "btn btn-danger"href="#">Delete</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection