@extends('front.layout.app')

@section('meta')
@endsection

@section('title')
Portfolio Details
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
                        <h1 data-aos="fade-up" data-aos-delay="">{{ $portfolio->name }}</h1>
                        <p class="mb-5" data-aos="fade-up" data-aos-delay="100">{{ $portfolio->cat_name }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


@section('content')
@if(!empty($portfolio_images))
@php $i = 1; @endphp
@foreach($portfolio_images as $row)
@if($i%2)
<section class="section pb-8">
    <div class="container">
        <div class="row">
            <div class="col-md-7 blog-content">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" style="max-height: 500px;">
                        @if(!empty($portfolio_images))
                        <div class="carousel-item  active">
                            <img class="d-block w-100" src="{{ $portfolio_images[1]->image ?? '' }}" alt="{{ $portfolio_images[0]->id }} slide">
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-5 sidebar">
                <div class="sidebar-box">
                    <h3>About The Project</h3>
                    <div>{!! html_entity_decode($portfolio->description) !!} Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad rem maiores dolorum, tempora dolor reiciendis quia velit, eum minima sapiente error optio nesciunt numquam aliquam tempore perferendis assumenda accusamus ullam architecto, accusantium exercitationem illum!</div>
                </div>
            </div>
        </div>
    </div>
</section>
@else
    
<section class="section pb-8 portfolio-blue">
    <div class="container">
        <div class="row">
            <div class="col-md-5 sidebar">
                <div class="sidebar-box">
                    <h3 class="text-white">About The Project</h3>
                    <div>{!! html_entity_decode($portfolio->description) !!} Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure aliquam neque tempore ratione maiores hic commodi nulla a aperiam! Suscipit ducimus soluta reprehenderit tempora et expedita exercitationem, amet perspiciatis quis debitis earum quia illo.</div>
                </div>
            </div>
            <div class="col-md-7 blog-content">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" style="max-height: 500px;">
                        @if(!empty($portfolio_images))
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ $portfolio_images[0]->image ?? '' }}" alt="{{ $portfolio_images[1]->id }} slide">
                        </div>

                        @endif
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
@endif



@php $i++; @endphp
@endforeach
@endif


<section class="section"></section>
@endsection

@section('scripts')
@endsection