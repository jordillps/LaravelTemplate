@extends('layouts.admin')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Create Page</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pages.index') }}">{{ __('global.back') }}</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('pages.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('admin.pages.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
