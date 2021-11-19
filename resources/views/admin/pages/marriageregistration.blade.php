@extends('master')

@section('contents')

<div class="container-fluid">
<div class="row">
<h1>Registered User List</h1>
    <div class="col-md-6">
</div>

    <div class="col-md-6">
        <a href="{{route('userregistrationform')}}" class="btn btn-primary">Fill-Up Marriage Registration Form</a>
    </div>

</div>
</div>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Bridal ID</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Religion</th>
      <th scope="col">DoB</th>
      <th scope="col">NID</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($registerlist as $list)
    <tr>
  <th>{{$list->id}}</th>    
      <td>{{$list->Name}}</td>
      <td>{{$list->Age}}</td>
      <td>{{$list->Religion}}</td>
      <td>{{$list->DoB}}</td>
      <td>{{$list->NID}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection