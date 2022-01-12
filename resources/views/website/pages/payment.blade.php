@extends('website.master')
@section('slides')
<center><h1><b><u>Please Fill-Up This Payment Form</u></b></h1></center>
@if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

/* .container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
} */

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="{{route('payment.store')}}" method="post">
      @csrf
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="name" placeholder="Type your full name"required>


            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Type your email"required>

            <label for="email"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M21 16.42v3.536a1 1 0 0 1-.93.998c-.437.03-.794.046-1.07.046-8.837 0-16-7.163-16-16 0-.276.015-.633.046-1.07A1 1 0 0 1 4.044 3H7.58a.5.5 0 0 1 .498.45c.023.23.044.413.064.552A13.901 13.901 0 0 0 9.35 8.003c.095.2.033.439-.147.567l-2.158 1.542a13.047 13.047 0 0 0 6.844 6.844l1.54-2.154a.462.462 0 0 1 .573-.149 13.901 13.901 0 0 0 4 1.205c.139.02.322.042.55.064a.5.5 0 0 1 .449.498z" fill="rgba(9,9,9,1)"/></svg></i> Contact Number</label>
            <input type="text" id="cnumber" name="cnumber" placeholder="Type your Contact Number"required>


            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <textarea type="text" id="adr" name="address" placeholder="Type your full address"required></textarea>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Accounts</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;">Nagad</i>
              <i class="fa fa-cc-amex" style="color:blue;">Bkash</i>
              <i class="fa fa-cc-mastercard" style="color:red;">Rocket</i>
              <i class="fa fa-cc-discover" style="color:orange;">Upay</i>
            </div>


            <label for="cname">Name on Account</label>
            <select type="text" name="accountname" id="aname" class="form-control"required data-parsley-required-message>
                           <option disabled selected="">Please Choose An Account</option>
                           <option value="Nagad">Nagad</option>
                           <option value="Bkash">Bkash</option>
                           <option value="Rocket">Rocket</option>
                           <option value="Upay">Upay</option>
                       </select>


            <label for="ccnum">Account number</label>
            <input type="text" id="ccnum" name="accountnumber" placeholder="Enter Your Mobile Banking Account Number"required>
            
            <label for="ccnum">TxnId Number</label>
            <input type="text" id="txnid" name="txnid" placeholder="Enter Your Mobile Banking TxnId Number"required>


            <label for="ccnum">Total Amount</label>
            <input type="number" id="txnid" name="totalamount" placeholder="Enter Total amount here"required>
          </div>
          
        </div>
        <!-- <label>
          <input type="checkbox" checked="checked" name="checkbox"> Shipping address same as billing
        </label> -->
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
      <div style="height: 100px;"></div>
    </div>
  </div>
</div>
</body>
</html>
@endsection

