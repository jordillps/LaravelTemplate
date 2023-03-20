@extends('layouts.admin')

@section('content')
<div class="content-wrapper"> 

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('global.show-about') }}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-info" href="{{ route('abouts.index') }}">{{ __('global.back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="callout callout-primary">
                            <div>
                                <strong>{{ __('global.page') }}:</strong>
                            </div>
                            {{ $about->page->name }}
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="callout callout-primary">
                                    <div>
                                        <strong>{{ __('global.name') }}:</strong>
                                    </div>
                                    {{ $about->name }}
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="callout callout-primary">
                                    <div>
                                        <strong>{{ __('global.profession') }}:</strong>
                                    </div>
                                    {{ $about->{'profession:'. app()->getLocale()} }}
                                </div>
                            </div>
                        </div>
                        <div class="callout callout-primary">
                            <div>
                                <strong>{{ __('global.about-me') }}:</strong>
                            </div>
                            {!! $about->{'about_me:'. app()->getLocale()} !!}
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="callout callout-primary">
                                    <div>
                                        <strong>{{ __('global.email') }}:</strong>
                                    </div>
                                    {{ $about->email }}
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="callout callout-primary">
                                    <div>
                                        <strong>{{ __('global.phone') }}:</strong>
                                    </div>
                                    {{ $about->phone }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <div class="callout callout-primary">
                                    <div>
                                        <strong>Html:</strong>
                                    </div>
                                    {{ $about->html }}
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="callout callout-primary">
                                    <div>
                                        <strong>Css:</strong>
                                    </div>
                                    {{ $about->css }}
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="callout callout-primary">
                                    <div>
                                        <strong>Php:</strong>
                                    </div>
                                    {{ $about->php }}
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="callout callout-primary">
                                    <div>
                                        <strong>Javascript:</strong>
                                    </div>
                                    {{ $about->javascript }}
                                </div>
                            </div>
                        </div>    
                        <div class="callout callout-primary">
                            <strong>{{ __('global.image') }}:</strong>
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
