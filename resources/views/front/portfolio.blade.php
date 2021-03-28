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
    <section class="section pb-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <a class="btn btn-primary pp-filter-button" href="#" data-filter="all">All</a>
                    <a class="btn btn-outline-primary pp-filter-button" href="#" data-filter="1">B2B</a>
                    <a class="btn btn-outline-primary pp-filter-button" href="#" data-filter="2">Client</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="pp-gallery">
                <div class="card-columns">
                    @foreach( $portfolio AS $row )
                        <div class="card" data-groups="[&quot;{{ $row->portfolio_category_id }}&quot;]">
                            <a href="{{ route('portfolio_single',$row->id) }}">
                                <figure class="pp-effect"><img class="img-fluid" src="{{  $row->image  }}" alt="Nature"/>
                                    <figcaption>
                                        <div class="h4">{{ $row->name }}</div>
                                        <p>{{ $row->cat_name }}</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
    </section>
@endsection
    
@section('scripts')
    <script src="{{ asset('front/scripts/main.js?ver=1.2.0') }}"></script>
@endsection