@extends('website.master')

@section('slides')
<div class="z-index-1 appear-animation" data-appear-animation="fadeInDownShorter" data-appear-animation-delay="100">
  <div class="owl-carousel owl-theme full-width owl-loaded owl-drag owl-carousel-init m-0" data-plugin-options="{'items': 1, 'loop': true, 'nav': true, 'dots': false,
  
    'autoplayHoverPause':false,  'autoplay':true, 'autoplayTimeout': 5000}">
          
   <div>
          <img src="https://www.marriagesolutionbd.com/uslive/cpxlg/iXQTkXtr1622277151.jpeg"  class="img-fluid" alt="">

          <div class="row slider-custom-caption" style="margin-top: -60px;">

                      
            <div class="col-md-12">

                <div class="container p-0">
                    
                                        
                <div class="w3-card-">
            <div class="card- w3-card-4- px-5 rounded slider-card-bg-color-" style="background-color:#fef5ff">
                <div class="card- shadow- card1- mx-auto- w3-animate-zoom w-100 p-0" style="background-color:#fef5ff">
                    <div class="row g-0">
                      <div class="col-lg-2 col-md-3 pt-2">
                        <img
                          src="https://www.marriagesolutionbd.com/storage/slider/jQby1iif1622277151.jpeg"
                          class="m-auto p-2 d-flex w3-circle"
                          style="max-width: 100px; max-height: 100px;"
                          alt=""
                        />
                      </div>
                      <div class="col-lg-10 col-md-9 pl-0">
                        <div class="card-body pt-4 pb-0 pl-0">
                          <div class="card-title fw-bold bold w3-large p-0 text-dark pl-0"  style="color: #605154; font-weight: 400 !important;">Nowrin &amp; Faruki</div>
                          <p class="fw-lighter fst-italic w3-medium text-dark">
                            
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
                
                        </div>
            </div>
        </div>
          
      </div>  
       
   <div>
          <img src="https://www.marriagesolutionbd.com/uslive/cpxlg/Jo5rtll21622296261.jpg"  class="img-fluid" alt="">

          <div class="row slider-custom-caption" style="margin-top: -60px;">

                      
            <div class="col-md-12">

                <div class="container p-0">
                    
                                        
                <div class="w3-card-">
            <div class="card- w3-card-4- px-5 rounded slider-card-bg-color-" style="background-color:#fef5ff">
                <div class="card- shadow- card1- mx-auto- w3-animate-zoom w-100 p-0" style="background-color:#fef5ff">
                    <div class="row g-0">
                      <div class="col-lg-2 col-md-3 pt-2">
                        <img
                          src="https://www.marriagesolutionbd.com/storage/slider/wutyn1cI1622296261.jpg"
                          class="m-auto p-2 d-flex w3-circle"
                          style="max-width: 100px; max-height: 100px;"
                          alt=""
                        />
                      </div>
                      <div class="col-lg-10 col-md-9 pl-0">
                        <div class="card-body pt-4 pb-0 pl-0">
                          <div class="card-title fw-bold bold w3-large p-0 text-dark pl-0"  style="color: #605154; font-weight: 400 !important;">Shahinoor &amp; Fahim</div>
                          <p class="fw-lighter fst-italic w3-medium text-dark">
                            
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
                
                        </div>
            </div>
        </div>
          
      </div>  
       
   <div>
   @foreach ($registerlist as $key=>$list)
          <img  src="{{url('/uploades/'.$list->imagew)}}" width='100%'   class="img-fluid" alt="">

          <div class="row slider-custom-caption" style="margin-top: -60px;">

                      
            <div class="col-md-12">

                <div class="container p-0">
                    
                                        
                <div class="w3-card-">
               
            <div class="card- w3-card-4- px-5 rounded slider-card-bg-color-" style="background-color:#fef5ff">
                <div class="card- shadow- card1- mx-auto- w3-animate-zoom w-100 p-0" style="background-color:#fef5ff">
                    <div class="row g-0">
                      <div class="col-lg-2 col-md-3 pt-2">
                        <img
                          src="{{url('/uploades/'.$list->imagew)}}"
                          class="m-auto p-2 d-flex w3-circle"
                          style="max-width: 100px; max-height: 100px;"
                          alt="">
                      </div>
                      <div class="col-lg-10 col-md-9 pl-0">
                        <div class="card-body pt-4 pb-0 pl-0">
                          <div class="card-title fw-bold bold w3-large p-0 text-dark pl-0"  style="color: #605154; font-weight: 400 !important;">{{$list->fullnamew}}</div>
                          <p class="fw-lighter fst-italic w3-medium text-dark">
                            
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        @endforeach
                        </div>
            </div>
        </div>
          
      </div>  
       
   <div>
          <img src="https://www.marriagesolutionbd.com/uslive/cpxlg/y81phATK1622923195.jpg"  class="img-fluid" alt="">

          <div class="row slider-custom-caption" style="margin-top: -60px;">

                      
            <div class="col-md-12">

                <div class="container p-0">
                    
                                        
                <div class="w3-card-">
            <div class="card- w3-card-4- px-5 rounded slider-card-bg-color-" style="background-color:#fef5ff">
                <div class="card- shadow- card1- mx-auto- w3-animate-zoom w-100 p-0" style="background-color:#fef5ff">
                    <div class="row g-0">
                      <div class="col-lg-2 col-md-3 pt-2">
                        <img
                          src="https://www.marriagesolutionbd.com/storage/slider/8hBGL8Sc1622923195.jpg"
                          class="m-auto p-2 d-flex w3-circle"
                          style="max-width: 100px; max-height: 100px;"
                          alt="">
                        </div>
                      <div class="col-lg-10 col-md-9 pl-0">
                        <div class="card-body pt-4 pb-0 pl-0">
                          <div class="card-title fw-bold bold w3-large p-0 text-dark pl-0"  style="color: #605154; font-weight: 400 !important;">Happy Family - Sabrina &amp; Sadman</div>
                          <p class="fw-lighter fst-italic w3-medium text-dark">
                            
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
                
                        </div>
            </div>
        </div>
          
      </div>  
  </div>
</div>
</header>

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
          style="width: 20rem"
        >
          
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
  <!-- <div class="container d-flex mx-auto w-75">
    <div
      class="card card2 mx-auto bg-transparent border-0 text-center"
      style="width: auto"
    >
      <img
        src="./img/Group 4.png"
        class="card-img-top w-50 mx-auto"
        alt="..."
      />
      <div class="card-body">
        <h1 class="card-title">Sabrina Amin</h1>
        <p class="card-text">
          "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
          nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
          erat, sed diam voluptua. At vero eos et accusam et justo duo
          dolores"
        </p>
      </div>
    </div>
    <div class="v2"></div>
    <div
      class="card card2 bg-transparent border-0 text-center"
      style="width: auto"
    >
      <img
        src="./img/Group 5.png"
        class="card-img-top w-50 mx-auto"
        alt="..."
      />
      <div class="card-body">
        <h1 class="card-title">Sadman Sakib</h1>
        <p class="card-text">
          "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
          nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
          erat, sed diam voluptua. At vero eos et accusam et justo duo
          dolores"
        </p>
      </div>
    </div>
  </div> -->
  @endsection