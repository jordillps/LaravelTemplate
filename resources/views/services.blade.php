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

<!-- ========== breadcump Start============= -->
<div class="inner-page-banner">
    <div class="inner-banner-top">
        <div class="breadcrumb-area">
           <div class="container">
               <div class="row">
                   <div class="col-12 d-flex justify-content-sm-end justify-content-center">
                        <div class="inner-breadcrumb">
                            <h2>Services Details</h2>
                            <nav>
                                <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">Services Details</li>
                                </ol>
                              </nav>
                        </div>
                   </div>
               </div>
           </div>
        </div>
    </div>
</div>
<!-- ========== breadcump end============= -->

<!-- ==========services Start============= -->
<div class="services-details pt-120 mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 order-lg-1 order-2 wow animate fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                @foreach ($services as $service)
                    <div class="service-details-wrrap pb-60">
                        <div class="service-img-1">
                            <img class="img-fluid" src="{{ asset('img/web/services/swrvice-dt-1.png') }}" alt="">
                        </div>
                        <div class="services-top d-flex justify-content-between align-items-center">
                            <div class="icon">
                                <img src="{{ asset('img/web/icons/'. $service->icon) }}" alt="" width="60">
                            </div>
                            <h3>{{ $service->{'title:'. app()->getLocale()} }}</h3>
                        </div>
                        {{-- <h3 class="pt-25">Unlimited skills for super projects.</h3>
                        <ul>
                            <li>We provide free initial consultation and support of all time 24 hour.</li>
                            <li>We work with some of the most successful businesses work many creative work.</li>
                            <li>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</li>
                            <li>Omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem.</li>
                        </ul> --}}
                    </div>
                @endforeach
            </div>
            <div class="col-lg-4 order-lg-2 order-1">
                <div class="blog-sidebar">
                    <div class="blog-widget-item wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="search-area">
                            <div class="blog-widget-body1">
                                <form>
                                    <div class="form-inner">
                                        <input type="text" placeholder="Search...">
                                        <button class="search--btn"><i class='bx bx-search'></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="blog-widget-item wow animate fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="top-blog">
                            <div class="sidebar-widget-title">
                                <h4>Categories</h4>
                                <span></span>
                            </div>
                            <div class="blog-widget-body">
                                <ul class="category-list">
                                    @foreach ($services as $service)
                                        <li><a href="#"><span>{{ $service->{'title:'. app()->getLocale()} }}</span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="blog-widget-item wow animate fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">
                        <div class="tag-area">
                            <div class="sidebar-widget-title">
                                <h4>Follow Me</h4>
                                <span></span>
                            </div>
                            <div class="blog-widget-body">
                                <ul class="sidebar-social-list gap-4">
                                    <li><a href="{{ $setting->linkedin_url }}" target="blank" aria-label="linkedin"><i class="bx bxl-facebook"></i></a></li>
                                    <li><a href="{{ $setting->twitter_url }}" target="blank" aria-label="twitter"><i class="bx bxl-twitter"></i></a></li>
                                    <li><a href="{{ $setting->linkedin_url }}" target="blank" aria-label="linkedin"><i class="bx bxl-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==========services End============= -->
     
    
@endsection

@push('scripts')
  
@endpush