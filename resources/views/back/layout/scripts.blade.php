<script src="{{ asset('back/vendors/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('back/vendors/popper.js/dist/umd/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('back/vendors/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('back/vendors/metisMenu/dist/metisMenu.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('back/vendors/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('back/vendors/chart.js/dist/Chart.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('back/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('back/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}" type="text/javascript"></script>
<script src="{{ asset('back/vendors/jvectormap/jquery-jvectormap-us-aea-en.js') }}" type="text/javascript"></script>
<script src="{{ asset('back/js/app.js') }}" type="text/javascript"></script>

<script src="{{ asset('back/vendors/toastr/toastr.min.js') }}" type="text/javascript"></script>

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
