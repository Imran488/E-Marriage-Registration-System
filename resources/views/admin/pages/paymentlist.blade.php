@extends('master')
@section('contents')
<h1>
    <center><b><u>This is Payment List</u></b>
</h1>
<div class="col-md-4">
    @if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
</div>
</center>

<form action="{{route('payment.list')}}" method="GET">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <input value="{{$key}}" type="text" placeholder="Search by name or txnid number " name="search" class="form-control">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z"/></svg></button>
        </div>
    </div>
</form>
@if($key)
<h4>
    Your are searching for: {{$key}}. found: {{$paymentlist->count()}}
</h4>
@endif
<br>
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">TxnId Number</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile Number</th>
            <th scope="col">Address</th>
            <th scope="col">Account Name</th>
            <th scope="col">Account Number</th>
            <th scope="col">Total Amount</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($paymentlist as $key=>$list)
        <tr>
            <th>{{$key+1}}</th>
            <td>{{$list->txnid}}</td>
            <td>{{$list->name}}</td>
            <td>{{$list->email}}</td>
            <td>{{$list->cnumber}}</td>
            <td>{{$list->address}}</td>
            <td>{{$list->accountname}}</td>
            <td>{{$list->accountnumber}}</td>
            <td>{{$list->totalamount}}</td>
            <td><a class="btn btn-primary" href="{{route('paymentdetails',$list->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        width="24" height="24">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M1.181 12C2.121 6.88 6.608 3 12 3c5.392 0 9.878 3.88 10.819 9-.94 5.12-5.427 9-10.819 9-5.392 0-9.878-3.88-10.819-9zM12 17a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm0-2a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                        </svg></a></td>
            <!-- <td><a class="btn btn-danger" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        width="24" height="24">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M4 8h16v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8zm2 2v10h12V10H6zm3 2h2v6H9v-6zm4 0h2v6h-2v-6zM7 5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v2h5v2H2V5h5zm2-1v1h6V4H9z" />
                        </svg></a></td> -->
        </tr>
        @endforeach
    </tbody>
</table>
<center>
<a href="{{route('dashboard')}}" class="btn" style="background-color:lightgray; border-radius:10px">Back</a>
</center>
@endsection
