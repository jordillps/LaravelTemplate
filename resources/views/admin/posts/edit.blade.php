@extends('layouts.admin')

@section('template_title')
    Update Post
@endsection

@section('content')
    <div class="content-wrapper">    
        @include('admin.partials.header')
        <section class="content container-fluid">
            <div class="">
                <div class="col-md-12">

                    @includeif('partials.errors')

                    <div class="card card-default">
                        <div class="card-header">
                            <div class="float-left">
                                <span class="card-title">Update User</span>
                            </div>
                            <div class="float-right">
                                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('posts.update', $post->id) }}"  role="form" enctype="multipart/form-data">
                                {{ method_field('PATCH') }}
                                @csrf

                                @include('admin.posts.form')

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
