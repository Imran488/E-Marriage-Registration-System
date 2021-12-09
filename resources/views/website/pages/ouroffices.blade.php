@extends('website.master')

@section('slides')
<center>
<div class="container-fluid">
  <div class="row">
    <h1 style="background-color:#800080; color:white"> Here Our All Office Addresses</h1>
    <div class="col-md-6"></div>
</div>
</div>
<br>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">BranchID</th>
      <!--<th scope="col">Kazi Name</th>-->
      <th scope="col">Office Address</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($officelist as $key=>$list)
    <tr>
      <th>{{$key+1}}</th>    
      <!--<td>{{$list->name}}</td>-->
      <td>{{$list->address}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="{{route('home')}}" class="btn" style="background-color:lightgray; border-radius:10px">Back</a>
</center>
@endsection