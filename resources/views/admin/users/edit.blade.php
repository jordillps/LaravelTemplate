@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        
    @include('admin.partials.header')

        <section class="content container-fluid">
            <div class="col-sm-12">
                @includeif('partials.errors')
                <div class="card card-default">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Update User</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('users.index') }}">{{ __('global.back') }}</a>
                        </div>
                    </div>
                    @include('flash::message')
                    <div class="card-body">
                        <form method="POST" action="{{ route('users.update', $user->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            @include('admin.users.form')
                        </form>
                    </div>
                </div>
                @if($user->isAdmin())
                    <div class="card card-default">
                        <div class="card-header">
                            <div class="float-left">
                                <span class="card-title">Update Password</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('users.changePassword') }}"  role="form" enctype="multipart/form-data">
                                {{ method_field('POST') }}
                                @csrf
                                <div class="box box-info padding-1">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    {{ Form::label('current password') }}
                                                    {{ Form::password('current_password', ['class' => 'form-control' . ($errors->has('current_password') ? ' is-invalid' : ''), 'placeholder' => 'Current Password']) }}
                                                    {!! $errors->first('current_password', '<div class="invalid-feedback">:message</div>') !!}
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    {{ Form::label('new password') }}
                                                    {{ Form::password('new_password', ['class' => 'form-control' . ($errors->has('new_password') ? ' is-invalid' : ''), 'placeholder' => 'New Password']) }}
                                                    {!! $errors->first('new_password', '<div class="invalid-feedback">:message</div>') !!}
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    {{ Form::label('confirm new password') }}
                                                    {{ Form::password('new_confirm_password', ['class' => 'form-control' . ($errors->has('new_confirm_password') ? ' is-invalid' : ''), 'placeholder' => 'Confirm New Password']) }}
                                                    {!! $errors->first('new_confirm_password', '<div class="invalid-feedback">:message</div>') !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer mt20">
                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </section>
    </div>
@endsection
