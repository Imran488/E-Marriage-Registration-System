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
      <th scope="col">Status</th>
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
      <td>{{$list->status}}</td>
      <td><a class= "btn btn-primary"href="{{route('marriage.edit',$list->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.757 3l-2 2H5v14h14V9.243l2-2V20a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12.757zm3.728-.9L21.9 3.516l-9.192 9.192-1.412.003-.002-1.417L20.485 2.1z"/></svg></td>
      <td><a class= "btn btn-danger"href="{{route('marriage.delete',$list->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4 8h16v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8zm2 2v10h12V10H6zm3 2h2v6H9v-6zm4 0h2v6h-2v-6zM7 5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v2h5v2H2V5h5zm2-1v1h6V4H9z" fill="rgba(23,23,23,1)"/></svg></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection