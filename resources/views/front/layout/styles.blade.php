
<link href="{{ asset('front/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<link href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('front/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
<link href="{{ asset('front/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('front/vendor/line-awesome/css/line-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('front/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="{{ asset('front/css/style.css') }}" rel="stylesheet">

<link href="{{ asset('front/vendor/toastr/toastr.min.css') }}" rel="stylesheet" />

<style>
.carousel-control-next-icon,
.carousel-control-prev-icon {
  filter: invert(1);
}
	@media only screen and (max-width:767px){
        form{
            margin:10px;    
        }   
    }

    #full_stars_example_two{

    }
    
    .rating-group{
        display: inline-flex;
    }
    
    /* make hover effect work properly in IE */
    .rating__icon {
        pointer-events: none;
    }
    
    /* hide radio inputs */
    .rating__input {
        position: absolute !important;
        left: -9999px !important;
    }
    
    /* set icon padding and size */
    .rating__label {
        cursor: pointer;
        padding: 0 0.1em;
        font-size: 2rem;
    }
    
    /* set default star color */
    .rating__icon--star {
        color: orange;
    }

    /* if any input is checked, make its following siblings grey */
    .rating__input:checked ~ .rating__label .rating__icon--star {
        color: #ddd;
    }
    
    /* make all stars orange on rating group hover */
    .rating-group:hover .rating__label .rating__icon--star {
        color: orange;
    }

    /* make hovered input's following siblings grey on hover */
    .rating__input:hover ~ .rating__label .rating__icon--star {
        color: #ddd;
    }

    .error {
        color: red;
    }

    .portfolio-blue{
        background: rgb(2,0,36);
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
    }
</style>
@yield('styles')
