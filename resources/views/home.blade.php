@extends('layouts.app')

@push('styles')
  
@endpush

@section('seo')
    <!-- SEO meta -->
    {!! SEOMeta::generate() !!}
    <!-- SEO Open Graph -->
    {!! OpenGraph::generate() !!}
    <!-- SEO Twitter -->
    {!! Twitter::generate() !!}
    <!-- SEO Json-Ld -->
    {!! JsonLd::generate() !!}
@endsection

@section('content')

     <!-- ========== Home One Menu Start============= -->
     <div class="hero-style1 mb-120">
        <div class="social-area">
            <ul>
                <li><a href="{{ $setting->facebook_url }}" target="blank" aria-label="facebook">FACEBOOK</a></li>
                <li><a href="{{ $setting->twitter_url }}" target="blank" aria-label="twitter">TWITTER</a></li>
                <li><a href="{{ $setting->linkedin_url }}" target="blank" aria-label="linkedin">LINKEDIN</a></li>
            </ul>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center justify-content-end p-0">
                    <div class="hero-content">
                        <h1>{{ $header->title }}
                        <span>{{ $header->{'text:'. app()->getLocale()} }}</span>
                        <span>WEB Freelance</span></h1>
                        <div class="mb-5">
                            <ul>
                                <li><img src="{{ asset('img/web/home/check-white.png') }}" alt="{{ __('web.web-sites-manageables') }}" title="{{ __('web.web-sites-manageables') }}"><p class="h5">{{ __('web.web-sites-manageables') }}</p></li>
                                <li><img src="{{ asset('img/web/home/check-white.png') }}" alt="{{ __('web.web-applications') }}" title="{{ __('web.web-applications') }}"><p class="h5">{{ __('web.web-applications') }}</p></li>
                                <li><img src="{{ asset('img/web/home/check-white.png') }}" alt="{{ __('web.other-web-projects') }}" title="{{ __('web.other-web-projects') }}"><p class="h5">{{ __('web.other-web-projects') }}</p></li>
                            </ul>
                        </div>
                        <a class="eg-btn btn--primary btn--lg" href="{{ route('about-me') }}" aria-label="{{ __('web.about-me') }}">{{ __('web.about-me') }}</a>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="hero-img">
                        @foreach ($header->getMedia('images') as $media)
                            <img class="img-fluid" src="{{ $media->getUrl() }}" alt="web developer freelance" title="web developer freelance">                 
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== Home One Menu End============= -->

    <!-- ========== Home One Services Start============= -->
    <div class="home-one-services mb-100">
        <div class="container">
            <div class="row mb-75">
                <div class="col-md-12 d-flex justify-content-between align-items-center flex-wrap wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="section-title1">
                        <span>{{ __('web.what-i-do') }}</span>
                        <h2>{{ __('web.myservices') }}</h2>
                    </div>
                    <div class="view-all-btn">
                        <a class="eg-btn btn--primary btn--lg" href="{{ route('services') }}" aria-label="{{ __('web.services-description') }}">{{ __('web.services-description') }}</a>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                @foreach ($services as $service)
                    <div class="col-md-6 col-lg-4 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="services-wrrap">
                            <div class="services-top d-flex justify-content-between align-items-center">
                                <div class="icon">
                                    <img src="{{ asset('img/web/icons/'. $service->icon) }}" alt="{{ $service->{'title:'. app()->getLocale()} }}" title="{{ $service->{'title:'. app()->getLocale()} }}" width="60">
                                </div>
                                <h2>{{ $loop->index + 1 }}</h2>
                            </div>
                            <div class="content">
                                <h3>{{ $service->{'title:'. app()->getLocale()} }}</h3>
                                <p>{{ $service->{'text:'. app()->getLocale()} }}</p>
                            </div>
                            @if(count($service->getMedia('images'))>0)
                                <div class="services-technologies">
                                    @foreach($service->getMedia('images') as $media)
                                        @if($loop->index != 0)
                                            <img src="{{ $media->getUrl() }}" alt="lenguajes de programacion web" title="lenguajes de programacion web" width="50">
                                        @endif
                                    @endforeach
                                </div>
                            @endif
                            <div class="read-more-btn d-flex justify-content-end mt-3">
                                <a href="{{ route('services') }}" aria-label="{{ __('web.services-description') }}">{{ __('web.read-more') }}
                                    <span><img src="{{ asset('img/web/icons/arrow-right.svg') }}" alt="{{ $service->{'title:'. app()->getLocale()} }}" title="{{ $service->{'title:'. app()->getLocale()} }}"></span>
                                </a>
                            </div>
                        </div>
                    </div> 
                @endforeach
            </div>
        </div>
    </div>
    <!-- ========== Home One Services End============= -->

    <!-- ========== Home One Works Start============= -->
    <div class="work-area mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="works-top d-flex justify-content-between align-items-center flex-wrap wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="section-title1">
                            <span>{{ __('web.my-portfolio') }}</span>
                            <h2>{{ __('web.my-web-projects') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="work-item d-flex justify-content-center">
                        @foreach ($projects as $project)
                            <div class="item all web  wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <div class="works-wrrap style-1 services-wrrap">
                                    <div class="works-header">
                                        <h3>{{ $project->category->{'name:'. app()->getLocale()} }}</h3>
                                    </div>
                                    @if(count($project->getMedia('images'))>0)
                                        <div class="works-img">
                                            <img class="big-img" src="{{ $project->getMedia('images')[0]->getUrl() }}" alt="{{ $project->title }}" title="{{ $project->title }}">
                                        </div>
                                    @endif
                                    <div class="overlay">
                                        <div class="sl-number">
                                            <h2>  {{ '0'. $loop->index + 1 }}</h2>
                                        </div>
                                        <div class="content">
                                            <h3>{{ $project->title }}</h3>
                                        </div>
                                        <div class="case-button">
                                            <a href="{{ route('projects') }}" aria-label="{{ $project->title }}">{{ __('web.read-more') }}</a>
                                        </div>
                                    </div>
                                    <div class="read-more-btn d-flex justify-content-end d-lg-none">
                                        <a href="{{ route('services') }}" aria-label="{{ $project->title }}">{{ __('web.read-more') }}
                                            <span><img src="{{ asset('img/web/icons/arrow-right.svg') }}" alt="{{ $project->title }}" title="{{ $project->title }}"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>  
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row pt-50">
                <div class="col-12 d-flex justify-content-center wow animate fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="view-all-btn">
                        <a class="eg-btn btn--primary btn--lg" href="{{ route('projects') }}" aria-label="{{ __('web.view-all') }}">{{ __('web.view-all') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== Home One Works End============= -->
@endsection