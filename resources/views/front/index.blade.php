@extends('front.layout.app')

@section('meta')
@endsection

@section('title')
    Home
@endsection

@section('styles')
@endsection

@section('hero')
 <section class="hero-section" id="hero">
    <div class="wave">
        <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                    <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
                </g>
            </g>
        </svg>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 hero-text-image">
                <div class="row">
                    <div class="col-lg-7 text-center text-lg-left">
                        <h1 data-aos="fade-right">Transform Your Business Now Through Technology</h1>
                        <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Evaluate key features of your product to achieve your business goals</p>
                        <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="#" class="btn btn-outline-white">Get started</a></p>
                    </div>
                    <div class="col-lg-5 iphone-wrap">
                        <img src="{{ asset('front/img/cypheroceanImage1.png') }}" alt="Image" class="phone-1" data-aos="fade-right">
                        <img src="{{ asset('front/img/cypheroceanImage2.png') }}" alt="Image" class="phone-2" data-aos="fade-right" data-aos-delay="200">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
                    <p><a href="{{ route('about') }}" class="btn btn-primary">Learn More <i class="icofont-arrow-right"></i></a></p>
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
                    <p><a href="{{ route('about') }}" class="btn btn-primary">Learn More <i class="icofont-arrow-right"></i></a></p>
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
                        @foreach($review AS $row)
                            <div class="review text-center">

                                <div id="full_stars_example_two">
                                    <div class="rating-group">
                                      <label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star icofont-star icofont-sm"></i></label>
                                      
                                      <input class="rating__input" <?=($row->star == '1' ? 'checked' :'')?> name="rating3" id="rating3-1" value="1" type="radio">
                                      

                                      <label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star icofont-star icofont-sm"></i></label>
                                      
                                      <input class="rating__input" <?=($row->star == '2' ? 'checked' :'')?> name="rating3" id="rating3-2" value="2" type="radio">
                                      

                                      <label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star icofont-star icofont-sm"></i></label>
                                      
                                      <input class="rating__input" <?=($row->star == '3' ? 'checked' :'')?> name="rating3" id="rating3-3" value="3" type="radio">
                                      

                                      <label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star icofont-star icofont-sm"></i></label>
                                      
                                      <input class="rating__input" <?=($row->star == '4' ? 'checked' :'')?> name="rating3" id="rating3-4" value="4" type="radio">
                                      

                                      <label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star icofont-star icofont-sm"></i></label>

                                      <input class="rating__input" <?=($row->star == '5' ? 'checked' :'')?> name="rating3" id="rating3-5" value="5" type="radio">

                                  </div>
                                </div>
                                
                                @if($row->star == '5')
                                    <h3>Excellent !</h3>
                                @elseif($row->star == '4')
                                    <h3>Good !</h3>
                                @elseif($row->star == '3')
                                    <h3>Ok !</h3>
                                @elseif($row->star == '2')
                                    <h3>Bad !</h3>
                                @else
                                    <h3>Too Bad !</h3>
                                @endif
                                    <blockquote>
                                        <p>{{ $row->feedback ??'-' }}</p>
                                    </blockquote>
                                    <p class="review-user">
                                        <img src="{{ asset('front/img/avatar.png') }}" alt="Image" class="img-fluid rounded-circle mb-3">
                                        <span class="d-block">
                                            <span class="text-black">{{ $row->name ??'User' }}</span>
                                        </span>
                                    </p>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection
