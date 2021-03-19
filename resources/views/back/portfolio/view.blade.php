@extends('back.layout.app')

@section('meta')
@endsection

@section('title')
    Portfolio View
@endsection

@section('styles')
    <link href="{{ asset('back/css/dropify.min.css') }}" rel="stylesheet">
    <link href="{{ asset('back/css/sweetalert2.bundle.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="page-heading">
        <h1 class="page-title">Portfolios</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.home') }}"><i class="fa fa-home font-20"></i></a>
            </li>
            <li class="breadcrumb-item">Portfolio</li>
        </ol>
    </div>
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Portfolio View</div>
                    </div>
                    <div class="ibox-body">
                        <form name="form" id="form" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="portfolio_category_id">Portfolio Category</label>
                                    <select name="portfolio_category_id" id="portfolio_category_id" class="form-control" disabled>
                                        <option value="" hidden>Select Portfolio Category</option>
                                        @if(isset($portfolio_categories) && $portfolio_categories->isNotEmpty())
                                            @foreach($portfolio_categories AS $row)
                                                <option value="{{ $row->id }}" <?=(isset($portfolio) && $portfolio->cat_id == $row->id ? 'selected':'')?>>{{ $row->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <span class="kt-form__help error portfolio_category_id"></span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Plese enter name" value="{{ $portfolio->name ??'' }}" disabled>
                                    <span class="kt-form__help error name"></span>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="form-control" id="description" placeholder="Please enter description" rows="5" cols="10" disabled>{{ $portfolio->description ??'' }}</textarea>
                                    <span class="kt-form__help error description"></span>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="cover_image">Cover Image</label>
                                    <input type="file" class="dropify"id="cover_image" data-default-file="{{ url('back/uploads/portfolio/' ,$portfolio->image) }}" disabled="disabled">
                                    <span class="kt-form__help error cover_image"></span>
                                </div>

                                <div class="form-group col-sm-12">
                                    <label for="other_image">Other Images</label>
                                    <input type="file" class="dropify" id="other_image"data-default-file="{{ url('back/uploads/portfolio/' ,$portfolio_images[0]->image) }}" disabled="disabled">
                                    <span class="kt-form__help error other_image"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <a href="{{ route('admin.portfolio') }}" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('back/js/dropify.min.js') }}"></script>
    <script src="{{ asset('back/js/promise.min.js') }}"></script>disabled
    <script src="{{ asset('back/js/sweetalert2.bundle.js') }}"></script>

    <script>
        $(document).ready(function(){
            $('#cover_image').dropify();

            var drEvent = $('#cover_image').dropify();

            var dropifyElements = {};
            $('#cover_image').each(function () {
                dropifyElements[this.id] = false;
            });

            $('#other_image').dropify({
                messages: {
                    'default': 'Drag and drop other images here or click',
                    'remove':  'Remove',
                    'error':   'Ooops, something wrong happended.'
                }
            });

            var drEvent1 = $('#other_image').dropify();

            var dropifyElements = {};
            $('#other_image').each(function () {
                dropifyElements[this.id] = true;
            });

        });
    </script>

    <script>
        $(document).ready(function () {
            var form = $('#form');
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
@endsection
