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

@section('content')
    <section class="section pb-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <a class="btn btn-primary pp-filter-button" href="#" data-filter="all">All</a>
                    <a class="btn btn-outline-primary pp-filter-button" href="#" data-filter="people">B2B</a>
                    <a class="btn btn-outline-primary pp-filter-button" href="#" data-filter="nature">Client</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="pp-gallery">
                <div class="card-columns">
                    <div class="card" data-groups="[&quot;nature&quot;]">
                        <a href="image-detail.html">
                            <figure class="pp-effect"><img class="img-fluid" src="{{ asset('front/images/1-nature.jpg') }}" alt="Nature"/>
                                <figcaption>
                                    <div class="h4">Forest</div>
                                    <p>Nature</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="card" data-groups="[&quot;nature&quot;]">
                        <a href="image-detail.html">
                            <figure class="pp-effect"><img class="img-fluid" src="{{ asset('front/images/2-nature.jpg') }}" alt="Nature"/>
                                <figcaption>
                                    <div class="h4">Bird</div>
                                    <p>Nature</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="card" data-groups="[&quot;nature&quot;]">
                        <a href="image-detail.html">
                            <figure class="pp-effect"><img class="img-fluid" src="{{ asset('front/images/4-nature.jpg') }}" alt="Nature"/>
                                <figcaption>
                                    <div class="h4">Sunrise</div>
                                    <p>Nature</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="card" data-groups="[&quot;nature&quot;]">
                        <a href="image-detail.html">
                            <figure class="pp-effect"><img class="img-fluid" src="{{ asset('front/images/5-nature.jpg') }}" alt="Nature"/>
                                <figcaption>
                                <div class="h4">Greenery</div>
                                <p>Nature</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="card" data-groups="[&quot;nature&quot;]">
                        <a href="image-detail.html">
                            <figure class="pp-effect"><img class="img-fluid" src="{{ asset('front/images/8-nature.jpg') }}" alt="Nature"/>
                                <figcaption>
                                <div class="h4">Bird</div>
                                <p>Nature</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="card" data-groups="[&quot;nature&quot;]">
                        <a href="image-detail.html">
                            <figure class="pp-effect"><img class="img-fluid" src="{{ asset('front/images/9-nature.jpg') }}" alt="Nature"/>
                                <figcaption>
                                    <div class="h4">Flower</div>
                                    <p>Nature</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="card" data-groups="[&quot;people&quot; , &quot;nature&quot;]">
                        <a href="image-detail.html">
                            <figure class="pp-effect"><img class="img-fluid" src="{{ asset('front/images/10-people.jpg') }}" alt="People"/>
                                <figcaption>
                                    <div class="h4">Model</div>
                                    <p>People</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="card" data-groups="[&quot;people&quot;]">
                        <a href="image-detail.html">
                            <figure class="pp-effect"><img class="img-fluid" src="{{ asset('front/images/11-people.jpg') }}" alt="People"/>
                                <figcaption>
                                    <div class="h4">Cute</div>
                                    <p>People</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="card" data-groups="[&quot;people&quot;]">
                        <a href="image-detail.html">
                            <figure class="pp-effect"><img class="img-fluid" src="{{ asset('front/images/13-people.jpg') }}" alt="People"/>
                                <figcaption>
                                    <div class="h4">Model</div>
                                    <p>People</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="card" data-groups="[&quot;people&quot;]">
                        <a href="image-detail.html">
                            <figure class="pp-effect"><img class="img-fluid" src="{{ asset('front/images/14-people.jpg') }}" alt="People"/>
                                <figcaption>
                                    <div class="h4">Model</div>
                                    <p>People</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="card" data-groups="[&quot;people&quot;]">
                        <a href="image-detail.html">
                            <figure class="pp-effect"><img class="img-fluid" src="{{ asset('front/images/16-people.jpg') }}" alt="People"/>
                                <figcaption>
                                    <div class="h4">Model</div>
                                    <p>People</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="card" data-groups="[&quot;people&quot; , &quot;nature&quot;]">
                        <a href="image-detail.html">
                            <figure class="pp-effect"><img class="img-fluid" src="{{ asset('front/images/17-people.jpg') }}" alt="People"/>
                                <figcaption>
                                    <div class="h4">Model</div>
                                    <p>People</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="card" data-groups="[&quot;computer&quot;]">
                        <a href="image-detail.html">
                            <figure class="pp-effect"><img class="img-fluid" src="{{ asset('front/images/18-computer.jpg') }}" alt="Computer"/>
                                <figcaption>
                                    <div class="h4">Laptop</div>
                                    <p>Computer</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="card" data-groups="[&quot;computer&quot;]">
                        <a href="image-detail.html">
                            <figure class="pp-effect"><img class="img-fluid" src="{{ asset('front/images/19-computer.jpg') }}" alt="Computer"/>
                                <figcaption>
                                    <div class="h4">Laptop</div>
                                    <p>Computer</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="card" data-groups="[&quot;computer&quot;]">
                        <a href="image-detail.html">
                            <figure class="pp-effect"><img class="img-fluid" src="{{ asset('front/images/20-computer.jpg') }}" alt="Computer"/>
                                <figcaption>
                                    <div class="h4">Laptop</div>
                                    <p>Computer</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="card" data-groups="[&quot;computer&quot;]">
                        <a href="image-detail.html">
                            <figure class="pp-effect"><img class="img-fluid" src="{{ asset('front/images/23-computer.jpg') }}" alt="Computer"/>
                                <figcaption>
                                    <div class="h4">Laptop</div>
                                    <p>Computer</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="card" data-groups="[&quot;computer&quot;]">
                        <a href="image-detail.html">
                            <figure class="pp-effect"><img class="img-fluid" src="{{ asset('front/images/24-computer.jpg') }}" alt="Computer"/>
                                <figcaption>
                                    <div class="h4">Laptop</div>
                                    <p>Computer</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="card" data-groups="[&quot;food&quot;]">
                        <a href="image-detail.html">
                            <figure class="pp-effect"><img class="img-fluid" src="{{ asset('front/images/26-food.jpg') }}" alt="Food"/>
                                <figcaption>
                                    <div class="h4">Fruit Salad</div>
                                    <p>Food</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="card" data-groups="[&quot;food&quot;]">
                        <a href="image-detail.html">
                            <figure class="pp-effect"><img class="img-fluid" src="{{ asset('front/images/27-food.jpg') }}" alt="Food"/>
                                <figcaption>
                                    <div class="h4">Oranges</div>
                                    <p>Food</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="card" data-groups="[&quot;food&quot;]">
                        <a href="image-detail.html">
                            <figure class="pp-effect"><img class="img-fluid" src="{{ asset('front/images/28-food.jpg') }}" alt="Food"/>
                                <figcaption>
                                    <div class="h4">Lemon Tea</div>
                                    <p>Food</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="card" data-groups="[&quot;food&quot;]">
                        <a href="image-detail.html">
                            <figure class="pp-effect"><img class="img-fluid" src="{{ asset('front/images/29-food.jpg') }}" alt="Food"/>
                                <figcaption>
                                    <div class="h4">Pasta</div>
                                    <p>Food</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="card" data-groups="[&quot;food&quot;]">
                        <a href="image-detail.html">
                            <figure class="pp-effect"><img class="img-fluid" src="{{ asset('front/images/30-food.jpg') }}" alt="Food"/>
                                <figcaption>
                                <div class="h4">Burger</div>
                                <p>Food</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
    
@section('scripts')
    <script src="{{ asset('front/scripts/main.js?ver=1.2.0') }}"></script>
@endsection