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
                            <strong>User:</strong>
                            {{ $post->user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Category:</strong>
                            {{ $post->category->name }}
                        </div>
                        <div class="form-group">
                            <strong>Pictures:</strong>
                            <div class="row">
                                @foreach ($post->getMedia('images') as $media)
                                    <div class="col-12 col-md-4 col-lg-2">
                                        <img src="{{ $media->getUrl() }}" alt="" style="max-width: 100%;">
                                    </div>
                                @endforeach
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
