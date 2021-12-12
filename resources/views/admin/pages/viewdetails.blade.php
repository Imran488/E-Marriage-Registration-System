@extends('master')

@section('contents')

<h1> Marriage Certificate</h1>

<p>Marriage ID: {{$list->id}}</p>
<p>Marriage Date: {{$list->mdate}}</p>
<p> <img  style="width:200px;height:200px" src="{{url('/uploades/'.$list->imageh)}}"  alt="imageh"><img  style="width:200px;height:200px" src="{{url('/uploades/'.$list->imagew)}}"  alt="imagew"></p>
<p>Groom Name: {{$list->fullnameh}}</p>
<p> Bride Name:{{$list->fullnamew}}</p>
<p>Groom NID: {{$list->passportnumber}}</p>
<p>Bride NID:{{$list->passportnumberw}}</p>
<p>Groom Religion: {{$list->religion}}</p>
<p>Bride religion:{{$list->religionw}}</p>
<p>Groom Age: {{$list->date}}</p>
<p>Bride Age:{{$list->datew}}</p>
<p>Groom Address: {{$list->txtroomh}},{{$list->txtroadh}},{{$list->txtcityh}},{{$list->txtpincodeh}},{{$list->district}}</p>
<p>Bride ddress:{{$list->txtroomw}},{{$list->txtroadw}},{{$list->txtcityw}},{{$list->txtpincodew}},{{$list->districtw}}</p>
<p> Witness1 Name & Address:{{$list->witnessname1}},{{$list->witnessaddress1}}</p>
<p> Witness2 Name & Address:{{$list->witnessname2}},{{$list->witnessaddress2}}</p>
<p> Witness3 Name & Address:{{$list->witnessname3}},{{$list->witnessaddress3}}</p>
<p>Groom Signature: <img  style="width:60px;height:60px" src="{{url('/uploades/'.$list->signatureh)}}"  alt="signatureh"></p>
<p>Bride Signature: <img  style="width:60px;height:60px" src="{{url('/uploades/'.$list->signaturew)}}"  alt="signaturew"></p>
<p><a class="btn btn-primary" href ="#">Print</a><a class="btn btn-primary" href ="#">Download</a><a class="btn btn-danger" href ="#">Cancel</a></p>
@endsection