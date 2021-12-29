@extends('master')

@section('contents')

<center>
<div id="divToPrint">
<h1><b><u> Marriage Certificate</u></b></h1>
<b>
<p>Marriage ID: {{$list->id}}</p>
<p>Marriage Date: {{$list->mdate}}</p>
<p> <img  style="width:200px;height:200px" src="{{url('/uploades/'.$list->imageh)}}"  alt="imageh"><img  style="width:200px;height:200px" src="{{url('/uploades/'.$list->imagew)}}"  alt="imagew"></p>
<p>Groom Name: {{$list->fullnameh}} Bride Name:{{$list->fullnamew}}</p>
<p>Groom NID: {{$list->passportnumber}} Bride NID:{{$list->passportnumberw}}</p>
<p>Groom Religion: {{$list->religion}} Bride Religion:{{$list->religionw}}</p>
<p>Groom BirthDate: {{$list->date}} Bride BirthDate:{{$list->datew}}</p>
<p>Groom Address: {{$list->txtroomh}},{{$list->txtroadh}},{{$list->txtcityh}},{{$list->txtpincodeh}},{{$list->district}}</p>
<p>Bride Address:{{$list->txtroomw}},{{$list->txtroadw}},{{$list->txtcityw}},{{$list->txtpincodew}},{{$list->districtw}}</p>
<p> Witness1 Name & Address:{{$list->witnessname1}},{{$list->witnessaddress1}}</p>
<p> Witness2 Name & Address:{{$list->witnessname2}},{{$list->witnessaddress2}}</p>
<p> Witness3 Name & Address:{{$list->witnessname3}},{{$list->witnessaddress3}}</p>
<p>Groom Signature: <img  style="width:60px;height:60px" src="{{url('/uploades/'.$list->signatureh)}}"  alt="signatureh"> Bride Signature: <img  style="width:60px;height:60px" src="{{url('/uploades/'.$list->signaturew)}}"  alt="signaturew"></p>
<p> Certified By: Md.Imran Hossain</p>
</b>
</div>
<input class="btn btn-primary" type="button" onClick="PrintDiv('divToPrint');" value="Print">
<a href="{{route('marrigeregistration')}}" class="btn btn-danger" >Cancel</a>

</center>
@endsection
<script language="javascript">
    function PrintDiv(divName) 
    {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>