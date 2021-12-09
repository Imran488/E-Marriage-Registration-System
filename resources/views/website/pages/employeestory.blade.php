@extends('website.master')

@section('slides')
<!-- Recent Stories -->
<div class="stories">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-sm-12 str_left">
        <h1 class="fw-bold bold text-center">RECENT STORIES</h1>
        <p class="text-center">BRIDE & GROOM</p>
      </div>
      <div class="col-lg-8 col-md-12 col-sm-12 d-flex">
        <div class="v1"></div>
        <p class="my-auto p-4 str_right bold w3-medium">
          Every story has a wonderful bonding & We create the bonding of a life time
        </p>
      </div>
    </div>
  </div>
  <!-- Brid -->
  <div class="container">
  @foreach ($registerlist as $key=>$list)
    <div class="row pb-5 pt-5">
	
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div
          class="card card2 mx-auto bg-transparent border-0 text-center"
          style="width: 20rem"
        >
          
          <img src="{{url('/uploades/'.$list->imagew)}}" class="w3-circle" alt="..."/>

          <div class="card-body">
            <h1 class="card-title">{{$list->fullnamew}}</h1>
            <p class="card-text">
              
              "Our family is grateful to have the support from E-Marriage Registration System. We have trusted their work ethics to build our relationships between families."
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-1 ml-5 v2"></div>
      <div class="col-lg-4 col-md-12 col-sm-12">
        <div
          class="card card2 bg-transparent border-0 text-center"
          style="width: 20rem">
          
          <img src="{{url('/uploades/'.$list->imageh)}}" class="w3-circle" alt="">
          
          <div class="card-body">
            
            <h1 class="card-title">{{$list->fullnameh}}</h1>

            <p class="card-text">
              "E-Marriage Registration System has really helped me and my family to find the right life partner. Their dedication and effort is remarkable."
            </p>
          </div>
        </div>
      </div>
    </div>
	@endforeach
</div>
@endsection