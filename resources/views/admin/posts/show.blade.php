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
                            <span class="card-title">Show Post</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $post->title }}
                        </div>
                        <div class="form-group">
                            <strong>Url:</strong>
                            {{ $post->url }}
                        </div>
                        <div class="form-group">
                            <strong>Excerpt:</strong>
                            {{ $post->excerpt }}
                        </div>
                        <div class="form-group">
                            <strong>Iframe:</strong>
                            {{ $post->iframe }}
                        </div>
                        <div class="form-group">
                            <strong>Body:</strong>
                            {{ $post->body }}
                        </div>
                        <div class="form-group">
                            <strong>Published At:</strong>
                            {{ $post->published_at }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $post->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Category Id:</strong>
                            {{ $post->category_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
