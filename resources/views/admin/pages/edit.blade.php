@extends('layouts.admin')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Update Page</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pages.index') }}"> Back</a>
                        </div>
                    </div>

                    @include('flash::message')
                    <div class="card-body">
                        <form method="POST" action="{{ route('pages.update', $page->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('admin.pages.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
