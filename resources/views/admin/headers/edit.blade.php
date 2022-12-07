@extends('layouts.admin')

@section('template_title')
    Update Header
@endsection

@section('content')
<div class="content-wrapper">

    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Update Header</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('headers.index') }}"> Back</a>
                        </div>
                    </div>
                    @include('flash::message')
                    <div class="card-body">
                        <form method="POST" action="{{ route('headers.update', $header->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('admin.headers.form')

                        </form>
                        <hr>
                            <label for="document">Image Uploaded</label>
                            <div class="row">
                                @foreach ($header->getMedia('images') as $media)
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <form action="{{ route('headers.deleteMedia', ['media' => $media])}}" method="POST">
                                            {{ @method_field('DELETE')}}
                                            @csrf
                                            <img src="{{ $media->getUrl('thumb') }}" alt="" style="max-width: 100%; position:relative;">
                                            <button class="btn btn-danger" style="position:absolute; top:0; left:0;"><i class="far fa-trash-alt xs"></i></button>
                                        </form>
                                    </div>
                                @endforeach
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
