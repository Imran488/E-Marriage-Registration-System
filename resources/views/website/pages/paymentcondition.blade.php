@extends('website.master')
@section('slides')
<center>
    <h3>
        <div class="col-50">
            <label for="fname"><b><u>Accepted Accounts</u></b></label>
            <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;">Nagad</i>
                <i class="fa fa-cc-amex" style="color:blue;">Bkash</i>
                <i class="fa fa-cc-mastercard" style="color:red;">Rocket</i>
                <i class="fa fa-cc-discover" style="color:orange;">Upay</i>
            </div><br>
            <label for="fname">Nagad Payment Account Number:01795235940</label><br>
            <label for="fname">Bkash Payment Account Number:01780316345</label><br>
            <label for="fname">Rocket Payment Account Number:01795235940</label><br>
            <label for="fname">Upay Payment Account Number:01516723243</label><br><br>

            <label for="fname"><u><b>The government has fixed the fees of the Marriage Registration consistent with the dower
                money, such as:</b></u></label>
            <label for="fname">(1)The fee is BDT 12.50/=  for each BDT 1000/= 
                Taka) of dower money</label>
            <label for="fname">(2)The fee is BDT 1250/=  for each BDT
                1,00,000/=  of dower money</label>
            <label for="fname">(3)The fee is BDT 100/=  after BDT 4,00,000/=  of dower money.</label>
        </div>
    </h3>
    <a href="{{route('home')}}" class="btn" style="background-color:lightgray; border-radius:10px">Back</a>
</center>
@endsection
