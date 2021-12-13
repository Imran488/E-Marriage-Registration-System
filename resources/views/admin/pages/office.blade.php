@extends('master')

@section('contents')

<div class="container-fluid">
  <div class="row">
    <h1> Office List</h1>
    <div class="col-md-6"></div>
    @if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
    <div class="col-md-6">
      <a href="{{route('officeform')}}" class="btn btn-primary">Add Office</a>
    </div>
  </div>
</div>
<br>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">BranchID</th>
      <th scope="col">Kazi Name</th>
      <th scope="col">Office Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($officelist as $key=>$list)
    <tr>
      <th>{{$key+1}}</th>    
      <td>{{$list->name}}</td>
      <td>{{$list->address}}</td>
      <td><a class= "btn btn-primary"href="{{route('officedetails',$list->id)}}">View</td>
      <td><a class= "btn btn-danger"href="{{route('officedelete',$list->id)}}">Delete</td>
    </tr>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection