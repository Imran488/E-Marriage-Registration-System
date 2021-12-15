@extends('master')

@section('contents')
<center>
    <h1><b><u> Kazi Details</u></b></h1>
    @if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
    <b>
    <p>Kazi ID: {{$kazilist->id}}</p>
    <p>Kazi Name: {{$kazilist->name}}</p>
    <p>Kazi Email: {{$kazilist->email}}</p>
    <p>Kazi Address: {{$kazilist->address}}</p>
</b>
</center>
@endsection