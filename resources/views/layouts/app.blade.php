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
                            <img class="img-fluid" src="images/logos/logo-2.png" alt="{{ __('global.company-name')}}">
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

                        <a href="#" class="burger light float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
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
                        <h3>{{ __('footer.contacts')}}</h3>
                        <address>{{ __('contact.address')}}</address>
                        <ul class=" list-unstyled links">
                            <li><a href="https://api.whatsapp.com/send?phone=966562556201" target="_blank">{{ __('contact.whatsapp-value')}}</a></li>
                            <li>
                                <a href="mailto:info@tomohfc.com" target="_blank"> info@tomohfc.com</a>
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
</body>

</html>