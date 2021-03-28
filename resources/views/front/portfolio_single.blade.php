@extends('front.layout.app')

@section('meta')
@endsection

@section('title')
    Portfolio Details
@endsection

@section('styles')
<style>
    .multi-item-carousel{
  .carousel-inner{
    > .item{
      transition: 500ms ease-in-out left;
    }
    .active{
      &.left{
        left:-33%;
      }
      &.right{
        left:33%;
      }
    }
    .next{
      left: 33%;
    }
    .prev{
      left: -33%;
    }
    @media all and (transform-3d), (-webkit-transform-3d) {
      > .item{
        // use your favourite prefixer here
        transition: 500ms ease-in-out left;
        transition: 500ms ease-in-out all;
        backface-visibility: visible;
        transform: none!important;
      }
    }
  }
  .carouse-control{
    &.left, &.right{
      background-image: none;
    }
  }
}

// non-related styling:
body{
  background: #333;
  color: #ddd;
}
h1{
  color: white;
  font-size: 2.25em;
  text-align: center;
  margin-top: 1em;
  margin-bottom: 2em;
  text-shadow: 0px 2px 0px rgba(0, 0, 0, 1);
}
</style>
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
    <section class="section pb-0">
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-content">

            <div class="row mb-5">

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php $i = 0; ?>
                        @foreach($portfolio_images AS $pi)
                            <?php echo $i; ?>
                            <li data-target="#myCarousel" data-slide-to="{{ $i }}"></li>
                            <?php $i++; ?>
                        @endforeach
                    </ol>

                    <div class="carousel-inner">
                        @foreach($portfolio_images AS $pi)
                            <div class="item">
                                <img src="{{ asset('back/uploads/portfolio/'.$pi->image) }}" alt="{{ $pi->image }}" style="width:100%;">
                            </div>
                        @endforeach
                    </div>

                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <!-- foreach($portfolio_images AS $pi) -->
                    <!-- <div class="col-md-6">
                        <figure><img src="{{ asset('back/uploads/portfolio/'.$pi->image) }}" alt="Free Website Template by Free-Template.co" class="img-fluid">
                          <figcaption>{{ $pi->image }}</figcaption>
                        </figure>
                    </div> -->
                <!-- endforeach -->
                  

            </div>



          </div>
          <div class="col-md-4 sidebar">
            <div class="sidebar-box">
              <h3>About The Project</h3>
              <p>{{ $portfolio->description }}</p>
            </div>

           
          </div>
        </div>
      </div>
    </section>
<section class="section"></section>
@endsection
    
@section('scripts')
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection