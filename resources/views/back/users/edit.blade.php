@extends('back.layout.app')

@section('meta')
@endsection

@section('title')
    Edit User
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-heading">
        <h1 class="page-title">Edit User</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.home') }}"><i class="fa fa-home font-20"></i></a>
            </li>
            <li class="breadcrumb-item">Edit User</li>
        </ol>
    </div>
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Edit User</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form action="{{ route('admin.users.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $users->id }}">
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>First Name</label>
                                    <input class="form-control" name="firstname" value="{{ $users->firstname ?? '' }}" type="text" placeholder="First Name">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Last Name</label>
                                    <input class="form-control" name="lastname" value="{{ $users->lastname ?? ''}}" type="text" placeholder="First Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" value="{{ $users->email ?? ''}}" type="text" placeholder="Email address">
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <img src="{{ url('back/img' ,$users->image ??'') }}" alt="">
                            </div>
                            
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <a href="{{  url()->previous() }}" title=""><button class="btn btn-default" type="button">Back</button></a>
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