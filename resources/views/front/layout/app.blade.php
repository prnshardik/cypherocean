<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.layout.meta')

    <title>CypherOcean - @yield('title')</title>

    <link href="{{ asset('images/fevicon.png') }}" rel="icon">

    @include('front.layout.styles')
</head>

<body>

    @include('front.layout.header')

    @yield('hero')

    <main id="main">
        @yield('content')
    </main>

    @include('front.layout.footer')

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    @include('front.layout.scripts')
</body>
</html>
