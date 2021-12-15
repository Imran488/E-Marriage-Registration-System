@extends('master')

@section('contents')

<center>
    <h1><b><u>Office Details</u></b></h1>
    <b>
    <p>Branch ID:{{$officelist->id}}</p>
    <p>Branch Address:{{$officelist->address}}</p>
    <p>Kazi Name:{{$officelist->name}}</p>
</b>
</center>   
@endsection