<!DOCTYPE html>
<html lang="en">

<head>
    @include('back.layout.meta')

    <title>{{ _site_title() }} | @yield('title') </title>
    
    @include('back.layout.styles')
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        @include('back.layout.header')

        @include('back.layout.sidebar')

        <div class="content-wrapper">
            @yield('content')

            @include('back.layout.footer')
        </div>
    </div>

    @include('back.layout.theme-config')

    <div class="sidenav-backdrop backdrop"></div>

    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>

    @include('back.layout.scripts')

</body>
</html>