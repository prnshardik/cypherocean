@extends('back.layout.app')

@section('meta')
@endsection

@section('title')
    Portfolio Edit
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
                        <div class="ibox-title">Portfolio Edit</div>
                    </div>
                    <div class="ibox-body">
                        <form action="{{ route('admin.portfolio.update') }}" name="form" id="form" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="id" value="{{ $portfolio->id }}">
                            
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="portfolio_category_id">Portfolio Category</label>
                                    <select name="portfolio_category_id" id="portfolio_category_id" class="form-control">
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
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Plese enter name" value="{{ $portfolio->name ??'' }}">
                                    <span class="kt-form__help error name"></span>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="form-control" id="description" placeholder="Please enter description" rows="5" cols="10">{{ $portfolio->description ??'' }}</textarea>
                                    <span class="kt-form__help error description"></span>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="cover_image">Cover Image</label>
                                    <input type="file" class="form-control dropify" id="cover_image" name="cover_image" data-allowed-file-extensions="jpg png jpeg" data-default-file="{{ url('back/uploads/portfolio/' ,$portfolio->image) }}" data-max-file-size-preview="2M">
                                    <span class="kt-form__help error cover_image"></span>
                                </div>

                                <div class="form-group col-sm-12">
                                    <label for="other_image">Other Images</label>
                                    <input type="file" class="form-control dropify" id="other_image" name="other_image[]" data-allowed-file-extensions="jpg png jpeg" data-default-file="{{ url('back/uploads/portfolio/' ,$portfolio_images[0]->image) }}" data-max-file-size-preview="2M" multiple>
                                    <span class="kt-form__help error other_image"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('admin.portfolio') }}" class="btn btn-secondary">Cancel</a>
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
    <script src="{{ asset('back/js/promise.min.js') }}"></script>
    <script src="{{ asset('back/js/sweetalert2.bundle.js') }}"></script>

    <script>
        $(document).ready(function(){
            $('#cover_image').dropify({
                messages: {
                    'default': 'Drag and drop cover image here or click',
                    'remove':  'Remove',
                    'error':   'Ooops, something wrong happended.'
                }
            });

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

            var drEvent = $('#other_image').dropify();

            var dropifyElements = {};
            $('#other_image').each(function () {
                dropifyElements[this.id] = true;
            });

            drEvent.on('dropify.beforeClear', function(event, element){
                id = event.target.id;
                if(!dropifyElements[id]){
                    var url = "{!! route('admin.portfolio.image.remove') !!}";
                    <?php if(isset($data) && isset($data->id)){ ?>
                        var id_encoded = "{{ base64_encode($data->id) }}";

                        Swal.fire({
                            title: 'Are you sure want delete this image?',
                            text: "",
                            type: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes'
                        }).then(function (result){
                            if (result.value){
                                $.ajax({
                                    url: url,
                                    type: "POST",
                                    data:{
                                        id: id_encoded,
                                        _token: "{{ csrf_token() }}"
                                    },
                                    dataType: "JSON",
                                    success: function (data){
                                        if(data.code == 200){
                                            Swal.fire('Deleted!', 'Deleted Successfully.', 'success');
                                            dropifyElements[id] = true;
                                            element.clearElement();
                                        }else{
                                            Swal.fire('', 'Failed to delete', 'error');
                                        }
                                    },
                                    error: function (jqXHR, textStatus, errorThrown){
                                        Swal.fire('', 'Failed to delete', 'error');
                                    }
                                });
                            }
                        });

                        return false;
                    <?php } else { ?>
                        Swal.fire({
                            title: 'Are you sure want delete this image?',
                            text: "",
                            type: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes'
                        }).then(function (result){
                            if (result.value){
                                Swal.fire('Deleted!', 'Deleted Successfully.', 'success');
                                dropifyElements[id] = true;
                                element.clearElement();
                            }else{
                                Swal.fire('Cancelled', 'Discard Last Operation.', 'error');
                            }
                        });
                        return false;
                    <?php } ?>
                } else {
                    dropifyElements[id] = false;
                    return true;
                }
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
