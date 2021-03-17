@extends('front.layout.app')

@section('meta')
@endsection

@section('title')
    Home
@endsection

@section('styles')
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-5" data-aos="fade-up">
                    <h2 class="section-heading">What we do</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
                    <div class="feature-1 text-center">
                        <div class="wrap-icon icon-1">
                            <span class="icon la la-users"></span>
                        </div>
                        <h3 class="mb-3">Web Development</h3>
                        <p>Our developer team has a lot of experience developing complex web-based business systems with multiple users and roles.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-1 text-center">
                        <div class="wrap-icon icon-1">
                            <span class="icon la la-toggle-off"></span>
                        </div>
                        <h3 class="mb-3">Application Development</h3>
                        <p>As a development company, we can help you to build the perfect mobile-based application for almost every industry.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-1 text-center">
                        <div class="wrap-icon icon-1">
                            <span class="icon la la-umbrella"></span>
                        </div>
                        <h3 class="mb-3">UI/UX Designing</h3>
                        <p>Using UI/UX design we simply create a pixel-perfect customized structure that meets the screen and looks nice.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row justify-content-center text-center mb-5" data-aos="fade">
                <div class="col-md-6 mb-5">
                    <img src="{{ asset('front/img/undraw_svg_1.svg') }}" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="step">
                        <span class="number">01</span>
                        <h3>Get started now</h3>
                        <p>We look forward to your questions and inquiries for building world-class services on demand.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="step">
                        <span class="number">02</span>
                        <h3>Reliable Service</h3>
                        <p>We give our clients the creative and technical service they need to succeed business.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="step">
                        <span class="number">03</span>
                        <h3>Project Delivery</h3>
                        <p>We provide quality development to our clients with accurate estimates for their projects.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 mr-auto">
                    <h2 class="mb-4">Transparency</h2>
                    <p class="mb-4">Running a project with CypherOcean gives you full visibility into the process, and accurate time and cost reports at each incremental stage of development. Our focus is on clear communication to avoid surprises, and get things done faster.</p>
                    <p><a href="#" class="btn btn-primary">Download Now</a></p>
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
                    <h2 class="mb-4">Dedication</h2>
                    <p class="mb-4">CypherOcean is client-focused, and motivated to help you succeed. From the biggest ideas to the smallest detail, we strive to improve, optimize, and innovate every aspect of your product for quality and performance.</p>
                    <p><a href="#" class="btn btn-primary">Download Now</a></p>
                </div>
                <div class="col-md-6" data-aos="fade-right">
                    <img src="{{ asset('front/img/undraw_svg_3.svg') }}" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="section border-top border-bottom">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-4">
                    <h2 class="section-heading">Review From Our Users</h2>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-md-7">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="review text-center">
                            <p class="stars">
                                <span class="icofont-star"></span>
                                <span class="icofont-star"></span>
                                <span class="icofont-star"></span>
                                <span class="icofont-star"></span>
                                <span class="icofont-star muted"></span>
                            </p>
                            <h3>Excellent App!</h3>
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi, provident voluptates consectetur maiores quos.</p>
                            </blockquote>
                            <p class="review-user">
                                <img src="{{ asset('front/img/person_1.jpg') }}" alt="Image" class="img-fluid rounded-circle mb-3">
                                <span class="d-block">
                                    <span class="text-black">Jean Doe</span>, &mdash; App User
                                </span>
                            </p>
                        </div>
                        <div class="review text-center">
                            <p class="stars">
                                <span class="icofont-star"></span>
                                <span class="icofont-star"></span>
                                <span class="icofont-star"></span>
                                <span class="icofont-star"></span>
                                <span class="icofont-star muted"></span>
                            </p>
                            <h3>This App is easy to use!</h3>
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi, provident voluptates consectetur maiores quos.</p>
                            </blockquote>
                            <p class="review-user">
                                <img src="{{ asset('front/img/person_2.jpg') }}" alt="Image" class="img-fluid rounded-circle mb-3">
                                <span class="d-block">
                                    <span class="text-black">Johan Smith</span>, &mdash; App User
                                </span>
                            </p>
                        </div>
                        <div class="review text-center">
                            <p class="stars">
                                <span class="icofont-star"></span>
                                <span class="icofont-star"></span>
                                <span class="icofont-star"></span>
                                <span class="icofont-star"></span>
                                <span class="icofont-star muted"></span>
                            </p>
                            <h3>Awesome functionality!</h3>
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi, provident voluptates consectetur maiores quos.</p>
                            </blockquote>
                            <p class="review-user">
                                <img src="{{ asset('front/img/person_3.jpg') }}" alt="Image" class="img-fluid rounded-circle mb-3">
                                <span class="d-block">
                                <span class="text-black">Jean Thunberg</span>, &mdash; App User</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection
