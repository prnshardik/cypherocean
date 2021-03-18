@extends('front.layout.app')

@section('meta')
@endsection

@section('title')
    Web Development
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
                <h1 data-aos="fade-up" data-aos-delay="">Web Development</h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Create Your Site With Us</p>
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
                    <h2 class="mb-4">Discovery & Development</h2>
                    <p class="mb-4">We have transformed ideas into efficient Web Development solutions using the latest technologies. Our mission is to bring your business to the next level.</p>
                    <p class="mb-4">We consider your website objective our developers and digital marketers work together from the outset web development company provides complete enterprise solutions that are so strategic and transformational.</p>
                    
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
                    <h2 class="mb-4">Quality Code</h2>
                    <p class="mb-4">We use state of the art languages and frameworks, coupled with automated testing. That is considered high quality may mean one thing for an automotive developer.</p>
                    <p class="mb-4">Our code doesn’t ship unless it’s gone through rigorous automated and manual testing. Quality is non-negotiable.</p>
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
                    <h2 class="mb-4">Project Management</h2>
                    <p class="mb-4">We offer a time-saving and cost-effective development that effortlessly creates new software</p>
                    <p class="mb-4">We create custom software for forward-thinking businesses and helping them to growth and become technology leader. We find the product engineering strategy that fits your business and achieves your goals.</p>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <img src="{{ asset('front/img/undraw_svg_3.svg') }}" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 ml-auto order-2">
                    <h2 class="mb-4">Complex Integrations</h2>
                    <p class="mb-4">We design, build, and maintain custom web applications that helps to solve your toughest problem, Drive innovation by discovering new revenue opportunities.</p>
                    <p class="mb-4">Whether you’re migrating legacy systems, or joining systems together through APIs, we’re experts in architecting unified systems.</p>
                </div>
                <div class="col-md-6" data-aos="fade-right">
                    <img src="{{ asset('front/img/undraw_svg_4.svg') }}" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
@endsection
    
@section('scripts')
@endsection