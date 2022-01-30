@extends('master')

@section('contents')
<center>
<div id="divToPrint">
<h1><b><u> Divorce Certificate</u></b></h1>
<b>
<p>Marriage ID: {{$list->id}}</p>
<p>Name: {{$list->name}}</p>
<p>Address:{{$list->address}}</p>
<p>Email:{{$list->email}}</p>
<p>Contact Number:{{$list->contactnumber}}</p>
<p> Certified By: Registered</p>
</b>
</div>
<input class="btn btn-primary" type="button" onClick="PrintDiv('divToPrint');" value="Print">
<a class="btn btn-danger" href ="{{route('devorce.requestlist')}}">Back</a></p>

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
