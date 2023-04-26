@php
    $phone = \App\Models\Setting::pluck('phone');
@endphp
<!-- ========== header============= -->

<header class="header-area style-1">
  <div class="header-logo">
      <a href="{{ route('home') }}"><img alt="logo Formal Web" src="{{ asset('img/logoFormalWeb_8.png') }}" title="logo Formal Web"></a>
  </div>
  <div class="main-menu">
      <div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
          <div class="mobile-logo-wrap ">
              <a href="{{ route('home') }}"><img alt="logo Formal Web" src="{{ asset('img/logoFormalWebMobile.png') }}" title="logo Formal Web"></a>

          </div>
          <div class="menu-close-btn">
              <i class="bi bi-x-lg"></i>
          </div>
      </div>
      <ul class="menu-list">
          <li>
              <a href="{{ route('about-me') }}">{{ __('web.about-me') }}</a>
          </li>
          <li>
            <a href="{{ route('services') }}">{{ __('web.services') }}</a>
          </li>
          <li>
            <a href="{{ route('projects') }}">{{ __('web.projects') }}</a>
          </li>
          <li>
            <a href="{{ route('blog') }}">{{ __('web.blog') }}</a>
          </li>
          <li><a href="{{ route('contact') }}">{{ __('web.contact') }}</a></li>
          @include('partials.language_switcher')
      </ul>
      <!-- mobile-search-area -->
      <div class="d-lg-none d-block">
          <form class="mobile-menu-form">
              <div class="hotline">
                  <div class="hotline-icon">
                      <img alt="image" src="{{ asset('img/web/icons/header-phone.svg') }}" >
                  </div>
                  <div class="hotline-info">
                      <span>{{ __('web.click-to-call') }}</span>
                      <h6><a href="tel:{{ $phone[0] }}">{{ $phone[0] }}</a></h6>
                  </div>
              </div>
          </form>

      </div>
  </div>
  <div class="nav-right d-flex align-items-center">
      <div class="hotline d-xl-flex d-none">
          <div class="hotline-icon">
              <img alt="image" src="{{ asset('img/web/icons/header-phone.svg') }}" >
          </div>
          <div class="hotline-info">
              <h6><a href="tel:{{ $phone[0] }}">{{ $phone[0] }}</a></h6>
          </div>
      </div>
      <div class="mobile-menu-btn d-lg-none d-block">
          <i class='bx bx-menu'></i>
      </div>
  </div>
</header>

<!-- ========== header end============= -->