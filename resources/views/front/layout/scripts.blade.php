<script src="{{ asset('front/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('front/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('front/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('front/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('front/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/vendor/jquery-sticky/jquery.sticky.js') }}"></script>

<script src="{{ asset('front/js/main.js') }}"></script>

<script src="{{ asset('front/vendor/toastr/toastr.min.js') }}" type="text/javascript"></script>

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

<script>
    $(document).ready(function (e) {
        var form = $('#review_store');
        $('.kt-form__help').html('');
        form.submit(function(e) {
            $('.help-block').html('');
            $('.m-form__help').html('');
            $.ajax({
                url : form.attr('action'),
                type : form.attr('method'),
                data : form.serialize(),
                dataType: 'json',
                async:false,
                success : function(json){
                    return true;
                },
                error: function(json){
                    if(json.status === 422) {
                        e.preventDefault();
                        var errors_ = json.responseJSON;
                        $('.kt-form__help').html('');
                        $.each(errors_.errors, function (key, value) {
                            $('.'+key).html(value);
                        });
                    }
                }
            });
        });
    });
</script>

@yield('scripts')
