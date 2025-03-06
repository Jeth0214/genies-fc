@extends('layouts.app')

@section('content')
<!-- Hero -->
<section class="hero page-inner overlay" style="background-image: url('images/home/bg-page-02.jpg');">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading font-bodoni text-uppercase" data-aos="fade-up">
                    <span class="d-block">{{ __('about.hero-about')}}</span>
                    <span class="d-block">{{ __('about.hero-us')}}</span>
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- /. Hero -->

<!-- About -->
<section class="section pt-1" data-aos="fade-up" data-aos-delay="200">
    <div class="container">
        <div class="quotation">
            <div class="h1 fw-bold text-secondary quotation text-center">
                <i class="bi bi-quote"></i>
            </div>
        </div>
        <div class="row text-center {{ config('app.locale') == 'ar' ? 'text-md-end' : 'text-md-start'}}">
            <div class="col-12">
                <h2 class="fw-bold heading text-primary mb-4">{{ __('about.about-us')}}</h2>
                <p class="text-uppercase">
                    {{ __('about.about-content')}}
                </p>
            </div>
        </div>


    </div>
</section>
<!-- /. About -->

<!-- Mission -->
<section id="mission&vision" class="section bg-white" data-aos="fade-in" data-aos-delay="100">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6">
                <h2 class="fw-bold heading text-primary mb-4">{{ __('about.mission-header')}}</h2>
                <p class="text-uppercase">
                    {{ __('about.mission-content')}}
                </p>
            </div>

            <div class="col-md-6">
                <h2 class="fw-bold  heading text-primary mb-4"> {{ __('about.vision-header')}}</h2>
                <p class="text-uppercase">
                    {{ __('about.vision-content')}}
                </p>
            </div>
        </div>
    </div>
</section>
<!-- /. Mission -->

