@extends('website.master')
@section('slides')
<center>
    @if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif

    <h2 style=" color:black" class="my-auto p-4 str_right bold w3-medium"><b>Every Story has a Wonderful Bonding and We
            Create the Bonding of a Life Time.</b></h2>

</center>

<!-- Recent Stories -->
<div class="stories">
    <!-- <div class="container py-5">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-sm-12 str_left">
        <h1 style=" color:black" class="fw-bold bold text-center">RECENT STORIES</h1>
        <p style=" color:black" class="text-center">BRIDE & GROOM</p>
      </div>
      <div class="col-lg-8 col-md-12 col-sm-12 d-flex">
        <div class="v1"></div>
        <p style=" color:black" class="my-auto p-4 str_right bold w3-medium">
          Every story has a wonderful bonding & We create the bonding of a life time
        </p>
      </div>
    </div>
  </div> -->
    <div class="z-index-1 appear-animation" data-appear-animation="fadeInDownShorter" data-appear-animation-delay="100">
        <div class="owl-carousel owl-theme full-width owl-loaded owl-drag owl-carousel-init m-0"
            data-plugin-options="{'items': 1, 'loop': true, 'nav': true, 'dots': false,'autoplayHoverPause':false,  'autoplay':true, 'autoplayTimeout': 5000}">
            @foreach ($registerlist as $key=>$list)
            <div class="row pb-5 pt-5">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="card card2 mx-auto bg-transparent border-0 text-center" style="width: 20rem">
                        <img src="{{url('/uploades/'.$list->imagew)}}" class="w3-circle" alt="...">
                        <div class="card-body">
                            <h1 class="card-title">{{$list->fullnamew}}</h1>
                            <p style=" color:black" class="card-text">"Our family is grateful to have the support from
                                E-Marriage Registration System. We have trusted their work ethics to build our
                                relationships between families."
                              </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 ml-5 v2"></div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card card2 bg-transparent border-0 text-center" style="width: 20rem">
                        <img src="{{url('/uploades/'.$list->imageh)}}" class="w3-circle" alt="">
                        <div class="card-body">
                            <h1 class="card-title">{{$list->fullnameh}}</h1>
                            <p style=" color:black" class="card-text">"E-Marriage Registration System has really helped
                                me and my family to find the right life partner. Their dedication and effort is
                                remarkable."
                              </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endsection
