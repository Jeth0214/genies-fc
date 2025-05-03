@extends('layouts.app')

@section('content')
<!-- Hero -->
<section class="hero page-inner overlay" style="background-image: url('images/home/bg-page-01.jpg');">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading font-bodoni text-uppercase" data-aos="fade-up">
                    {{ __('nav.news')}}
            </div>
        </div>
    </div>
</section>
<!-- /. Hero -->

<!-- news -->
<section class="section mt-2 events" data-aos="fade-up">
    <div class="container">
        <div class="text-center mb-2 row">
            <div class="col-md-6 mx-auto">
                <h2 class="text-center fw-bold">{{ __('news.header')}}</h2>
                <p>{{ __('news.header-content')}}</p>
            </div>
        </div>
    </div>

    <!-- news -->
    <div class="section bg-white" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <div class="card mb-5" id="stadium">
                <img src="{{'images/news/news-' . config('app.locale') . '-03.jpg'}}" alt="{{ __('news.news-03-title') }}" class="img-fluid" loading="lazy" />
                <div class="card-body">
                    <h3 class="card-title fw-bold mb-1">{{ __('news.news-03-title') }}</h3>
                    <small class="text-dark-emphasis">{{ __('news.news-03-date') }}</small>
                    <p class="card-text my-3">{{ __('news.news-03-content') }}</p>
                </div>
            </div>

            <div class="card mb-5" id="2034">
                <img src="{{'images/news/news-' . config('app.locale') . '-02.jpg'}}" alt="{{ __('news.news-02-title') }}" class="img-fluid" loading="lazy" />
                <div class="card-body">
                    <h3 class="card-title fw-bold mb-1">{{ __('news.news-02-title') }}</h3>
                    <small class="text-dark-emphasis">{{ __('news.news-02-date') }}</small>
                    <p class="card-text my-3">{{ __('news.news-02-content') }}</p>
                </div>
            </div>

            <div class="card" id="registration-open">
                <img src=" {{'images/news/news-' . config('app.locale') . '-01.jpg'}}" alt="{{ __('news.news-01-title') }}" class="img-fluid" loading="lazy" />
                <div class="card-body">
                    <h3 class="card-title fw-bold mb-1">{{ __('news.news-01-title') }}</h3>
                    <small class="text-dark-emphasis">{{ __('news.news-01-date') }}</small>
                    <p class="card-text my-3">{{ __('news.news-01-content') }}</p>
                    <a href="/registration" class="btn btn-secondary fw-bold mb-4">{{ __('news.news-01-cta') }}</a>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- ./news -->

</section>
<!-- ./ News -->

<!-- Register-->
@include('partials/be-part')
<!-- ./ Register-->


@endsection