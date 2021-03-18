@extends('back.layout.app')

@section('meta')
@endsection

@section('title')
    Review
@endsection

@section('styles')
    <style>
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
      }
    </style>
@endsection

@section('content')
    <div class="page-heading">
        <h1 class="page-title">Review</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.home') }}"><i class="fa fa-home font-20"></i></a>
            </li>
            <li class="breadcrumb-item">Review</li>
        </ol>
    </div>
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Review View</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>                            
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form action="{{ url('admin/review-update') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$review->id}}">
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Name</label>
                                    <input class="form-control" name="name" type="text" placeholder="First Name" value="{{ $review->name ?? '' }}">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Email</label>
                                    <input class="form-control" name="email" type="text" placeholder="Email" value="{{ $review->email ?? '' }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Stars</label>
                                <div id="full_stars_example_two">
                                    <div class="rating-group">
                                      <label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                      
                                      <input class="rating__input" <?=($review->star == '1' ?'checked' :'')?> name="rating3" id="rating3-1" value="1" type="radio">
                                      

                                      <label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                      
                                      <input class="rating__input" <?=($review->star == '2' ?'checked' :'')?> name="rating3" id="rating3-2" value="2" type="radio">
                                      

                                      <label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                      
                                      <input class="rating__input" <?=($review->star == '3' ?'checked' :'')?> name="rating3" id="rating3-3" value="3" type="radio">
                                      

                                      <label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                      
                                      <input class="rating__input" <?=($review->star == '4' ?'checked' :'')?> name="rating3" id="rating3-4" value="4" type="radio">
                                      

                                      <label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                      
                                      <input class="rating__input" <?=($review->star == '5' ?'checked' :'')?> name="rating3" id="rating3-5" value="5" type="radio">
                                  </div>
                            </div>
                            <div class="form-group">
                                <label>Feedback</label>
                                <textarea name="feedback" class="form-control">{{ $review->feedback ??'' }}</textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <a href="{{  url()->previous() }}"><button class="btn btn-default" type="button">Back</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection