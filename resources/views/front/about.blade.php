@extends('front.layout.app')

@section('meta')
@endsection

@section('title')
    About Us
@endsection

@section('styles')
@endsection

@section('content')
    <section class="section pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 mr-auto">
                    <h2 class="mb-4">About CypherOcean</h2>
                    <p class="mb-4">Trusted fully managed dedicated software development teams in India, we deliver world-class custom software development projects on demand for our clients worldwide.</p>
                    <p class="mb-4">Our purpose is to create life-changing opportunities for those we serve. We are a team and we take responsibility for the success of everything we do.</p>
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
                <h2 class="mb-4">Values-driven</h2>
                <ul>
                    <li><h5 class="mb-4">Research, design, & build</h5></li>
                    <li><h5 class="mb-4">Transparent agreements</h5></li>
                    <li><h5 class="mb-4">Culture of respect</h5></li>
                    <li><h5 class="mb-4">Value of reputation</h5></li>
                    <li><h5 class="mb-4">Protection of confidentiality</h5></li>
                </ul> 		                   
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
                    <h2 class="mb-4">Our Principles</h2>
                    <p>Building a strong relationship with our clients</p>
                    <p>We take responsibility and build around the goals, rather than tasks</p>
                    <p>Making mistakes is acceptable, learning from them is not</p>
                    <p>We are not box builders, we create experiences and solutions</p>
                    <p>Our people is the core of everything we do</p>
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