<!-- Objectives -->
<section id="objectives" class="section" data-aos="fade-up" data-aos-delay="100">
    <div class="container">
        <h2 class="fw-bold heading text-primary text-center mb-5">
            {{ __('about.objective-header')}}
        </h2>
        <div class="row justify-content-between mb-5 {{ config('app.locale') == 'ar' ? ' flex-row-reverse' : ''}}">
            <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
                <div class="img-about dots mb-5">
                    <img loading="lazy" src="images/home/bg-page-01.jpg" alt="objectives image" class="img-fluid" />
                </div>
                <div class="img-about dots">
                    <img loading="lazy" src="images/home/bg-page-02.jpg" alt="objectives image" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex feature-h">
                    <div class="numbered me-3">
                        <p>01</p>
                    </div>
                    <div class="feature-text">
                        <h3 class="heading fw-bold">{{ __('about.objective-title-01')}}</h3>
                        <p class="text-uppercase">
                            {{ __('about.objective-content-01')}}
                        </p>
                    </div>
                </div>

                <div class="d-flex feature-h">
                    <div class="numbered me-3">
                        <p> 02 </p>
                    </div>
                    <div class="feature-text">
                        <h3 class="heading fw-bold">{{ __('about.objective-title-02')}}</h3>
                        <p class="text-uppercase">
                            {{ __('about.objective-content-02')}}
                        </p>
                    </div>
                </div>

                <div class="d-flex feature-h">
                    <div class="numbered me-3">
                        <p> 03 </p>
                    </div>
                    <div class="feature-text">
                        <h3 class="heading fw-bold">{{ __('about.objective-title-03')}}</h3>
                        <p class="text-uppercase">
                            {{ __('about.objective-content-03')}}
                        </p>
                    </div>
                </div>

                <div class="d-flex feature-h">
                    <div class="numbered me-3">
                        <p> 04 </p>
                    </div>
                    <div class="feature-text">
                        <h3 class="heading fw-bold">{{ __('about.objective-title-04')}}</h3>
                        <p class="text-uppercase">
                            {{ __('about.objective-content-04')}}
                        </p>
                    </div>
                </div>

                <div class="d-flex feature-h">
                    <div class="numbered me-3">
                        <p> 05 </p>
                    </div>
                    <div class="feature-text">
                        <h3 class="heading fw-bold">{{ __('about.objective-title-05')}}</h3>
                        <p class="text-uppercase">
                            {{ __('about.objective-content-05')}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /. Objectives -->

<!-- Cores -->
<section id="cores" class=" section" data-aos="fade-up" data-aos-delay="100">
    <div class="container">
        <div class="row justify-content-between mb-5 {{ config('app.locale') == 'ar' ? ' flex-row-reverse' : ''}}">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="img-about dots mb-5">
                    <img loading="lazy" src="images/home/bg-page-02.jpg" alt="core image" class="img-fluid" />
                </div>
                <div class="img-about dots">
                    <img loading="lazy" src="images/home/bg-page-01.jpg" alt="core image" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-4">
                <h2 class="fw-bold heading text-primary fw-bold text-center">
                    {{ __('about.cores-header')}}
                </h2>
                <div class="d-flex feature-h">
                    <div class="numbered me-3">
                        <p>01</p>
                    </div>
                    <div class="feature-text">
                        <h3 class="heading fw-bold">{{ __('about.cores-title-01')}}</h3>
                        <p class="text-black-50">
                            {{ __('about.cores-content-01')}}
                        </p>
                    </div>
                </div>

                <div class="d-flex feature-h">
                    <div class="numbered me-3">
                        <p>02</p>
                    </div>
                    <div class="feature-text">
                        <h3 class="heading fw-bold">{{ __('about.cores-title-02')}}</h3>
                        <p class="text-black-50">
                            {{ __('about.cores-content-02')}}
                        </p>
                    </div>
                </div>

                <div class="d-flex feature-h">
                    <div class="numbered me-3">
                        <p>03</p>
                    </div>
                    <div class="feature-text">
                        <h3 class="heading fw-bold">{{ __('about.cores-title-03')}}</h3>
                        <p class="text-black-50">
                            {{ __('about.cores-content-03')}}
                        </p>
                    </div>
                </div>

                <div class="d-flex feature-h">
                    <div class="numbered me-3">
                        <p>04</p>
                    </div>
                    <div class="feature-text">
                        <h3 class="heading fw-bold">{{ __('about.cores-title-04')}}</h3>
                        <p class="text-black-50">
                            {{ __('about.cores-content-04')}}
                        </p>
                    </div>
                </div>

                <div class="d-flex feature-h">
                    <div class="numbered me-3">
                        <p>05</p>
                    </div>
                    <div class="feature-text">
                        <h3 class="heading fw-bold">{{ __('about.cores-title-05')}}</h3>
                        <p class="text-black-50">
                            {{ __('about.cores-content-05')}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /. Cores -->

<!-- approach -->
<section id="approach" class="section bg-primary text-white" data-aos="fade-up" data-aos-delay="100">
    <div class="container">
        <div class="text-rtl">
            <h2 class="font-weight-bold text-secondary fw-bold">
                {{ __('about.approach-header')}}
            </h2>
            <p class=" text-uppercase">
                {{ __('about.approach-content') }}
            </p>
        </div>

        <div class="d-flex justify-rtl text-uppercase  align-items-center">
            <span class="text-secondary me-rtl-2 order-1 h1"><i class="bi bi-dash-lg"></i></span>
            <p class="order-2">
                {{ __('about.approach-01')}}
            </p>
        </div>
        <div class="d-flex justify-rtl text-uppercase align-items-center">
            <span class="text-secondary  me-rtl-2 order-1 h1"><i class="bi bi-dash-lg"></i></span>
            <p class="order-2">
                {{ __('about.approach-02')}}
            </p>
        </div>
        <div class="d-flex justify-rtl text-uppercase align-items-center">
            <span class="text-secondary me-rtl-2 order-1 h1"><i class="bi bi-dash-lg"></i></span>
            <p class="order-2">
                {{ __('about.approach-03')}}
            </p>
        </div>
        <div class="d-flex justify-rtl text-uppercase align-items-center">
            <span class="text-secondary me-rtl-2 order-1 h1"><i class="bi bi-dash-lg"></i></span>
            <p class="order-2">
                {{ __('about.approach-04')}}
            </p>
        </div>
        <div class="d-flex justify-rtl text-uppercase align-items-center">
            <span class="text-secondary me-rtl-2 order-1 h1"><i class="bi bi-dash-lg"></i></span>
            <p class="order-2">
                {{ __('about.approach-05')}}
            </p>
        </div>
        <div class="d-flex justify-rtl text-uppercase align-items-center">
            <span class="text-secondary me-rtl-2 order-1 h1"><i class="bi bi-dash-lg"></i></span>
            <p class="order-2">
                {{ __('about.approach-06')}}
            </p>
        </div>
    </div>
</section>
<!-- ./ approach  -->

<!-- services -->
<section id="services" class="features-1 section bg-white">
    <div class="container">
        <h2 class="font-weight-bold text-primary fw-bold m-3 mb-5 ">
            {{ __('about.services-header')}}
        </h2>
        <div class="row">
            <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
                <div class="box-feature flex-fill">
                    <div class="services-icons"><i class="bi bi-people-fill"></i></div>
                    <h3 class="mb-3">{{ __('about.services-title-01')}}</h3>
                    <p>
                        {{ __('about.services-content-01')}}
                    </p>
                </div>
            </div>
            <div class="col-lg-4  d-flex" data-aos="fade-up" data-aos-delay="500">
                <div class="box-feature flex-fill">
                    <div class="services-icons"><i class="bi bi-card-checklist"></i></div>
                    <h3 class="mb-3">{{ __('about.services-title-02')}}</h3>
                    <p>
                        {{ __('about.services-content-02')}}
                    </p>
                </div>
            </div>
            <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="400">
                <div class="box-feature flex-fill">
                    <div class="services-icons"><i class="bi bi-trophy"></i></div>
                    <h3 class="mb-3">{{ __('about.services-title-03')}}</h3>
                    <p>
                        {{ __('about.services-content-03')}}
                    </p>
                </div>
            </div>
            <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="400">
                <div class="box-feature flex-fill">
                    <div class="services-icons"><i class="bi bi-lightbulb"></i></div>
                    <h3 class="mb-3">{{ __('about.services-title-04')}}</h3>
                    <p>
                        {{ __('about.services-content-04')}}
                    </p>
                </div>
            </div>
            <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="400">
                <div class="box-feature flex-fill">
                    <div class="services-icons"><i class="bi bi-person-vcard"></i></div>
                    <h3 class="mb-3">{{ __('about.services-title-05')}}</h3>
                    <p>
                        {{ __('about.services-content-05')}}
                    </p>
                </div>
            </div>
            <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="400">
                <div class="box-feature flex-fill">
                    <div class="services-icons"><i class="bi bi-clipboard2-data"></i></div>
                    <h3 class="mb-3">{{ __('about.services-title-06')}}</h3>
                    <p>
                        {{ __('about.services-content-06')}}
                    </p>
                </div>
            </div>
            <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="400">
                <div class="box-feature flex-fill">
                    <div class="services-icons"><i class="bi bi-person-arms-up"></i></div>
                    <h3 class="mb-3">{{ __('about.services-title-07')}}</h3>
                    <p>
                        {{ __('about.services-content-07')}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /. services -->

<!-- Partners -->
<div id="partners" class="section" data-aos="fade-up" data-aos-delay="200">
    <div class="container text-center">
        <div class="row ">
            <div class="col-12">
                <h2 class="fw-bold heading  text-primary mb-4">{{ __('about.partners-header')}}</h2>
            </div>
        </div>

        <p class="text-uppercase  mb-5">
            {{ __('about.partners-content')}}
        </p>
    </div>
</div>
<!-- /. Partners -->

<!-- Register-->
@include('partials/be-part')
<!-- ./ Register-->

@endsection