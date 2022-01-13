@extends('master')

@section('contents')

<center>
<h1>
    <b><u>This is Certificate Request List</u></b>
</h1>
    <br>
<div class="col-md-4">
    @if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
</div>
</center>
<br>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Request ID</th>
      <th scope="col">Certificate Type</th>
      <th scope="col">Marriage Date</th>
      <th scope="col">Groom Name</th>
      <th scope="col">Groom NID</th>
      <th scope="col">Bride Name</th>
      <th scope="col">Groom NID</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($certificaterequestslist as $key=>$list)
    <tr>
      <th>{{$key+1}}</th>    
      <td>{{$list->certificate}}</td>
      <td>{{$list->datem}}</td>
      <td>{{$list->gname}}</td>
      <td>{{$list->gnid}}</td>
      <td>{{$list->bname}}</td>
      <td>{{$list->bnid}}</td>
      <td><a class= "btn btn-primary"href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M1.181 12C2.121 6.88 6.608 3 12 3c5.392 0 9.878 3.88 10.819 9-.94 5.12-5.427 9-10.819 9-5.392 0-9.878-3.88-10.819-9zM12 17a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm0-2a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg></a</td>
      <td><a class= "btn btn-danger"href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4 8h16v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8zm2 2v10h12V10H6zm3 2h2v6H9v-6zm4 0h2v6h-2v-6zM7 5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v2h5v2H2V5h5zm2-1v1h6V4H9z"/></svg></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
<center><a href="{{route('dashboard')}}" class="btn" style="background-color:lightgray; border-radius:10px">Back</a></center>
@endsection