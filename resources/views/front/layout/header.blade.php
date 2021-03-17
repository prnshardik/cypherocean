<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<header class="site-navbar js-sticky-header site-navbar-target" role="banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6 col-lg-2">
                <h1 class="mb-0 site-logo">
                    <a href="{{ route('index') }}" class="mb-0">
                        <img src="{{ url('front/images/logo.png') }}" alt="">
                    </a>
                </h1>
            </div>
            <div class="col-12 col-md-10 d-none d-lg-block">
                @include('front.layout.menu')
            </div>
            <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">
                <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
                    <span></span>
                </a>
            </div>
        </div>
    </div>
</header>

@include('front.layout.hero')