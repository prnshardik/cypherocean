@extends('front.layout.app')

@section('meta')
@endsection

@section('title')
    App Development
@endsection

@section('styles')
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
                <h1 data-aos="fade-up" data-aos-delay="">Application Development</h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Create Your App With Us</p>
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
            <div class="row align-items-center">
                <div class="col-md-4 mr-auto">
                    <h2 class="mb-4">Mobile Application</h2>
                    <p class="mb-4">As a development company, we can help you to build the perfect mobile-based application for almost every industry.</p>
                    <p class="mb-4">Mobile application development are a great way to bring your business closer to your customers, We create fantastic mobile application experiences bringing long-term advantages to your business and implement new technologies to offer the best experience and match your goals.</p>       
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <img src="{{ asset('front/img/undraw_svg_2.svg') }}" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 ml-auto order-2">
                    <h2 class="mb-4">Development & Design</h2>
                    <p class="mb-4">Our mobile application are developed to deliver key functionalities and content to users through an optimized interface. Our highly qualified team verifies developed mobile application.</p>
                    <p class="mb-4">We understand the importance of graphic design on mobile applications so we make sure every app we develop is easy to use and high performance.</p>
                </div>
                <div class="col-md-6" data-aos="fade-right">
                    <img src="{{ asset('front/img/undraw_svg_3.svg') }}" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="section pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 mr-auto">
                    <h2 class="mb-4">Mobile app solutions</h2>
                    <ul>
                        <li><h5 class="mb-4">Increase user retention</h5></li>
                        <li><h5 class="mb-4">Improve user experience</h5></li>
                        <li><h5 class="mb-4">Scale quickly</h5></li>
                        <li><h5 class="mb-4">Optimize performance</h5></li>
                        <li><h5 class="mb-4">Create instant connections</h5></li>
                        <li><h5 class="mb-4">Reduce business costs</h5></li>
                    </ul> 	
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <img src="{{ asset('front/img/undraw_svg_4.svg') }}" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="section"></section>
@endsection
    
@section('scripts')
@endsection