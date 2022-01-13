@extends('master')

@section('contents')

<center>
    <h1><b><u>Office Details</u></b></h1>
    <b>
    <p>Branch ID:{{$officelist->id}}</p>
    <p>Branch Address:{{$officelist->address}}</p>
    <p>Kazi Name:{{$officelist->name}}</p>
</b>
<center><a href="{{route('kazioffice')}}" class="btn" style="background-color:lightgray; border-radius:10px">Back</a></center>
</center>   
@endsection