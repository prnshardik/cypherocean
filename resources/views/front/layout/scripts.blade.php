<script src="{{ asset('front/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('front/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('front/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('front/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('front/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/vendor/jquery-sticky/jquery.sticky.js') }}"></script>

<script src="{{ asset('front/js/main.js') }}"></script>

<script src="{{ asset('front/vendors/toastr/toastr.min.js') }}" type="text/javascript"></script>

<script>
    @php
        $success = '';
        if(\Session::has('success'))
            $success = \Session::get('success');

        $error = '';
        if(\Session::has('error'))
            $error = \Session::get('error');
    @endphp

    var success = "{{ $success }}";
    var error = "{{ $error }}";

    if(success != ''){ toastr.success(success, 'Success'); }

    if(error != ''){ toastr.error(error, 'error'); }
</script>

@yield('scripts')
