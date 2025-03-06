<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="images/logos/logo-2.png" type="image/svg" />

    <title> {{ config('app.name') }} </title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <!-- font family -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- styling -->
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- typing effects -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
</head>

<body class="antialiased {{ config('app.locale') }}">
    <header>
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close">
                    <span class="icofont-close js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <nav class="site-nav">
            <div class="container">
                <div class="menu-bg-wrap px-2 py-2">
                    <div class="site-navigation d-flex justify-content-between align-items-center">
                        <a href="/" class="logo navbar-brand m-0 float-start ps-2">
                            <img class="img" src="images/logos/logo-2.png" alt="captain academy">
                        </a>

                        <ul dir="{{config('app.locale') == 'ar' ? 'rtl' : '' }}" class="{{config('app.locale') == 'ar' ? 'pe-0' : '' }} js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">

                            <li class="{{ Request::is('home') || Request::is('/')? 'active': '' }}"><a href="/home">{{ __('nav.home')}}</a></li>
                            <li class="{{ Request::is('about-us')? 'active': '' }}"><a href="/about-us">{{ __('nav.about-us')}}</a></li>
                            <li class="{{ Request::is('best-football-academy-dammam-khobar-saudi-arabia')? 'active': '' }}"><a href="/best-football-academy-dammam-khobar-saudi-arabia">{{ __('nav.tomoh')}}</a></li>
                            <li class="{{ Request::is('news')? 'active': '' }}"><a href="/news">{{ __('nav.news')}}</a></li>
                            <li class="{{ Request::is('terms-and-policy')? 'active': '' }}"><a href="/terms-and-policy">{{ __('nav.terms-and-policy')}}</a></li>
                            <li class="{{ Request::is('contact-us')? 'active': '' }}"><a href="/contact-us">{{ __('nav.contact-us')}}</a></li>
                            <li class="cta-button"><a href="/registration" class="btn btn-secondary text-primary fw-bold ">{{ __('nav.registration')}}</a></li>
                            <li>
                                <a class="ml-1 underline ml-2 mr-2" href="/localization/{{config('app.locale') == 'ar' ? 'en' : 'ar' }} ">
                                    <span>{{ config('app.locale')  == 'ar' ? 'English'  :  'عربي' }}</span>
                                </a>
                            </li>
                        </ul>

                        <a href="#" class="burger light float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none me-3" data-toggle="collapse" data-target="#main-navbar">
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <!-- hero section -->
        <section class="hero {{ config('app.locale') == 'ar' ? 'text-right' : ''}}  " style="background-image: url('images/home/bg-hero.jpg');">
            <div class="container hero-header">
                <div class="row hero-header  align-items-center {{ config('app.locale') == 'ar' ? 'text-end justify-content-end' : ''}}">
                    <div class="col-lg-6" data-aos="fade-up">
                        <h1 class="text-white">
                            {{ __('home.header-title') }}
                        </h1>
                        <div class="{{ config('app.locale') == 'ar' ? 'd-flex justify-content-end' : ''}}">
                            <div id="typed-strings">
                                <p>{{ __('home.home-hero-type-01') }}</p>
                                <p>{{ __('home.home-hero-type-02') }}</p>
                                <p>{{ __('home.home-hero-type-03') }}</p>
                            </div>
                            <span class="h1 heading text-primary font-bodoni text-uppercase {{ config('app.locale') == 'ar' ? 'order-2' : ''}}" id="typed"></span>
                        </div>
                        <a href="/registration" class="btn btn-secondary fw-bold mb-4 ">{{ __('nav.registration')}}</a>
                    </div>

                </div>
            </div>
        </section>
        <!-- ./ hero section -->

        <!-- news -->
        <section class="section bg-white  position-relative z-3" data-aos="fade-up" data-aos-delay="100">
            <div class="container">
                <div class="row mb-5 align-items-center {{ config('app.locale') == 'ar' ? 'flex-row-reverse' : '' }}">
                    <div class="col-lg-6 text-center {{ config('app.locale') == 'ar' ? 'text-lg-end' : 'text-lg-start ' }}">
                        <h2 class="fw-bold text-primary heading">
                            {{ __('home.news-header')}}
                        </h2>
                    </div>
                    <div class="col-lg-6 text-center  {{ config('app.locale') == 'ar' ? 'text-lg-start' : 'text-lg-end' }}">
                        <p class="d-none d-md-block">
                            <a href="/news" class="btn btn-primary btn-large fw-bold py-3 px-4">{{ __('home.news-btn')}}</a>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="property-slider-wrap">
                            <div class="property-slider">
                                <div class="property-item h-100  {{ config('app.locale') == 'ar' ? 'text-end' : 'text-start' }}">
                                    <a href="{{route('news') . '#stadium'}}" class="img">
                                        <img src="{{'images/news/news-' . config('app.locale') . '-03.jpg'}}" style="height: 372px; width: 372px" alt="Opened Stadium" loading="lazy" class="img-fluid shadow-none object-fit-cover" />
                                    </a>

                                    <div class="property-content shadow mt-0">
                                        <div class="price mb-2"><span>{{ __('news.news-03-title') }}</span></div>
                                        <div>
                                            <span class="d-block mb-2 text-black-50">{{ __('news.news-03-date') }}</span>
                                            <a href="{{route('news') . '#stadium'}}" class="btn btn-secondary fw-bold mb-4">{{ __('news.news-03-cta') }}</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .item -->
                                -
                                <div class="property-item h-100  {{ config('app.locale') == 'ar' ? 'text-end' : 'text-start' }}">
                                    <a href="{{route('news') . '#saudi-day'}}" class="img">
                                        <img src="{{'images/news/news-' . config('app.locale') . '-02.jpg'}}" style="height: 372px; width: 372px" alt="saudi national day" loading="lazy" class="img-fluid shadow-none object-fit-cover" />
                                    </a>

                                    <div class="property-content shadow mt-0">
                                        <div class="price mb-2"><span>{{ __('news.news-02-title') }}</span></div>
                                        <div>
                                            <span class="d-block mb-2 text-black-50">{{ __('news.news-02-date') }}</span>
                                            <!-- <div class="specs mb-4">
                                                {{ __('news.news-02-content') }}
                                            </div> -->

                                            <a href="{{route('news') . '#saudi-day'}}" class="btn btn-secondary fw-bold mb-4">{{ __('news.news-02-cta') }}</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .item -->

                                <div class="property-item  h-100 {{ config('app.locale') == 'ar' ? 'text-end' : 'text-start' }}">
                                    <a href="{{route('news') . '#registration-open'}}" class="img">
                                        <img src="{{'images/news/news-' . config('app.locale') . '-01.jpg'}}" alt="join news" loading="lazy" class="img-fluid  shadow-none" />
                                    </a>

                                    <div class="property-content shadow mt-0">
                                        <div class="price mb-2"><span>{{ __('news.news-01-title') }}</span></div>
                                        <div>
                                            <span class="d-block mb-2 text-black-50">{{ __('news.news-01-date') }}</span>
                                            <!-- <div class="specs mb-4">
                                                {{ __('news.news-01-content') }}
                                            </div> -->

                                            <!-- <a href="/registration" class="btn btn-secondary fw-bold mb-4">{{ __('news.news-01-cta') }}</a> -->
                                            <a href="{{route('news') . '#registration-open'}}" class="btn btn-secondary fw-bold mb-4">{{ __('news.news-02-cta') }}</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .item -->

                            </div>

                            <div
                                id="property-nav"
                                class="controls"
                                tabindex="0"
                                aria-label="Carousel Navigation">
                                <span
                                    class="prev"
                                    data-controls="prev"
                                    aria-controls="property"
                                    tabindex="-1">Prev</span>
                                <span
                                    class="next"
                                    data-controls="next"
                                    aria-controls="property"
                                    tabindex="-1">Next</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/news" class="btn btn-primary btn-large fw-bold py-3 px-4 d-block d-md-none">{{ __('home.news-btn')}}</a>
            </div>
        </section>
        <!-- ./news -->

        <!-- Why chose us -->
        <section class="section mt-5" data-aos="fade-up" data-aos-delay="100">
            <div class="container">
                <div class="text-rtl">
                    <h2 class="font-weight-bold text-primary fw-bold mb-5">
                        {{ __('home.chose-us-title')}}
                    </h2>
                </div>

                <div class="d-flex justify-rtl text-uppercase  align-items-center">
                    <span class="text-secondary me-rtl-2 order-1 h1"><i class="bi bi-dash-lg"></i></span>
                    <p class="order-2">
                        {{ __('home.chose-us-value-01')}}
                    </p>
                </div>
                <div class="d-flex justify-rtl text-uppercase align-items-center">
                    <span class="text-secondary  me-rtl-2 order-1 h1"><i class="bi bi-dash-lg"></i></span>
                    <p class="order-2">
                        {{ __('home.chose-us-value-02')}}
                    </p>
                </div>
                <div class="d-flex justify-rtl text-uppercase align-items-center">
                    <span class="text-secondary me-rtl-2 order-1 h1"><i class="bi bi-dash-lg"></i></span>
                    <p class="order-2">
                        {{ __('home.chose-us-value-03')}}
                    </p>
                </div>
                <div class="d-flex justify-rtl text-uppercase align-items-center">
                    <span class="text-secondary me-rtl-2 order-1 h1"><i class="bi bi-dash-lg"></i></span>
                    <p class="order-2">
                        {{ __('home.chose-us-value-04')}}
                    </p>
                </div>
                <div class="d-flex justify-rtl text-uppercase align-items-center">
                    <span class="text-secondary me-rtl-2 order-1 h1"><i class="bi bi-dash-lg"></i></span>
                    <p class="order-2">
                        {{ __('home.chose-us-value-05')}}
                    </p>
                </div>
                <a href="/about-us" class="btn btn-large btn-primary fw-bold mt-5">{{ __('home.about-btn')}}</a>
            </div>
        </section>
        <!-- ./ why chose us  -->

        <!-- Our Team  -->
        <section class="section section-5 features-1" data-aos="fade-up" data-aos-delay="100">
            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-8 mb-5">
                        <h2 class="font-weight-bold text-primary fw-bold">
                            {{ __('home.team-header')}}
                        </h2>
                        <p class="text-black-50">
                            {{ __('home.team-content')}}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="h-100 person">
                            <div>
                                <img loading="lazy" src="images/team/team_01.jpg" alt="Khaled Al-Harazi" class="img-fluid" />
                            </div>

                            <div class="person-contents">
                                <h3 class="mb-0">{{ __('home.team_01_name')}}</h3>
                                <span class="meta d-block mb-3">{{ __('home.team_01_position')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="h-100 person">
                            <img loading="lazy" src="images/team/team_02.jpg" alt="Juxshin Nexhipi" class="img-fluid" />

                            <div class="person-contents">
                                <h3 class="mb-0">{{ __('home.team_02_name')}}</h3>
                                <span class="meta d-block mb-3">{{ __('home.team_02_position')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="h-100 person">
                            <img loading="lazy" src="images/team/team_03.jpg" alt="Mohammed Yasser" class="img-fluid" />

                            <div class="person-contents">
                                <h3 class="mb-0">{{ __('home.team_03_name')}}</h3>
                                <span class="meta d-block mb-3">{{ __('home.team_03_position')}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ our Team -->



        <!-- Message -->
        <section id="message" class="section pt-5 my-5" data-aos="fade-in" data-aos-delay="100">
            <div class="container">
                <div class="row">
                    <div class="mx-auto">
                        <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
                            <h2 class="fw-bold h2 text-center mt-5 mt-md-1 ">{{ __('about.message-title')}}</h2>
                            <div class="blockquote-custom-icon bg-secondary text-white shadow-sm"><i class="bi bi-quote"></i></div>
                            <div class="mb-0 mt-2  fst-italic preserve-whitespace {{ config('app.locale') == 'ar' ? 'text-end' : 'text-start' }}">" {{ __('about.message-content')}} "</div>
                            <footer class="blockquote-footer pt-4 mt-4 border-top text-secondary fw-bold  {{ config('app.locale') == 'ar' ? 'text-end' : 'text-start' }}">
                                <cite title="Source Title">{{ __('global.company-name')}}</cite>
                            </footer>
                        </blockquote><!-- END -->

                    </div>
                </div>
            </div>
        </section>

        <!-- Register-->
        @include('partials/be-part')
        <!-- ./ Register-->

    </main>


    <footer class="site-footer" data-aos="fade-in" data-aos-delay="200">
        <div class="container">
            <!-- Social Media -->
            <div class="widget text-center">
                <h3>{{ __('footer.social-media')}}</h3>
                <ul class="list-unstyled social">
                    <li>
                        <a href="https://www.youtube.com/channel/UC-SuUJtiY66frS0JjkcvQTg" target="_blank"><i class="bi bi-youtube"></i><span class="visually-hidden">youtube</span></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/CaptainacademyS" target="_blank"><i class="bi bi-twitter-x"></i><span class="visually-hidden">twitter </span></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/captainacademyS/" target="_blank"><i class="bi bi-facebook"></i><span class="visually-hidden">facebook</span></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/tomoh_fc?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><i class="bi bi-instagram"></i> <span class="visually-hidden">instagram</span></a>
                    </li>
                    <li>
                        <a href="https://www.tiktok.com/@captainacademy_sa" target="_blank"><i class="bi bi-tiktok"></i><span class="visually-hidden">tiktok</span></a>
                    </li>
                    <li>
                        <a href="https://www.snapchat.com/add/captain-academy" target="_blank"><i class="bi bi-snapchat"></i><span class="visually-hidden">snapchat</span></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/captainacademysa/?viewAsMember=true" target="_blank"><i class="bi bi-linkedin"></i><span class="visually-hidden">linkedin</span></a>
                    </li>
                </ul>
            </div>
            <!-- /. Social Media -->

            <div class="row">
                <div class="col-lg-4">
                    <div class="widget text-center {{ config('app.locale') == 'ar' ? 'text-md-end ' : 'text-md-start' }}">
                        <h3 class="text-center">{{ __('footer.contacts')}}</h3>
                        <address>{{ __('contact.address')}}</address>
                        <ul class="list-unstyled links">
                            <li><a href="https://api.whatsapp.com/send?phone=966562556201" target="_blank">{{ __('contact.whatsapp-value')}}</a></li>
                            <li>
                                <a href="mailto:info@tomohfc.com" target="_blank">info@tomohfc.com</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="widget">
                        <h3 class="text-center">{{ __('footer.sources')}}</h3>
                        <div class="d-flex justify-content-around" dir="{{ config('app.locale') == 'ar' ? 'rtl' : '' }}">
                            <ul class="list-unstyled float-start links">
                                <li><a href="{{route('about-us') . '#services'}}">{{ __('footer.services')}}</a></li>
                                <li><a href="{{route('about-us') . '#mission&vision'}}">{{ __('footer.vision')}}</a></li>
                                <li><a href="{{route('about-us') . '#mission&vision'}}">{{ __('footer.mission')}}</a></li>
                                <li><a href="{{route('about-us') . '#objectives'}}">{{ __('footer.objectives')}}</a></li>
                            </ul>
                            <ul class="list-unstyled float-start links">
                                <li><a href="{{route('home') . '#message'}}">{{ __('footer.message')}}</a></li>
                                <li><a href="{{route('about-us') . '#approach'}}">{{ __('footer.approach')}}</a></li>
                                <li><a href="{{route('about-us') . '#cores'}}">{{ __('footer.cores')}}</a></li>
                                <li><a href="{{route('about-us') . '#partners'}}">{{ __('footer.partners')}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="widget">
                        <h3 class="text-center">{{ __('footer.links')}}</h3>
                        <div class="d-flex justify-content-around" dir="{{ config('app.locale') == 'ar' ? 'rtl' : '' }}">
                            <ul class="list-unstyled float-start links">
                                <li><a href="/home">{{ __('footer.home')}}</a></li>
                                <li><a href="/about-us">{{ __('footer.about-us')}}</a></li>
                                <li><a href="/best-football-academy-dammam-khobar-saudi-arabia">{{ __('nav.tomoh')}}</a></li>
                                <li><a href="/terms-and-policy">{{ __('terms.header-terms')}}</a></li>
                            </ul>
                            <ul class="list-unstyled float-start links">
                                <li><a href="/news">{{ __('footer.news')}}</a></li>
                                <li><a href="/contact-us">{{ __('footer.contact-us')}}</a></li>
                                <li><a href="/registration">{{ __('footer.registration')}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->

            <!-- /.widget -->


            <div class="row mt-3">
                <div class="col-12 text-center">
                    <p>
                        {{ __('footer.copyright')}} &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        {{ __('footer.reserved')}}
                    </p>
                    <div dir="{{ config('app.locale') == 'ar' ? 'rtl' : '' }}">
                        <span>{{ __('footer.develope')}}</span>
                        <a href="/" target="_blank" class="text-secondary fw-bold">{{ __('global.company-name')}}</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </footer>
    <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/typing.js"></script>
</body>

</html>