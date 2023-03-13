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
                            <span class="card-title">Show Project</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('projects.index') }}"> Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="callout callout-primary">
                            <strong>Title:</strong>
                            {{ $project->{'title:'. app()->getLocale()} }}
                        </div>
                        <div class="callout callout-primary">
                            <strong>Text:</strong>
                            {{ $project->{'text:'. app()->getLocale()} }}
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="callout callout-primary">
                                    <strong>Published At:</strong>
                                    {{ $project->published_at }}
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="callout callout-primary">
                                    <strong>Category:</strong>
                                    {{ $project->category->name }}
                                </div>
                            </div>
                        </div>
                        <div class="callout callout-primary">
                            <strong>Pictures:</strong>
                            <div class="row">
                                @foreach ($project->getMedia('images') as $media)
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
