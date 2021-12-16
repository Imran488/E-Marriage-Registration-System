@extends('website.master')

@section('slides')
<center> <h1 style= "color:black"><u><b>Here Our All Office Addresses</b></u></h1></center>
<div class="container-fluid">
  <div class="row">
    <div class="container">
      <div class="row">
        @foreach ($officelist as $key=>$list)
        <div class="col-sm">
          <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">BranchID</th>
                <!--<th scope="col">Kazi Name</th>-->
                <th scope="col">Office Address</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>{{$key+1}}</th>    
                <!--<td>{{$list->name}}</td>-->
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