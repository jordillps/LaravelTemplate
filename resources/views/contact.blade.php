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

@php
    $setting = \App\Models\Setting::first();
@endphp

<!-- ========== breadcump Start============= -->
<div class="inner-page-banner">
    <div class="inner-banner-top">
        <div class="breadcrumb-area">
           <div class="container">
               <div class="row">
                   <div class="col-12 d-flex justify-content-sm-end justify-content-center">
                        <div class="inner-breadcrumb">
                            <h2>{{ __('web.contact-now') }}</h2>
                            <nav>
                                <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('web.home') }}</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">{{ __('web.contact-now') }}</li>
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

<!-- ========== Contact Now Start============= -->
<div class="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-address">
                    <div class="single-contact mb-60 d-flex align-items-center wow animate fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="icon">
                            <i class='bx bx-phone-call'></i>
                        </div>
                        <div class="content">
                            <h3>{{ __('web.phone') }}</h3>
                            <a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
                        </div>
                    </div>
                    <div class="single-contact d-flex align-items-center wow animate fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="icon">
                            <i class='bx bx-envelope' ></i>
                        </div>
                        <div class="content">
                            <h3>{{ __('web.email') }}</h3>
                            <a href="tell:{{ $setting->email }}">{{ $setting->email }}</a>
                        </div>
                    </div>
                </div>
            </div>
            @include('partials.contact-form')  
        </div>
    </div>
</div>
<!-- ========== Contact Now end============= -->
     
    
@endsection

@push('scripts')
  
@endpush