<!-- ========== header============= -->

<header class="header-area style-1">
  <div class="header-logo">
      <a href="{{ route('home') }}"><img alt="image" src="{{ asset('img/logoFormalweb_8.png') }}" ></a>
  </div>
  <div class="main-menu">
      <div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
          <div class="mobile-logo-wrap ">
              <a href="{{ route('home') }}"><img alt="image" src="{{ asset('img/logoFormalwebMobile.png') }}" ></a>

          </div>
          <div class="menu-close-btn">
              <i class="bi bi-x-lg"></i>
          </div>
      </div>
      <ul class="menu-list">
          <li>
              <a href="about.html">About Me</a>
          </li>
          <li>
            <a href="about.html">Services</a>
          </li>
          <li>
            <a href="about.html">Projects</a>
          </li>
          <li>
            <a href="about.html">Blog</a>
          </li>
          <li><a href="contact.html">Contact</a></li>
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
                      <span>Click To Call</span>
                      <h6><a href="tel:347-274-8816">+347-274-8816</a></h6>
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
              <span>Click To Call</span>
              <h6><a href="tel:347-274-8816">+347-274-8816</a></h6>
          </div>
      </div>
      <div class="mobile-menu-btn d-lg-none d-block">
          <i class='bx bx-menu'></i>
      </div>
  </div>
</header>

<!-- ========== header end============= -->