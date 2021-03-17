@extends('front.layout.app')

@section('meta')
@endsection

@section('title')
    App Development
@endsection

@section('styles')
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