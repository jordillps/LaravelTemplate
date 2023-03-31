@php
    $setting = \App\Models\Setting::first();
@endphp

<!-- ========== Home Footer Start============= -->
<div class="footer1">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 d-flex align-items-center wow animate fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="footer-wrrap">
                    <div class="footer-icon">
                        <img src="{{ asset('img/logoFormalWeb_8.png') }}" alt="">
                    </div>
                    <div class="footer-img">
                        @if(count($setting->getMedia('images'))>0)
                            @foreach ($setting->getMedia('images') as $media)   
                                <img src="{{ $media->getUrl('thumb') }}" alt=""> 
                            @endforeach
                        @endif
                    </div>
                    <p>{{ $setting->text }}</p>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 d-flex align-items-center text-center justify-content-center order-lg-2 order-3 wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="footer-wrrap1">
                    <a class="footer-btn eg-btn btn--primary btn--lg mb-30" href="{{ route('contact') }}">{{ __('web.lets-chat') }}</a>
                    <div class="social-icon">
                        <span>{{ __('web.follow-me') }}:</span>
                        <ul>
                            <li><a href="{{ $setting->linkedin_url }}" aria-label="linkedin"><i class='bx bxl-linkedin'></i></a></li>
                            <li><a href="{{ $setting->twitter_url }}" aria-label="twitter"><i class='bx bxl-twitter' ></i></a></li>
                            <li><a href="{{ $setting->facebook_url }}" aria-label="facebook"><i class='bx bxl-facebook' ></i></a></li>
                        </ul>
                    </div>
                    <div class="footer-menu">
                        <ul>
                            <li><a href="{{ route('home') }}">{{ __('web.home') }}</a></li>
                            <li><a href="{{ route('about-me') }}">{{ __('web.about-me') }}</a></li>
                            <li><a href="{{ route('services') }}">{{ __('web.services') }}</a></li>
                            <li><a href="{{ route('blog') }}">{{ __('web.blog') }}</a></li>
                            <li><a href="{{ route('contact') }}">{{ __('web.contact') }}</a></li>
                        </ul>
                    </div>
                    <div  class="devlper-area">
                     <span id="copyright"></span>   
                     <span>{{ __('web.all-rights-reserved') }} | <a href="{{ route('legal-notice') }}">{{ __('web.legal-notice') }}</a> | <a href='politica-privacidad.html'>{{ __('web.privacy-policy') }}</a> | <a href='politica-cookies.html'>{{ __('web.cookies-policy') }}</a></span>
                     <div>
                        <span>{{__('web.developed-by') }} <a href="{{ route('home') }}"> Jordi Llobet / Formal Web</a></span>
                     </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 d-flex align-items-center order-lg-3 order-2 wow animate fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="footer-wrrap">
                    <h4>{{ __('web.contact') }}</h4>
                    <div class="number d-flex align-items-center">
                        <div class="num-icon">
                            <i class='bx bx-phone-call' ></i>
                        </div>
                        <div class="phone">
                            <a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
                        </div>
                    </div>
                    <div class="office-mail d-flex align-items-center">
                        <div class="mail-icon">
                            <i class='bx bx-envelope' ></i>
                        </div>
                        <div class="email">
                            <a href="tell:{{ $setting->email }}">{{ $setting->email }}</a><br>
                        </div>
                    </div>
                    <div class="address d-flex align-items-center">
                        <div class="address-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="location">
                            <a href="#">{{ $setting->city }}</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ========== Home Footer End============= -->

@push('scripts')

@endpush

