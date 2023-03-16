@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">

        @include('admin.partials.header')

        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-left">
                                <span class="card-title">Show User</span>
                            </div>
                            <div class="float-right">
                                <a class="btn btn-primary" href="{{ route('users.index') }}">{{ __('global.back') }}</a>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="callout callout-primary">
                                                <strong>Name:</strong>
                                                {{ $user->name }}
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="callout callout-primary">
                                                <strong>Role:</strong>
                                                {{ $user->role->name }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="callout callout-primary">
                                                <strong>Email:</strong>
                                                {{ $user->email }}
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="callout callout-primary">
                                                <strong>Date of Birth:</strong>
                                                {{ Carbon\Carbon::parse($user->date_birth)->format('d-m-Y') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-primary card-outline">
                                        <div class="card-body box-profile">
                                          <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle" src="{{ $user->getMedia('images')[0]->getUrl() }}" alt="User profile picture">
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
