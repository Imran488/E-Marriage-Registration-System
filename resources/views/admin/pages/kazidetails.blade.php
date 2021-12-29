@extends('master')

@section('contents')
<center>
    <div id="divToPrint">
        <h1><b><u> Kazi Details</u></b></h1>
        
        <b>
            <p>Kazi ID: {{$kazilist->id}}</p>
            <p>Kazi Name: {{$kazilist->name}}</p>
            <p>Kazi Email: {{$kazilist->email}}</p>
            <p>Kazi Contact Number: {{$kazilist->confirmpassword}}</p>
            <p>Kazi Address: {{$kazilist->address}}</p>
        </b>
    </div>
    <input class="btn btn-primary" type="button" onClick="PrintDiv('divToPrint');" value="Print">
<a href="{{route('kazilist')}}" class="btn btn-danger" >Cancel</a>
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
