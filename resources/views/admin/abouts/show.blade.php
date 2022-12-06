@extends('layouts.admin')

@section('content')
<div class="content-wrapper"> 

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show About</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('abouts.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="callout callout-primary">
                            <strong>Page:</strong>
                            {{ $about->page->name }}
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="callout callout-primary">
                                    <strong>Name:</strong>
                                    {{ $about->name }}
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="callout callout-primary">
                                    <strong>Profession:</strong>
                                    {{ $about->{'profession:'. app()->getLocale()} }}
                                </div>
                            </div>
                        </div>
                        <div class="callout callout-primary">
                            <strong>About Me:</strong>
                            {!! $about->{'about_me:'. app()->getLocale()} !!}
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="callout callout-primary">
                                    <strong>Email:</strong>
                                    {{ $about->email }}
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="callout callout-primary">
                                    <strong>Phone:</strong>
                                    {{ $about->phone }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <div class="callout callout-primary">
                                    <strong>Html:</strong>
                                    {{ $about->html }}
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="callout callout-primary">
                                    <strong>Css:</strong>
                                    {{ $about->css }}
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="callout callout-primary">
                                    <strong>Php:</strong>
                                    {{ $about->php }}
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="callout callout-primary">
                                    <strong>Javascript:</strong>
                                    {{ $about->javascript }}
                                </div>
                            </div>
                        </div>    
                        <div class="callout callout-primary">
                            <strong>Picture:</strong>
                            <div class="row p-3">
                                @foreach ($about->getMedia('images') as $media)
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <img src="{{ $media->getUrl('thumb') }}" alt="" style="max-width: 100%;">
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
