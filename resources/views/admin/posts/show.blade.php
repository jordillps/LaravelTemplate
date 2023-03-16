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
                            <a class="btn btn-primary" href="{{ route('posts.index') }}">{{ __('global.back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="callout callout-primary">
                            <strong>Title:</strong>
                            {{ $post->{'title:'. app()->getLocale()} }}
                        </div>
                        <div class="callout callout-primary">
                            <strong>Url:</strong>
                            {{ $post->{'url:'. app()->getLocale()} }}
                        </div>
                        <div class="callout callout-primary">
                            <strong>Excerpt:</strong>
                            {{ $post->{'excerpt:'. app()->getLocale()} }}
                        </div>
                        <div class="callout callout-primary">
                            <strong>Iframe:</strong>
                            {{ $post->{'iframe:'. app()->getLocale()} }}
                        </div>
                        <div class="callout callout-primary">
                            <strong>Body:</strong>
                            {!! $post->{'body:'. app()->getLocale()} !!}
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="callout callout-primary">
                                    <strong>Published At:</strong>
                                    {{ $post->published_at }}
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="callout callout-primary">
                                    <strong>User:</strong>
                                    {{ $post->user->name }}
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="callout callout-primary">
                                    <strong>Category:</strong>
                                    {{ $post->category->{'name:'. app()->getLocale()} }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="callout callout-primary">
                                    <strong>Tags:</strong>
                                    @foreach ($post->tags as $tag)
                                    <button type="button" class="btn btn btn-warning mr-3">{{ $tag->name }}</button>     
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="callout callout-primary">
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
