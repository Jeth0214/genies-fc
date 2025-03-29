@extends('layouts.app')

@section('content')
<!-- Hero -->
<section class="hero page-inner overlay" style="background-image: url('images/home/bg-page-01.jpg');">
  <div class=" container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-9 text-center mt-5">
        <h1 class="heading font-bodoni text-uppercase" data-aos="fade-up">
          {{ __('academy.hero-title')}}
        </h1>
      </div>
    </div>
  </div>
</section>
<!-- /. Hero -->

<section class="section" data-aos="fade-up" data-aos-delay="200">
  <div class="container {{config('app.locale') == 'ar' ? 'text-end' : '' }}">
    <div class="row">
      <div class="col-12 mx-auto text-center {{config('app.locale') == 'ar' ? 'col-md-10' : 'col-md-6' }}">
        <h2 class="fw-bold heading text-primary mb-4">
          {{__('academy.section-1-title')}}
        </h2>
      </div>
    </div>
    <p>{{__('academy.section-1-p-1')}}</p>
    <p>{{__('academy.section-1-p-2')}}</p>
  </div>
</section>

<section class="section pt-0 {{config('app.locale') == 'ar' ? 'text-end' : '' }}" data-aos="fade-up" data-aos-delay="200">
  <div class="container">
    <h3>
      {{__('academy.section-2-title')}}
    </h3>
    <p>{{__('academy.section-2-p-1')}}</p>

    <div class="row mt-5 {{ config('app.locale') == 'ar' ? ' flex-row-reverse' : ''}}">

      <div class="col-12 col-md-6  d-flex" data-aos="fade-up" data-aos-delay="300">
        <div class="box-feature mb-4 flex-fill">
          <div class=""><i class="bi bi-cone-striped" style="font-size: 3.5rem;"></i></div>
          <h4 class="text-secondary mb-3 font-weight-bold">
            {{__('academy.section-2-card-1-title')}}
          </h4>
          <p>
            {{__('academy.section-2-card-1-description')}}
          </p>
        </div>
      </div>
      <div class="col-12 col-md-6  d-flex" data-aos="fade-up" data-aos-delay="400">
        <div class="box-feature mb-4 flex-fill">
          <div class=""><i class="bi bi-heart-pulse-fill" style="font-size: 3.5rem;"></i></div>
          <h4 class="text-secondary mb-3 font-weight-bold">
            {{__('academy.section-2-card-2-title')}}
          </h4>
          <p>
            {{__('academy.section-2-card-2-description')}}
          </p>
        </div>
      </div>
      <div class="col-12 col-md-6  d-flex" data-aos="fade-up" data-aos-delay="500">
        <div class="box-feature mb-4 flex-fill">
          <div class=""><i class="bi bi-hand-thumbs-up-fill" style="font-size: 3.5rem;"></i></div>
          <h4 class="text-secondary mb-3 font-weight-bold">
            {{__('academy.section-2-card-3-title')}}
          </h4>
          <p>
            {{__('academy.section-2-card-3-description')}}
          </p>
        </div>
      </div>
      <div class="col-12 col-md-6  d-flex" data-aos="fade-up" data-aos-delay="300">
        <div class="box-feature mb-4 flex-fill">
          <div class=""><i class="bi bi-person-lines-fill" style="font-size: 3.5rem;"></i></div>
          <h4 class="text-secondary mb-3 font-weight-bold">
            {{__('academy.section-2-card-4-title')}}
          </h4>
          <p>
            {{__('academy.section-2-card-4-description')}}
          </p>
        </div>
      </div>


    </div>
  </div>
</section>


<section class="section pt-0 {{config('app.locale') == 'ar' ? 'text-end' : '' }}" data-aos="fade-up" data-aos-delay="200">
  <div class="container">
    <h3>
      {{__('academy.section-3-title')}}
    </h3>
    <p>
      {{__('academy.section-3-p-1')}}
    </p>

    <div class="row mt-5">
      <div class="col-12  d-flex" data-aos="fade-up" data-aos-delay="300">
        <div class="box-feature mb-4 flex-fill">
          <div class=""><i class="bi bi-award-fill" style="font-size: 3.5rem;"></i></div>
          <h4 class="text-secondary mb-3 font-weight-bold">
            {{__('academy.section-3-card-1-title')}}
          </h4>
          <p>
            {{__('academy.section-3-card-1-description')}}
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Register-->
@include('partials/be-part')
<!-- ./ Register-->

@endsection