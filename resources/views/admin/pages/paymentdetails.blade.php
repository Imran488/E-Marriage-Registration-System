@extends('master')

@section('contents')
<center>
    <div id="divToPrint">
        <h1><b><u> Payment Details</u></b></h1>
        
        <b>
            <p>Payment ID: {{$paymentlist->id}}</p>
            <p>TxnId Number: {{$paymentlist->txnid}}</p>
            <p>Sender Name: {{$paymentlist->name}}</p>
            <p>Sender Email: {{$paymentlist->email}}</p>
            <p>Sender Contact Number: {{$paymentlist->cnumber}}</p>
            <p>Sender Address: {{$paymentlist->address}}</p>
            <p>Account Type: {{$paymentlist->accountname}}</p>
            <p>Account Number: {{$paymentlist->accountnumber}}</p>
            <p>Paid Amount: {{$paymentlist->totalamount}}</p><br>
            <p>Issued By: Md. Imran Hossain</p>
        </b>
    </div>
    <input class="btn btn-primary" type="button" onClick="PrintDiv('divToPrint');" value="Print">
<a href="{{route('payment.list')}}" class="btn btn-danger" >Cancel</a>
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
