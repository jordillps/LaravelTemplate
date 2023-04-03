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
                <li><a href="https://www.facebook.com/">FACEBOOK</a></li>
                <li><a href="https://twitter.com/">TWITTER</a></li>
                <li><a href="https://www.linkedin.com/">LINKEDIN</a></li>
            </ul>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center justify-content-end p-0">
                    <div class="hero-content">
                        <h1>Jordi Llobet <span class="red">{{ __('web.developer') }}</span>
                            <span>WEB Freelance</span></h1>
                        <div class="mb-5">
                            <ul>
                                <li><img src="{{ asset('img/web/home/check-white.png') }}" alt=""><h5>{{ __('web.web-sites-manageables') }}</h5></li>
                                <li><img src="{{ asset('img/web/home/check-white.png') }}" alt=""><h5>{{ __('web.web-applications') }}</h5></li>
                                <li><img src="{{ asset('img/web/home/check-white.png') }}" alt=""><h5>{{ __('web.other-web-projects') }}</h5></li>
                            </ul>
                        </div>
                        <a class="eg-btn btn--primary btn--lg" href="{{ route('about-me') }}">{{ __('web.about-me') }}</a>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="hero-img">
                        <img class="img-fluid" src="{{ asset('img/web/home/jordi.webp') }}" alt="">
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
                        <a class="eg-btn btn--primary btn--lg" href="{{ route('services') }}">{{ __('web.services-description') }}</a>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                @foreach ($services as $service)
                    <div class="col-md-6 col-lg-4 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="services-wrrap">
                            <div class="services-top d-flex justify-content-between align-items-center">
                                <div class="icon">
                                    <img src="{{ asset('img/web/icons/'. $service->icon) }}" alt="" width="60">
                                </div>
                                <h2>{{ $loop->index + 1 }}</h2>
                            </div>
                            <div class="content">
                                <h3>{{ $service->{'title:'. app()->getLocale()} }}</h3>
                                <p>{{ $service->{'text:'. app()->getLocale()} }}</p>
                            </div>
                            <div class="read-more-btn d-flex justify-content-end">
                                <a href="{{ route('services') }}">{{ __('web.read-more') }}
                                    <span><img src="{{ asset('img/web/icons/arrow-right.svg') }}" alt=""></span>
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
                            <span>My Portfolio</span>
                            <h2>Creative Works.</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="work-item d-flex justify-content-center">
                        <div class="item all web  wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="works-wrrap style-1">
                                <div class="works-img">
                                    <img class="big-img" src="{{ asset('img/web/home/work-1.png') }}" alt="">
                                </div>
                                <div class="overlay">
                                    <div class="sl-number">
                                        <h2>01</h2>
                                    </div>
                                    <div class="content">
                                        <span>Software</span>
                                        <h3>Desktop Mockup</h3>
                                    </div>
                                    <div class="case-button">
                                        <a href="{{ route('projects') }}">Case Study</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item all app wow animate fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="works-wrrap style-1 style-2">
                                <div class="works-img">
                                    <img src="{{ asset('img/web/home/work-2.png') }}" alt="">
                                </div>
                                <div class="overlay">
                                    <div class="sl-number">
                                        <h2>02</h2>
                                    </div>
                                    <div class="content">
                                        <span>Software</span>
                                        <h3>Desktop Mockup</h3>
                                    </div>
                                    <div class="case-button">
                                        <a href="{{ route('projects') }}">Case Study</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-50">
                <div class="col-12 d-flex justify-content-center wow animate fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="view-all-btn">
                        <a class="eg-btn btn--primary btn--lg" href="{{ route('projects') }}">VIEW ALL</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== Home One Works End============= -->
@endsection