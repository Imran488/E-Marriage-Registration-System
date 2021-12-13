@extends('master')

@section('contents')
    <h1><center> Kazi Details</center></h1>
    @if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
    <p>Kazi ID: {{$kazilist->id}}</p>
    <p>Kazi Name: {{$kazilist->name}}</p>
    <p>Kazi Email: {{$kazilist->email}}</p>
    <p>Kazi Address: {{$kazilist->address}}</p>
@endsection