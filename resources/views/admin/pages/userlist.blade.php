@extends('master')

@section('contents')

<div class="container-fluid">
  <div class="row">
    <h1> User List</h1>
    <div class="col-md-6"></div>
    @if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
    
  

<form action="{{route('userlist')}}" method="GET">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <input value="{{$key}}" type="text" placeholder="Search " name="search" class="form-control">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-success">Search</button>
        </div>
    </div>
    </form>
    @if($key)
    <h4>
        Your are searching for: {{$key}}. found: {{$userlist->count()}}
    </h4>
@endif
<br>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($userlist as $key=>$list)
    <tr>
      <th>{{$key+1}}</th>    
      <td>{{$list->name}}</td>
      <td>{{$list->email}}</td>
      <td>{{$list->mobile}}</td>
      <td><a class= "btn btn-primary"href="#">View</td>
      <td><a class= "btn btn-danger"href="#">Delete</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection