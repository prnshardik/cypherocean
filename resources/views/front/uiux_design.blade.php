@extends('front.layout.app')

@section('meta')
@endsection

@section('title')
    UI/UX Design
@endsection

@section('styles')
@endsection

@section('content')
    <section class="section pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 mr-auto">
                    <h2 class="mb-4">User Experience & User Interface</h2>
                    <p class="mb-4">Using UI/UX design we simply create a pixel-perfect customized structure that meets the screen and looks nice.</p>
                    <p class="mb-4">UI/UX design is an efficient way to impress your customer from the first interaction, We focus on functionality, behavior, and information architecture.</p>
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
                    <h2 class="mb-4">Beautiful Visual Design</h2>
                    <p class="mb-4">The personality of your brand is build from UI/UX designing of your website user interface experience. We design with the idea to make our apps fast, intuitive and beautiful.</p>
                    <p class="mb-4">We use the most advanced tools to make sure we are productive and efficient our main goal is making every interaction enjoyable.</p>
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
                    <h2 class="mb-4">Our Design Strategy</h2>
                    <ul>
                        <li><h5 class="mb-4">User Experience Design</h5></li>
                        <li><h5 class="mb-4">Visual design & branding</h5></li>
                        <li><h5 class="mb-4">Visual hierarchy</h5></li>
                        <li><h5 class="mb-4">Creative direction</h5></li>
                        <li><h5 class="mb-4">Clarity and simplicity</h5></li>
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