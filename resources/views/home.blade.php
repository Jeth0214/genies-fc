@extends('layouts.app')

@section('content')

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

                                    <a href="{{route('news') . '#2034'}}" class="btn btn-secondary fw-bold mb-4">{{ __('news.news-02-cta') }}</a>
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
            <div class="col-lg-6 mb-5 mb-lg-0 h-100">

                <div class="team">
                    <img loading="lazy" src="images/team/team_01.jpg" class="img-fluid" alt="{{ __('home.team_01_name')}}">
                    <h3 class="team-name">{{ __('home.team_01_name')}}</h3>
                    <div class="team-position">{{ __('home.team_01_position')}}</div>
                </div>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="team">
                    <img loading="lazy" src="images/team/team_02.jpg" class="img-fluid" alt="{{ __('home.team_02_name')}}">
                    <h3 class="team-name">{{ __('home.team_02_name')}}</h3>
                    <div class="team-position">{{ __('home.team_02_position')}}</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ our Team -->


<!-- Team Description -->
<section id="message" class="section pt-5 my-5" data-aos="fade-in" data-aos-delay="100">
    <div class="container">
        <div class="row">
            <div class="mx-auto">
                <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
                    <h2 class="fw-bold h2 text-center mt-5 mt-md-1 ">{{ __('home.team_01_name')}}</h2>
                    <div class="mb-0 mt-2  fst-italic preserve-whitespace {{ config('app.locale') == 'ar' ? 'text-end' : 'text-start' }}">" {{ __('home.team_01_content')}} "</div>
                    <footer class="blockquote-footer pt-4 mt-4 border-top text-secondary fw-bold  {{ config('app.locale') == 'ar' ? 'text-end' : 'text-start' }}">
                        <cite title="Source Title">{{ __('home.team_01_position')}}</cite>
                    </footer>
                </blockquote><!-- END -->

            </div>
        </div>
    </div>
</section>


<!-- Players -->
<section class="section sec-testimonials" data-aos="zoom-in" data-aos-delay="100">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-md-6">
                <h2 class="fw-bold heading text-primary mb-4 mb-md-0">
                    Our Pride, Our Players
                </h2>
                <p class="text-black">
                    Each of these athletes brings heart, hustle, and honor to the field.
                </p>
            </div>
            <div class="col-md-6 text-md-end">
                <div id="testimonial-nav">
                    <span class="prev" data-controls="prev">Prev</span>

                    <span class="next" data-controls="next">Next</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4"></div>
        </div>
        <div class="testimonial-slider-wrap">
            <div class="testimonial-slider">

                <div class="item">
                    <div class="testimonial text-center">
                        <div class="ratio ratio-1x1 w-25 rounded-circle mb-4 mx-auto">
                            <img
                                src="images/players/Ibrahim Touré.jpg"
                                alt="Ibrahim Touré"
                                loading="lazy"
                                class="img-fluid rounded-circle  mb-4 object-fit-cover" />
                        </div>
                        <h3 class="h5 text-secondary mb-0">Ibrahim Touré</h3>
                        <p class="text-black mb-0">Goalkeeper</p>
                        <small>April 21, 2025</small>
                        <div class="text-black mt-4">
                            <p>
                                A talented 14-year-old goalkeeper from Ivory Coast, plays for Genies FC and has already impressed scouts with his shot-stopping skills and confident footwork, drawing comparisons to Thibaut Courtois.
                                Currently part of the Ivory Coast U15 national team, he’s set to compete in the Africa U15 Championship in Ghana, marking a key step in his promising journey.
                            </p>
                            <a href="{{route('players') . '#IbrahimTouré'}}" class="btn btn-secondary btn-sm  fw-bold mb-4">Discover His Journey</a>

                        </div>

                    </div>
                </div>

                <div class="item">
                    <div class="testimonial text-center">
                        <div class="ratio ratio-1x1 w-50 rounded-circle mb-4 mx-auto">
                            <img
                                src="images/players/Ibrahim Touré.jpg"
                                alt="Ibrahim Touré"
                                loading="lazy"
                                class="img-fluid rounded-circle  mb-4 object-fit-cover" />
                        </div>
                        <h3 class="h5 text-secondary mb-0">Ibrahim Touré</h3>
                        <p class="text-black mb-0">Goalkeeper</p>
                        <smal>April 22, 2025 <span> (New)</span></smal>
                        <div class="text-black mt-4">
                            <p>
                                A talented 14-year-old goalkeeper from Ivory Coast, plays for Genies FC and has already impressed scouts with his shot-stopping skills and confident footwork, drawing comparisons to Thibaut Courtois.
                                Currently part of the Ivory Coast U15 national team, he’s set to compete in the Africa U15 Championship in Ghana, marking a key step in his promising journey.
                            </p>
                        </div>
                        <a href="{{route('players') . '#IbrahimTouré'}}" class="btn btn-secondary fw-bold mb-4">Discover His Journey</a>
                    </div>
                </div>


                <div class="item">
                    <div class="testimonial text-center">
                        <div class="ratio ratio-1x1 w-25 rounded-circle mb-4 mx-auto">
                            <img
                                src="images/players/Ibrahim Touré.jpg"
                                alt="Ibrahim Touré"
                                loading="lazy"
                                class="img-fluid rounded-circle  mb-4 object-fit-cover" />
                        </div>
                        <h3 class="h5 text-secondary mb-0">Ibrahim Touré</h3>
                        <p class="text-black mb-0">Goalkeeper</p>
                        <small>April 21, 2025</small>
                        <div class="text-black mt-4">
                            <p>
                                A talented 14-year-old goalkeeper from Ivory Coast, plays for Genies FC and has already impressed scouts with his shot-stopping skills and confident footwork, drawing comparisons to Thibaut Courtois.
                                Currently part of the Ivory Coast U15 national team, he’s set to compete in the Africa U15 Championship in Ghana, marking a key step in his promising journey.
                            </p>
                            <a href="{{route('players') . '#IbrahimTouré'}}" class="btn btn-secondary fw-bold mb-4">Discover His Journey</a>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- ./ Players -->



<!-- Register-->
@include('partials/be-part')
<!-- ./ Register-->


@endsection