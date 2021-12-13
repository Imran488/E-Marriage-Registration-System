@extends('master')

@section('contents')

<center>
    <h1>Office Details</h1>
    <p>Branch ID:{{$officelist->id}}</p>
    <p>Branch Address:{{$officelist->address}}</p>
    <p>Kazi Name:{{$officelist->name}}</p>

</center>   
@endsection