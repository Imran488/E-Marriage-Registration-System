@extends('master')

@section('contents')
<center>
<h1><b><u> Divorce Certificate</u></b></h1>
<b>
<p>Marriage ID: {{$list->mid}}</p>
<p>Name: {{$list->name}}</p>
<p>Address:{{$list->address}}</p>
<p>Email:{{$list->email}}</p>
<p>Contact Number:{{$list->contactnumber}}</p>
<p> Certified By: Md.Imran Hossain</p>
</b>
<p><a class="btn btn-primary" href ="#">Print</a>
<a class="btn btn-primary" href ="#">Download</a>
<a class="btn btn-danger" href ="#">Cancel</a></p>
</center>
@endsection