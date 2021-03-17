@extends('back.layout.app')

@section('meta')
@endsection

@section('title')
    Notification
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-heading">
        <h1 class="page-title">Notification</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.home') }}"><i class="fa fa-home font-20"></i></a>
            </li>
            <li class="breadcrumb-item">Notification</li>
        </ol>
    </div>
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Notification View</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>                            
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form action="{{ url('admin/notification-status') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$notification->id}}">
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Name</label>
                                    <input class="form-control" name="name" type="text" placeholder="First Name" value="{{ $notification->name ?? '' }}" disabled>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Email</label>
                                    <input class="form-control" name="email" type="text" placeholder="Email" value="{{ $notification->email ?? '' }}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Subject</label>
                                <input class="form-control" type="text" name="subject" placeholder="Subject" value="{{ $notification->subject ??'' }}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea name="message" class="form-control" disabled>{{ $notification->message ??'' }}</textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Read & Close</button>
                                <a href="{{  url()->previous() }}"><button class="btn btn-default" type="button">Close</button></a>
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