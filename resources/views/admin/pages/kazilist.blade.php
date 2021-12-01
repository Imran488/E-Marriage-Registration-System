@extends('master')

@section('contents')

<div class="container-fluid">
  <div class="row">
    <h1> Kazi List</h1>
    <div class="col-md-6"></div>
    
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
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($kazilist as $key=>$list)
    <tr>
      <th>{{$key+1}}</th>    
      <td>{{$list->name}}</td>
      <td>{{$list->email}}</td>
      <td>{{$list->password}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection