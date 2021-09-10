@extends('front.layout.app')

@section('meta')
@endsection

@section('title')
    Portfolio
@endsection

@section('styles')
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="{{ asset('front/css/google_font.css') }}"/>
    <link rel="stylesheet" href="{{ asset('front/css/google_font2.css') }}" media="print" onload="this.media='all'"/>
    <noscript>
        <link rel="stylesheet" href="{{ asset('front/css/google_font3.css') }}"/>
    </noscript>
    <link href="{{ asset('front/css/main.css?ver=1.2.0')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/css/owl-carousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/nice-select/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/style_new.css')}}">
 
@endsection

@section('hero')
    <section class="hero-section inner-page">
      <div class="wave">

        <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
              <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
            </g>
          </g>
        </svg>

      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-md-7 text-center hero-text">
                <h1 data-aos="fade-up" data-aos-delay="">Portfolio</h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Our Work Speaks</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
@endsection

@section('content')


  <!--================ Start Portfolio Area =================-->
    <section class="portfolio_area section-margin pb-0" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title">
                        <p class="top_text">Our Portfolio <span></span></p>
                        <h2>Check Our Recent <br>
                            Client Work </h2>
                    </div>
                </div>
            </div>

            <div class="filters portfolio-filter">
                <ul>
                    <li class="active" data-filter="*">all</li>
                    <li data-filter=".B2B">B2B</li>
                    <li data-filter=".Client"> Client</li>
                </ul>
            </div>

            <div class="filters-content">
                <div class="row portfolio-grid">
                    <div class="grid-sizer col-md-3 col-lg-3"></div>
                    @foreach($portfolio AS $row)
                        <div class="col-lg-6 col-md-6 all {{$row->cat_name}}">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100" src="{{ $row->image }}" alt="">
                                <div class="overlay"></div>
                                <div class="short_info">
                                    <h4><a href="{{ route('portfolio_single',$row->id)}}">{{$row->name}}</a></h4>
                                    <p>{{ $row->cat_name }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--================ End Portfolio Area =================-->

@endsection
    
@section('scripts')

    <script src="{{ asset('front/scripts/main.js?ver=1.2.0') }}"></script>
    <script src="{{ asset('front/js/popper.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}" ></script>
    <script src="{{ asset('front/js/stellar.js') }}" ></script>
    <script src="{{ asset('front/js/isotope/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('front/js/isotope/isotope-min.js') }}"></script>
    <script src="{{ asset('front/js/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('front/js/mail-script.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{{ asset('front/js//gmaps.min.js') }}"></script>
    <script src="{{ asset('front/js//theme.js') }}"></script>
@endsection