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
                <li><a href="https://twitter.com/">TWITEER</a></li>
                <li><a href="https://www.linkedin.com/">LINKEDIN</a></li>
            </ul>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center justify-content-end p-0">
                    <div class="hero-content">
                        <h1 >Jordi Llobet <span class="red">Desenvolupador</span> <span>Web Freelance</span> </h1>
                        <ul>
                            <li>Pàgines web administrables</li>
                            <li>Aplicacions web</li>
                            <li>Maquetació web</li>
                        </ul>
                        
                        <a class="eg-btn btn--primary btn--lg" href="about.html">About Me</a>
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
                        <span>What I Do</span>
                        <h2>My Services.</h2>
                    </div>
                    <div class="view-all-btn">
                        <a class="eg-btn btn--primary btn--lg" href="services.html">VIEW ALL</a>
                    </div>
                    
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="services-wrrap">
                        <div class="services-top d-flex justify-content-between align-items-center">
                            <div class="icon">
                                <img src="{{ asset('img/web/icons/web-design.svg') }}" alt="web-design">
                            </div>
                            <h2>01</h2>
                        </div>
                        <div class="content">
                            <h3>Web <br>
                                Devlopment.</h3>
                        </div>
                        <div class="read-more-btn d-flex justify-content-end">
                            <a href="services-details.html">Read More <span><img src="{{ asset('img/web/icons/arrow-right.svg') }}" alt=""></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow animate fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="services-wrrap">
                        <div class="services-top d-flex justify-content-between align-items-center">
                            <div class="icon">
                                <img src="{{ asset('img/web/icons/graphic-design.svg') }}" alt="web-design">
                            </div>
                            <h2>02</h2>
                        </div>
                        <div class="content">
                            <h3>Graphic<br>
                                Design.</h3>
                        </div>
                        <div class="read-more-btn d-flex justify-content-end">
                            <a href="services-details.html">Read More <span><img src="{{ asset('img/web/icons/arrow-right.svg') }}" alt=""></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow animate fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="services-wrrap">
                        <div class="services-top d-flex justify-content-between align-items-center">
                            <div class="icon">
                                <img src="{{ asset('img/web/icons/coding.svg') }}" alt="web-design">
                            </div>
                            <h2>03</h2>
                        </div>
                        <div class="content">
                            <h3>Software <br>
                                Devlopment.</h3>
                        </div>
                        <div class="read-more-btn d-flex justify-content-end">
                            <a href="services-details.html">Read More <span><img src="{{ asset('img/web/icons/arrow-right.svg') }}" alt=""></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="services-wrrap">
                        <div class="services-top d-flex justify-content-between align-items-center">
                            <div class="icon">
                                <img src="{{ asset('img/web/icons/video.svg') }}" alt="web-design">
                            </div>
                            <h2>04</h2>
                        </div>
                        <div class="content">
                            <h3>Video Motion <br>
                                Graphic.</h3>
                        </div>
                        <div class="read-more-btn d-flex justify-content-end">
                            <a href="services-details.html">Read More <span><img src="{{ asset('img/web/icons/arrow-right.svg') }}" alt=""></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow animate fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="services-wrrap">
                        <div class="services-top d-flex justify-content-between align-items-center">
                            <div class="icon">
                                <img src="{{ asset('img/web/icons/idea.svg') }}" alt="web-design">
                            </div>
                            <h2>05</h2>
                        </div>
                        <div class="content">
                            <h3>Product Design &<br>
                                Develop.</h3>
                        </div>
                        <div class="read-more-btn d-flex justify-content-end">
                            <a href="services-details.html">Read More <span><img src="{{ asset('img/web/icons/arrow-right.svg') }}" alt=""></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow animate fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="services-wrrap">
                        <div class="services-top d-flex justify-content-between align-items-center">
                            <div class="icon">
                                <img src="{{ asset('img/web/icons/branding.svg') }}" alt="web-design">
                            </div>
                            <h2>06</h2>
                        </div>
                        <div class="content">
                            <h3>Branding & Soft <br>
                                Indentity.</h3>
                        </div>
                        <div class="read-more-btn d-flex justify-content-end">
                            <a href="services-details.html">Read More <span><img src="{{ asset('img/web/icons/arrow-right.svg') }}" alt=""></span></a>
                        </div>
                    </div>
                </div>
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
                                        <a href="project-details.html">Case Study</a>
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
                                        <a href="project-details.html">Case Study</a>
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
                        <a class="eg-btn btn--primary btn--lg" href="project1.html">VIEW ALL</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== Home One Works End============= -->
@endsection