@extends('website.master')
@section('slides')
<center> <h1 style= "color:black"><u><b>Here Our All Registred Kazi</b></u></h1></center>
<form action="{{route('kazi')}}" method="GET">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <input value="{{$key}}" type="text" placeholder="Search Kazi By ddress " name="search" class="form-control">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-success">Search</button>
        </div>
    </div>
    </form>
    @if($key)
    <h4>
        Your are searching for: {{$key}}. found: {{$kazilist->count()}}
    </h4>
@endif
<div class="container-fluid">
  <div class="row">
    <div class="container">
      <div class="row">
        @foreach ($kazilist as $key=>$list)
        <div class="col-sm">
          <table class="table table-dark table-striped">
            <thead>
              <tr>
              <th scope="col">Kazi Name</th>
              <th scope="col">Email</th>
              <th scope="col">Contact Number</th>
              <th scope="col">Address</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <td>{{$list->name}}</td>
              <td>{{$list->email}}</td>
              <td>{{$list->confirmpassword}}</td>
              <td>{{$list->address}}</td>
              </tr>
            </tbody>
          </table>
        </div>
        @endforeach
      </div>
    </div>
    <div class="col-md-6"></div>
  </div>
</div>
<br>
<center><a href="{{route('home')}}" class="btn" style="background-color:lightgray; border-radius:10px">Back</a></center>    
@endsection