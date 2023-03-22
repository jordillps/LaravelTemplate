@extends('layouts.app')

@section('content')
    @include('partials.navbar')

    <!--/ Intro Skew Star /-->
    @if(count($header->getMedia('images'))>0)
      <div
        id="home"
        class="intro route bg-image"
        style="background-image: url({{ $header->getMedia('images')[0]->getUrl('thumb') }})"
      >
    @else
      <div
        id="home"
        class="intro route bg-image"
        style="background-image: url({{ asset('img/web/intro-bg.jpg') }})"
      >
    @endif
      <div class="overlay-itro"></div>
      <div class="intro-content display-table">
        <div class="table-cell">
          <div class="container">
            <!--<p class="display-6 color-d">Hello, world!</p>-->
            <h1 class="intro-title mb-4">{{ $header->{'title:'. app()->getLocale()} }}</h1>
            <p class="intro-subtitle">
              <span class="text-slider-items"
                >{{ $header->{'text:'. app()->getLocale()} }}</span
              ><strong class="text-slider"></strong>
            </p>
            <!-- <p class="pt-3"><a class="btn btn-info btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
          </div>
        </div>
      </div>
    </div>
    <!--/ Intro Skew End /-->

    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        @if(count($about->getMedia('images'))>0)
                          <img
                            src="{{ $about->getMedia('images')[0]->getUrl('thumb') }}"
                            class="img-fluid rounded b-shadow-a"
                            alt=""
                          />
                        @else
                          <img
                            src="{{ asset('img/web/testimonial-2.jpg') }}"
                            class="img-fluid rounded b-shadow-a"
                            alt=""
                          />
                        @endif
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p>
                          <span class="title-s">Name: </span>
                          <span>{{ $about->name }}</span>
                        </p>
                        <p>
                          <span class="title-s">Profile: </span>
                          <span>{{ $about->{'profession:'. app()->getLocale()}  }}</span>
                        </p>
                        <p>
                          <span class="title-s">Email: </span>
                          <span>{{ $about->email }}</span>
                        </p>
                        <p>
                          <span class="title-s">Phone: </span>
                          <span>{{ $about->phone }}</span>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="skill-mf">
                    <p class="title-s">Skill</p>
                    <span>HTML</span> <span class="pull-right">{{ $about->html }}%</span>
                    <div class="progress">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        style="width:{{{ $about->html }}}%;"
                        aria-valuenow="{{ $about->html }}"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <span>CSS3</span> <span class="pull-right">{{ $about->css }}%</span>
                    <div class="progress">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        style="width:{{{ $about->css }}}%;"
                        aria-valuenow="{{ $about->css }}"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <span>PHP</span> <span class="pull-right">{{ $about->php }}%</span>
                    <div class="progress">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        style="width:{{{ $about->php }}}%;"
                        aria-valuenow="{{ $about->php }}"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <span>JAVASCRIPT</span> <span class="pull-right">{{ $about->javascript }}%</span>
                    <div class="progress">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        style="width:{{{ $about->javascript }}}%;"
                        aria-valuenow="{{ $about->javascript }}"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">About me</h5>
                    </div>
                    <p class="lead">
                      {!! $about->{'about_me:'. app()->getLocale()}  !!}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--/ Section Services Star /-->
    <section id="service" class="services-mf route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">{{ $titles[0]->{'title:'. app()->getLocale()} }}</h3>
              <p class="subtitle-a">
                {{ $titles[0]->{'text:'. app()->getLocale()} }}
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          @foreach ($services as  $service)
            <div class="col-md-4">
              <div class="service-box">
                <div class="service-ico">
                  <span class="ico-circle"><i class="{{ $service->icon }}"></i></span>
                </div>
                <div class="service-content">
                  <h2 class="s-title">{{ $service->{'title:'. app()->getLocale()} }}</h2>
                  <p class="s-description text-center">
                    {{ $service->{'text:'. app()->getLocale()} }}
                  </p>
                </div>
              </div>
            </div> 
          @endforeach
        </div>
      </div>
    </section>
    <!--/ Section Services End /-->

    <div
      class="section-counter paralax-mf bg-image"
      style="background-image: url({{ asset('img/web/counters-bg.jpg') }})"
    >
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box">
              <div class="counter-ico">
                <span class="ico-circle"
                  ><i class="ion-checkmark-round"></i
                ></span>
              </div>
              <div class="counter-num">
                <p class="counter">450</p>
                <span class="counter-text">WORKS COMPLETED</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"
                  ><i class="ion-ios-calendar-outline"></i
                ></span>
              </div>
              <div class="counter-num">
                <p class="counter">15</p>
                <span class="counter-text">YEARS OF EXPERIENCE</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ios-people"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">550</p>
                <span class="counter-text">TOTAL CLIENTS</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ribbon-a"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">36</p>
                <span class="counter-text">AWARD WON</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--/ Section Portfolio Star /-->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">{{ $titles[1]->{'title:'. app()->getLocale()} }}</h3>
              <p class="subtitle-a">
                {{ $titles[1]->{'text:'. app()->getLocale()} }}
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          @foreach ($projects as  $project)
            <div class="col-md-4">
              <div class="work-box">
                @if(count($project->getMedia('images')))
                  <a href="{{ $project->getMedia('images')[0]->getUrl('thumb') }}" data-lightbox="gallery-mf">
                    <div class="work-img">
                      <img src="{{ $project->getMedia('images')[0]->getUrl('thumb') }}" alt="" class="img-fluid" />
                    </div>
                    <div class="work-content">
                      <div class="row">
                        <div class="col-sm-8">
                          <h2 class="w-title">{{ $project->title }}</h2>
                          <div class="w-more">
                            <span class="w-ctegory">{{ $project->category->name }}</span>
                            <span class="w-date">{{ $project->published_at }}</span>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="w-like">
                            <span class="ion-ios-plus-outline"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                @endif
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>
    <!--/ Section Portfolio End /-->

    <!--/ Section Testimonials Star /-->
    <div
      class="testimonials paralax-mf bg-image"
      style="background-image: url({{ asset('img/web/overlay-bg.jpg') }})"
    >
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id="testimonial-mf" class="owl-carousel owl-theme">
              <div class="testimonial-box">
                <div class="author-test">
                  <img
                    src="{{ asset('img/web/testimonial-2.jpg') }}"
                    alt=""
                    class="rounded-circle b-shadow-a"
                  />
                  <span class="author">Xavi Alonso</span>
                </div>
                <div class="content-test">
                  <p class="description lead">
                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at
                    sem. Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </p>
                  <span class="comit"><i class="fa fa-quote-right"></i></span>
                </div>
              </div>
              <div class="testimonial-box">
                <div class="author-test">
                  <img
                    src="{{ asset('img/web/testimonial-4.jpg') }}"
                    alt=""
                    class="rounded-circle b-shadow-a"
                  />
                  <span class="author">Marta Socrate</span>
                </div>
                <div class="content-test">
                  <p class="description lead">
                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at
                    sem. Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </p>
                  <span class="comit"><i class="fa fa-quote-right"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--/ Section Blog Star /-->
    <section id="blog" class="blog-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">{{ $titles[2]->{'title:'. app()->getLocale()} }}</h3>
              <p class="subtitle-a">
                {{ $titles[2]->{'text:'. app()->getLocale()} }}
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          @foreach ($posts as $post)
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                @if(count($post->getMedia('images')))
                <a href="blog-single.html"
                  ><img src="{{ $post->getMedia('images')[0]->getUrl('thumb') }}" alt="" class="img-fluid"
                /></a>
                @endif
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">{{ $post->category->name }}</h6>
                  </div>
                </div>
                <h3 class="card-title">
                  <a href="blog-single.html">{{ $post->title }}</a>
                </h3>
                <p class="card-description">
                  {{ $post->excerpt }}
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img
                      src="{{ asset('img/web/testimonial-2.jpg') }}"
                      alt=""
                      class="avatar rounded-circle"
                    />
                    <span class="author">{{ $post->user->name }}</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="ion-ios-calendar"></span>{{ Carbon\Carbon::parse($post->published_at)->format('d-m-Y') }}
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!--/ Section Blog End /-->

    <!--/ Section Contact-Footer Star /-->
    <section
      class="paralax-mf footer-paralax bg-image sect-mt4 route"
      style="background-image: url({{ asset('img/web/overlay-bg.jpg') }})">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  
                  @include('partials.contact-form')

                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">Get in Touch</h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Facilis dolorum dolorem soluta quidem expedita aperiam
                        aliquid at. Totam magni ipsum suscipit amet? Autem nemo
                        esse laboriosam ratione nobis mollitia inventore?
                      </p>
                      <ul class="list-ico">
                        <li>
                          <span class="ion-ios-location"></span> 329 WASHINGTON
                          ST BOSTON, MA 02108
                        </li>
                        <li>
                          <span class="ion-ios-telephone"></span> (617) 557-0089
                        </li>
                        <li>
                          <span class="ion-email"></span> contact@example.com
                        </li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li>
                          <a href=""
                            ><span class="ico-circle"
                              ><i class="ion-social-facebook"></i></span
                          ></a>
                        </li>
                        <li>
                          <a href=""
                            ><span class="ico-circle"
                              ><i class="ion-social-instagram"></i></span
                          ></a>
                        </li>
                        <li>
                          <a href=""
                            ><span class="ico-circle"
                              ><i class="ion-social-twitter"></i></span
                          ></a>
                        </li>
                        <li>
                          <a href=""
                            ><span class="ico-circle"
                              ><i class="ion-social-pinterest"></i></span
                          ></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ Section Contact-footer End /-->

    @include('partials.footer')

@endsection