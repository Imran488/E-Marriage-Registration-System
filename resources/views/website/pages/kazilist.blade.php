@extends('website.master')
@section('slides')
<center> <h1 style= "color:black"><u><b>Here Our All Registred Kazi</b></u></h1>
@if($key)
    <h4>
        Your are searching for: {{$key}}. found: {{$kazilist->count()}}
    </h4>
@endif
</center>

<form action="{{route('kazi')}}" method="GET">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <input value="{{$key}}" type="text" placeholder="Search Kazi By His Address " name="search" class="form-control">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-success">Search</button>
        </div>
    </div>
    </form>
    <br>
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
              <th scope="col">Call</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <td>{{$list->name}}</td>
              <td>{{$list->email}}</td>
              <td>{{$list->confirmpassword}}</td>
              <td>{{$list->address}}</td>
              <td><a  href="https://api.whatsapp.com/send?text={{urlencode(url()->current()) }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M9.366 10.682a10.556 10.556 0 0 0 3.952 3.952l.884-1.238a1 1 0 0 1 1.294-.296 11.422 11.422 0 0 0 4.583 1.364 1 1 0 0 1 .921.997v4.462a1 1 0 0 1-.898.995c-.53.055-1.064.082-1.602.082C9.94 21 3 14.06 3 5.5c0-.538.027-1.072.082-1.602A1 1 0 0 1 4.077 3h4.462a1 1 0 0 1 .997.921A11.422 11.422 0 0 0 10.9 8.504a1 1 0 0 1-.296 1.294l-1.238.884zm-2.522-.657l1.9-1.357A13.41 13.41 0 0 1 7.647 5H5.01c-.006.166-.009.333-.009.5C5 12.956 11.044 19 18.5 19c.167 0 .334-.003.5-.01v-2.637a13.41 13.41 0 0 1-3.668-1.097l-1.357 1.9a12.442 12.442 0 0 1-1.588-.75l-.058-.033a12.556 12.556 0 0 1-4.702-4.702l-.033-.058a12.442 12.442 0 0 1-.75-1.588z" fill="rgba(251,254,255,0.43)"/></svg></a></td>
              <!-- <td><a class= "btn btn-primary"href="{{route('kazi.appointment')}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M21 16.42v3.536a1 1 0 0 1-.93.998c-.437.03-.794.046-1.07.046-8.837 0-16-7.163-16-16 0-.276.015-.633.046-1.07A1 1 0 0 1 4.044 3H7.58a.5.5 0 0 1 .498.45c.023.23.044.413.064.552A13.901 13.901 0 0 0 9.35 8.003c.095.2.033.439-.147.567l-2.158 1.542a13.047 13.047 0 0 0 6.844 6.844l1.54-2.154a.462.462 0 0 1 .573-.149 13.901 13.901 0 0 0 4 1.205c.139.02.322.042.55.064a.5.5 0 0 1 .449.498z" fill="rgba(9,9,9,1)"/></svg></td> -->
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
@endsection
