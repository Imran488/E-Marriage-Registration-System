@extends('website.master')

@section('slides')

<div class="container-fluid">
  <div class="row">
    <center><h1> Here Our All Office Addresses</h1></center>
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

@endsection