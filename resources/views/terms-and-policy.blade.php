@extends('layouts.app')

@section('content')
<section class="hero page-inner overlay register-hero-image" style="background-image: url('images/home/bg-hero.jpg');">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-9 text-center mt-5">
        <h1 class="heading font-bodoni text-uppercase" data-aos="fade-up">
          <span class="d-block">{{ __('terms.header-terms')}}</span>
          <span class="d-block">{{ __('terms.header-policies')}}</span>
        </h1>
      </div>
    </div>
  </div>
</section>

<!---- Terms and Conditions  ---->
<section dir="{{config('app.locale') == 'ar' ? 'rtl' : '' }}" class="section " data-aos="fade-up">
  <div class="container">
    <h2 class="text-center fw-bold h1 ">{{ __('terms.header-terms')}}</h2>

    <div>
      <p>{{ __('terms.date-updated')}} <span class="fw-bold text-primary">{{ __('terms.date')}}</span></p>
      <p>{{ __('terms.welcome')}}</p>
    </div>

    <hr>
    <!-- Section 01 -->
    <div class="mb-3">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-01-title')}}</h3>
      <p>{{ __('terms.section-01-caption')}}</p>

      <!-- Section 01 lists -->
      <div class="ps-2 mb-2">
        <p class="mb-1">
          <span class="fw-bold">
            {{ __('terms.section-01-list-01-title')}}
          </span>
          {{ __('terms.section-01-list-01-caption')}}
        </p>
        <p class="mb-1">
          <span class="fw-bold">
            {{ __('terms.section-01-list-02-title')}}
          </span>
          {{ __('terms.section-01-list-02-caption')}}
        </p>
        <p class="mb-1">
          <span class="fw-bold">
            {{ __('terms.section-01-list-03-title')}}
          </span>
          {{ __('terms.section-01-list-03-caption')}}
        </p>
        <p class="mb-1">
          <span class="fw-bold">
            {{ __('terms.section-01-list-04-title')}}
          </span>
          {{ __('terms.section-01-list-04-caption')}}
        </p>
        <p class="mb-1">
          <span class="fw-bold">
            {{ __('terms.section-01-list-05-title')}}
          </span>
          {{ __('terms.section-01-list-05-caption')}}
        </p>
        <p class="mb-1">
          <span class="fw-bold">
            {{ __('terms.section-01-list-06-title')}}
          </span>
          {{ __('terms.section-01-list-06-caption')}}
        </p>
        <p class="mb-1">
          <span class="fw-bold">
            {{ __('terms.section-01-list-07-title')}}
          </span>
          {{ __('terms.section-01-list-07-caption')}}
        </p>
        <p class="mb-1">
          <span class="fw-bold">
            {{ __('terms.section-01-list-08-title')}}
          </span>
          {{ __('terms.section-01-list-08-caption')}}
        </p>
        <p class="mb-1">
          <span class="fw-bold">
            {{ __('terms.section-01-list-09-title')}}
          </span>
          {{ __('terms.section-01-list-09-caption')}}
        </p>
        <p class="mb-1">
          <span class="fw-bold">
            {{ __('terms.section-01-list-10-title')}}
          </span>
          {{ __('terms.section-01-list-10-caption')}}
        </p>
        <p class="mb-1">
          <span class="fw-bold">
            {{ __('terms.section-01-list-11-title')}}
          </span>
          {{ __('terms.section-01-list-11-caption')}}
        </p>
        <p class="mb-1">
          <span class="fw-bold">
            {{ __('terms.section-01-list-12-title')}}
          </span>
          {{ __('terms.section-01-list-12-caption')}}
        </p>
      </div>
    </div>

    <!-- Section 02 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-02-title')}}</h3>
      <!-- Section 02 lists -->
      <ol>
        <li>{{ __('terms.section-02-list-01-caption')}}</li>
        <li>{{ __('terms.section-02-list-02-caption')}}</li>
        <li>{{ __('terms.section-02-list-03-caption')}}</li>
        <li>{{ __('terms.section-02-list-04-caption')}}</li>
        <li>{{ __('terms.section-02-list-05-caption')}}</li>
      </ol>
    </div>

    <!-- Section 03 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-03-title')}}</h3>
      <!-- Section 03 lists -->
      <ol>
        <li>{{ __('terms.section-03-list-01-caption')}}</li>
        <li>{{ __('terms.section-03-list-02-caption')}}</li>
      </ol>
    </div>

    <!-- Section 04 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-04-title')}}</h3>
      <!-- Section 04 lists -->
      <ol>
        <li>{{ __('terms.section-04-list-01-caption')}}</li>
        <li>{{ __('terms.section-04-list-02-caption')}}</li>
        <li>{{ __('terms.section-04-list-03-caption')}}</li>
        <li>{{ __('terms.section-04-list-04-caption')}}</li>
        <li>{{ __('terms.section-04-list-05-caption')}}</li>
      </ol>
    </div>

    <!-- Section 05 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-05-title')}}</h3>
      <!-- Section 05 lists -->
      <ol>
        <li>{{ __('terms.section-05-list-01-caption')}}</li>
        <li>{{ __('terms.section-05-list-02-caption')}}</li>
        <li>{{ __('terms.section-05-list-03-caption')}}</li>
        <li>{{ __('terms.section-05-list-04-caption')}}</li>
        <li>{{ __('terms.section-05-list-05-caption')}}</li>
      </ol>
    </div>

    <!-- Section 06 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-06-title')}}</h3>
      <p>{{ __('terms.section-06-caption')}}</p>
      <!-- Section 06 lists -->
      <ol>
        <li>{{ __('terms.section-06-list-01-caption')}}</li>
        <li>{{ __('terms.section-06-list-02-caption')}}</li>
        <li>{{ __('terms.section-06-list-03-caption')}}</li>
      </ol>
    </div>

    <!-- Section 07 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-07-title')}}</h3>

      <!-- Section 07 lists -->
      <ol>
        <li>{{ __('terms.section-07-list-01-caption')}}</li>
        <li>{{ __('terms.section-07-list-02-caption')}}</li>
        <li>{{ __('terms.section-07-list-03-caption')}}</li>
        <li>{{ __('terms.section-07-list-04-caption')}}</li>
        <li>{{ __('terms.section-07-list-05-caption')}}</li>
        <li>{{ __('terms.section-07-list-06-caption')}}</li>
        <li>{{ __('terms.section-07-list-07-caption')}}</li>
        <li>{{ __('terms.section-07-list-08-caption')}}</li>
      </ol>
    </div>

    <!-- Section 08 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-08-title')}}</h3>

      <!-- Section 08 lists -->
      <ol>
        <li>{{ __('terms.section-08-list-01-caption')}}</li>
        <li>{{ __('terms.section-08-list-02-caption')}}</li>
        <li>{{ __('terms.section-08-list-03-caption')}}</li>
      </ol>
    </div>

    <!-- Section 08 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-08-title')}}</h3>

      <!-- Section 08 lists -->
      <ol>
        <li>{{ __('terms.section-08-list-01-caption')}}</li>
        <li>{{ __('terms.section-08-list-02-caption')}}</li>
        <li>{{ __('terms.section-08-list-03-caption')}}</li>
      </ol>
    </div>


    <!-- Section 09 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-09-title')}}</h3>
      <p>{{ __('terms.section-09-caption')}}</p>

      <!-- Section 09 lists -->
      <ol>
        <li>{{ __('terms.section-09-list-01-caption')}}</li>
        <li>{{ __('terms.section-09-list-02-caption')}}</li>
        <li>{{ __('terms.section-09-list-03-caption')}}</li>
        <li>{{ __('terms.section-09-list-04-caption')}}</li>
        <li>{{ __('terms.section-09-list-05-caption')}}</li>
        <li>{{ __('terms.section-09-list-06-caption')}}</li>
        <li>{{ __('terms.section-09-list-07-caption')}}</li>
        <li>{{ __('terms.section-09-list-08-caption')}}</li>
        <li>{{ __('terms.section-09-list-09-caption')}}</li>
        <li>{{ __('terms.section-09-list-10-caption')}}</li>
        <li>{{ __('terms.section-09-list-11-caption')}}</li>
        <li>{{ __('terms.section-09-list-12-caption')}}</li>
        <li>{{ __('terms.section-09-list-13-caption')}}</li>
        <li>{{ __('terms.section-09-list-14-caption')}}</li>
      </ol>
    </div>


    <!-- Section 10 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-10-title')}}</h3>

      <!-- Section 10 lists -->
      <ol>
        <li>{{ __('terms.section-10-list-01-caption')}}</li>
        <li>{{ __('terms.section-10-list-02-caption')}}</li>
        <li>{{ __('terms.section-10-list-03-caption')}}</li>
        <li>{{ __('terms.section-10-list-04-caption')}}</li>
        <li>{{ __('terms.section-10-list-05-caption')}}</li>
        <li>{{ __('terms.section-10-list-06-caption')}}</li>
        <li>{{ __('terms.section-10-list-07-caption')}}</li>
        <li>{{ __('terms.section-10-list-08-caption')}}</li>
        <li>{{ __('terms.section-10-list-09-caption')}}</li>
        <li>{{ __('terms.section-10-list-10-caption')}}</li>
        <li>{{ __('terms.section-10-list-11-caption')}}</li>
        <li>{{ __('terms.section-10-list-12-caption')}}</li>
        <li>{{ __('terms.section-10-list-13-caption')}}</li>
        <li>{{ __('terms.section-10-list-14-caption')}}</li>
        <li>{{ __('terms.section-10-list-15-caption')}}</li>
        <li>{{ __('terms.section-10-list-16-caption')}}</li>
        <li>{{ __('terms.section-10-list-17-caption')}}</li>
        <li>{{ __('terms.section-10-list-18-caption')}}</li>
      </ol>
    </div>


    <!-- Section 11 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-11-title')}}</h3>
      <p>{{ __('terms.section-11-caption')}}</p>

      <!-- Section 11 lists -->
      <ol>
        <li>{{ __('terms.section-11-list-01-caption')}}</li>
        <li>{{ __('terms.section-11-list-02-caption')}}</li>
        <li>{{ __('terms.section-11-list-03-caption')}}</li>
        <li>{{ __('terms.section-11-list-04-caption')}}</li>
        <li>{{ __('terms.section-11-list-05-caption')}}</li>
        <li>{{ __('terms.section-11-list-06-caption')}}</li>
        <li>{{ __('terms.section-11-list-07-caption')}}</li>
        <li>{{ __('terms.section-11-list-08-caption')}}</li>
        <li>{{ __('terms.section-11-list-09-caption')}}</li>
        <li>{{ __('terms.section-11-list-10-caption')}}</li>
        <li>{{ __('terms.section-11-list-11-caption')}}</li>
        <li>{{ __('terms.section-11-list-12-caption')}}</li>
        <li>{{ __('terms.section-11-list-13-caption')}}</li>
        <li>{{ __('terms.section-11-list-14-caption')}}</li>
      </ol>
    </div>


    <!-- Section 12 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-12-title')}}</h3>
      <!-- Section 12 lists -->
      <ol>
        <li>{{ __('terms.section-12-list-01-caption')}}</li>
        <li>{{ __('terms.section-12-list-02-caption')}}</li>
        <li>{{ __('terms.section-12-list-03-caption')}}</li>
        <li>{{ __('terms.section-12-list-04-caption')}}</li>
        <li>{{ __('terms.section-12-list-05-caption')}}</li>
        <li>{{ __('terms.section-12-list-06-caption')}}</li>
        <li>{{ __('terms.section-12-list-07-caption')}}</li>
      </ol>
    </div>


    <!-- Section 13 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-13-title')}}</h3>
      <!-- Section 12 lists -->
      <ol>
        <li>{{ __('terms.section-13-list-01-caption')}}</li>
        <li>{{ __('terms.section-13-list-02-caption')}}</li>
        <li>{{ __('terms.section-13-list-03-caption')}}</li>
        <li>{{ __('terms.section-13-list-04-caption')}}</li>
        <li>{{ __('terms.section-13-list-05-caption')}}</li>
      </ol>
    </div>



    <!-- Section 14 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-14-title')}}</h3>
      <p>{{ __('terms.section-14-caption')}}</p>
      <!-- Section 14 no lists -->
    </div>



    <!-- Section 15 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0 ">{{ __('terms.section-15-title')}}</h3>
      <!-- Section 15 lists -->
      <ol>
        <li>{{ __('terms.section-15-list-01-caption')}}</li>
        <li>{{ __('terms.section-15-list-02-caption')}}</li>
        <li>{{ __('terms.section-15-list-03-caption')}}</li>
        <li>{{ __('terms.section-15-list-04-caption')}}</li>
        <li>{{ __('terms.section-15-list-05-caption')}}</li>
        <li>{{ __('terms.section-15-list-06-caption')}}</li>
      </ol>
    </div>


    <!-- Section 16 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-16-title')}}</h3>
      <!-- Section 16 lists -->
      <ol>
        <li>{{ __('terms.section-16-list-01-caption')}}</li>
        <li>{{ __('terms.section-16-list-02-caption')}}</li>
        <li>{{ __('terms.section-16-list-03-caption')}}</li>
        <li>{{ __('terms.section-16-list-04-caption')}}</li>
      </ol>
    </div>


    <!-- Section 17 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-17-title')}}</h3>
      <!-- Section 17 lists -->
      <ol>
        <li>{{ __('terms.section-17-list-01-caption')}}</li>
        <li>{{ __('terms.section-17-list-02-caption')}}</li>
        <li>{{ __('terms.section-17-list-03-caption')}}</li>
        <li>{{ __('terms.section-17-list-04-caption')}}</li>
      </ol>
    </div>


    <!-- Section 18 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-18-title')}}</h3>
      <!-- Section 18 lists -->
      <ol>
        <li>{{ __('terms.section-18-list-01-caption')}}</li>
        <li>{{ __('terms.section-18-list-02-caption')}}</li>
        <li>{{ __('terms.section-18-list-03-caption')}}</li>
        <li>{{ __('terms.section-18-list-04-caption')}}</li>
        <li>{{ __('terms.section-18-list-05-caption')}}</li>
        <li>{{ __('terms.section-18-list-06-caption')}}</li>
        <li>{{ __('terms.section-18-list-07-caption')}}</li>
        <li>{{ __('terms.section-18-list-08-caption')}}</li>
        <li>{{ __('terms.section-18-list-09-caption')}}</li>
        <li>{{ __('terms.section-18-list-10-caption')}}</li>
      </ol>
    </div>


    <!-- Section 19 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-19-title')}}</h3>

      <!-- Section 19 lists -->
      <ol>
        <li>{{ __('terms.section-19-list-01-caption')}}</li>
        <li>{{ __('terms.section-19-list-02-caption')}}</li>
        <li>{{ __('terms.section-19-list-03-caption')}}</li>
        <li>{{ __('terms.section-19-list-04-caption')}}</li>
      </ol>
    </div>


    <!-- Section 20 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-20-title')}}</h3>

      <!-- Section 20 lists -->
      <ol>
        <li>{{ __('terms.section-20-list-01-caption')}}</li>
        <li>{{ __('terms.section-20-list-02-caption')}}</li>
        <li>{{ __('terms.section-20-list-03-caption')}}</li>
      </ol>
    </div>


    <!-- Section 21 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-21-title')}}</h3>

      <!-- Section 21 lists -->
      <ol>
        <li>{{ __('terms.section-21-list-01-caption')}}</li>
        <li>{{ __('terms.section-21-list-02-caption')}}</li>
        <li>{{ __('terms.section-21-list-03-caption')}}</li>
        <li>{{ __('terms.section-21-list-04-caption')}}</li>
        <li>{{ __('terms.section-21-list-05-caption')}}</li>
        <li>{{ __('terms.section-21-list-06-caption')}}</li>
        <li>{{ __('terms.section-21-list-07-caption')}}</li>
      </ol>
    </div>


    <!-- Section 22 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-22-title')}}</h3>

      <!-- Section 22 lists -->
      <ol>
        <li>{{ __('terms.section-22-list-01-caption')}}</li>
        <li>{{ __('terms.section-22-list-02-caption')}}</li>
        <li>{{ __('terms.section-22-list-03-caption')}}</li>
        <li>{{ __('terms.section-22-list-04-caption')}}</li>
        <li>{{ __('terms.section-22-list-05-caption')}}</li>
        <li>{{ __('terms.section-22-list-06-caption')}}</li>
        <li>{{ __('terms.section-22-list-07-caption')}}</li>
      </ol>
    </div>


    <!-- Section 23 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-23-title')}}</h3>

      <!-- Section 23 lists -->
      <ol>
        <li>{{ __('terms.section-23-list-01-caption')}}</li>
        <li>{{ __('terms.section-23-list-02-caption')}}</li>
      </ol>
    </div>


    <!-- Section 24 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-24-title')}}</h3>

      <!-- Section 24 lists -->
      <ol>
        <li>{{ __('terms.section-24-list-01-caption')}}</li>
        <li>{{ __('terms.section-24-list-02-caption')}}</li>
        <li>{{ __('terms.section-24-list-03-caption')}}</li>
      </ol>
    </div>


    <!-- Section 25 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-25-title')}}</h3>

      <!-- Section 25 lists -->
      <ol>
        <li>{{ __('terms.section-25-list-01-caption')}}</li>
        <li>{{ __('terms.section-25-list-02-caption')}}</li>
      </ol>
    </div>


    <!-- Section 26 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-26-title')}}</h3>

      <!-- Section 26 lists -->
      <ol>
        <li>{{ __('terms.section-26-list-01-caption')}}</li>
        <li>{{ __('terms.section-26-list-02-caption')}}</li>
      </ol>
    </div>


    <!-- Section 27 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-27-title')}}</h3>

      <!-- Section 27 lists -->
      <ol>
        <li>{{ __('terms.section-27-list-01-caption')}}</li>
        <li>{{ __('terms.section-27-list-02-caption')}}</li>
        <li>{{ __('terms.section-27-list-03-caption')}}</li>
      </ol>
    </div>


    <!-- Section 28 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-28-title')}}</h3>

      <!-- Section 28 lists -->
      <ol>
        <li>{{ __('terms.section-28-list-01-caption')}}</li>
        <li>{{ __('terms.section-28-list-02-caption')}}</li>
      </ol>
    </div>


    <!-- Section 29 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-29-title')}}</h3>

      <!-- Section 29 lists -->
      <ol>
        <li>{{ __('terms.section-29-list-01-caption')}}</li>
        <li>{{ __('terms.section-29-list-02-caption')}}</li>
        <li>{{ __('terms.section-29-list-03-caption')}}</li>
        <li>{{ __('terms.section-29-list-04-caption')}}</li>
        <li>{{ __('terms.section-29-list-05-caption')}}</li>
        <li>{{ __('terms.section-29-list-06-caption')}}</li>
        <li>{{ __('terms.section-29-list-07-caption')}}</li>
        <li>{{ __('terms.section-29-list-08-caption')}}</li>
      </ol>
    </div>

    <!-- Section 30 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-30-title')}}</h3>

      <!-- Section 30 lists -->
      <ol>
        <li>{{ __('terms.section-30-list-01-caption')}}</li>
        <li>{{ __('terms.section-30-list-02-caption')}}</li>
        <li>{{ __('terms.section-30-list-03-caption')}}</li>
        <li>{{ __('terms.section-30-list-04-caption')}}</li>
        <li>{{ __('terms.section-30-list-05-caption')}}</li>
        <li>{{ __('terms.section-30-list-06-caption')}}</li>
        <li>{{ __('terms.section-30-list-07-caption')}}</li>
        <li>{{ __('terms.section-30-list-08-caption')}}</li>
        <li>{{ __('terms.section-30-list-09-caption')}}</li>
        <li>{{ __('terms.section-30-list-10-caption')}}</li>
        <li>{{ __('terms.section-30-list-11-caption')}}</li>
      </ol>
    </div>

    <!-- Section 31 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-31-title')}}</h3>

      <!-- Section 31 lists -->
      <ol>
        <li>{{ __('terms.section-31-list-01-caption')}}</li>
        <li>{{ __('terms.section-31-list-02-caption')}}</li>
        <li>{{ __('terms.section-31-list-03-caption')}}</li>
      </ol>
    </div>

    <!-- Section 32 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-32-title')}}</h3>

      <!-- Section 32 lists -->
      <ol>
        <li>{{ __('terms.section-32-list-01-caption')}}</li>
        <li>{{ __('terms.section-32-list-02-caption')}}</li>
      </ol>
    </div>

    <!-- Section 33 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-33-title')}}</h3>

      <!-- Section 33 lists -->
      <ol>
        <li>{{ __('terms.section-33-list-01-caption')}}</li>
        <li>{{ __('terms.section-33-list-02-caption')}}</li>
        <li>{{ __('terms.section-33-list-03-caption')}}</li>
      </ol>
    </div>

    <!-- Section 34 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-34-title')}}</h3>
      <p>{{ __('terms.section-34-caption')}}</p>

      <!-- Section 34 no lists -->
    </div>


    <!-- Section 35 -->
    <div class="mb-2">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('terms.section-35-title')}}</h3>

      <!-- Section 35 lists -->
      <ol>
        <li>{{ __('terms.section-35-list-01-caption')}}</li>
        <li>{{ __('terms.section-35-list-02-caption')}}</li>
      </ol>
    </div>
  </div>
</section>
<!---- ./ Terms and Conditions  ---->

<!---- Policies  ---->
<section dir="{{config('app.locale') == 'ar' ? 'rtl' : '' }}" class="section " data-aos="fade-up">
  <div class="container">
    <h2 class="text-center fw-bold h1 ">{{ __('policy.header-policies')}}</h2>
    <p>{{ __('policy.date-updated')}} <span class="fw-bold text-primary">{{ __('policy.date')}}</span></p>

    <hr>

    <!-- Introduction -->
    <div class="introduction mb-3">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('policy.introduction-header')}}</h3>
      <p class="mb-1">
        {{ __('policy.introduction-caption-01')}}
      </p>
      <p class="mb-1">
        {{ __('policy.introduction-caption-02')}}
      </p>
      <p class="mb-1">
        {{ __('policy.introduction-caption-03')}}
      </p>
      <p class="mb-1">
        {{ __('policy.introduction-caption-04')}}
      </p>
    </div>


    <!-- Section 1: Definitions-->
    <div class="mb-3">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('policy.section-01-title')}}</h3>
      <p>{{ __('policy.section-01-caption')}}</p>

      <!-- Section 01 lists -->
      <div class="ps-2 mb-2">
        <p class="mb-1">
          <span class="fw-bold">
            {{ __('policy.section-01-list-01-title')}}
          </span>
          {{ __('policy.section-01-list-01-caption')}}
        </p>
        <p class="mb-1">
          <span class="fw-bold">
            {{ __('policy.section-01-list-02-title')}}
          </span>
          {{ __('policy.section-01-list-02-caption')}}
        </p>
        <p class="mb-1">
          <span class="fw-bold">
            {{ __('policy.section-01-list-03-title')}}
          </span>
          {{ __('policy.section-01-list-03-caption')}}
        </p>
        <p class="mb-1">
          <span class="fw-bold">
            {{ __('policy.section-01-list-04-title')}}
          </span>
          {{ __('policy.section-01-list-04-caption')}}
        </p>
      </div>
    </div>

    <!-- Section 2: Legal Competence -->
    <div class="mb-3">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('policy.section-02-title')}}</h3>
      <!-- Section 02 lists -->
      <ol>
        <li>{{ __('policy.section-02-list-01-caption')}}</li>
        <li>{{ __('policy.section-02-list-02-caption')}}</li>
        <li>{{ __('policy.section-02-list-03-caption')}}</li>
        <li>{{ __('policy.section-02-list-04-caption')}}</li>
        <li>{{ __('policy.section-02-list-05-caption')}}</li>
      </ol>
    </div>

    <!-- Section 3: Consent -->
    <div class="mb-3">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('policy.section-03-title')}}</h3>
      <p>{{ __('policy.section-03-caption')}}</p>
      <!-- Section 03 no lists -->
    </div>

    <!-- Section 4: Data we collect about you -->
    <div class="mb-3">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('policy.section-04-title')}}</h3>
      <p>{{ __('policy.section-04-caption')}}</p>
      <!-- Section 04 lists -->

      <ol>
        <li class="mb-2">
          <p class="fw-bold mb-1">{{ __('policy.section-04-list-01-header')}}</p>
          <ol>
            <li> {{ __('policy.section-04-list-01-caption-list-01')}}</li>
            <li> {{ __('policy.section-04-list-01-caption-list-02')}}</li>
            <li> {{ __('policy.section-04-list-01-caption-list-03')}}</li>
          </ol>
        </li>

        <li class="mb-2">
          <p class="fw-bold mb-1">{{ __('policy.section-04-list-02-header')}}</p>
          <ol>
            <li> {{ __('policy.section-04-list-02-caption-list-01')}}</li>
            <li> {{ __('policy.section-04-list-02-caption-list-02')}}</li>
          </ol>
        </li>

        <li class="mb-2">
          <p class="fw-bold mb-1">{{ __('policy.section-04-list-03-header')}}</p>
          <ol>
            <li> {{ __('policy.section-04-list-03-caption-list-01')}}</li>
            <li> {{ __('policy.section-04-list-03-caption-list-02')}}</li>
            <li> {{ __('policy.section-04-list-03-caption-list-03')}}</li>
          </ol>
        </li>

        <li class="mb-2">
          <p class="fw-bold mb-1">{{ __('policy.section-04-list-04-header')}}</p>
          <ol>
            <li> {{ __('policy.section-04-list-04-caption-list-01')}}</li>
            <li> {{ __('policy.section-04-list-04-caption-list-02')}}</li>
          </ol>
        </li>

        <li class="mb-2">
          <p class="fw-bold mb-1">{{ __('policy.section-04-list-05-header')}}</p>
          <p class="ms-2">{{ __('policy.section-04-list-05-caption')}}</p>
        </li>

        <li class="mb-2">
          <p class="fw-bold mb-1">{{ __('policy.section-04-list-06-header')}}</p>
          <p class="ms-2">{{ __('policy.section-04-list-06-caption')}}</p>
        </li>
      </ol>
    </div>

    <!-- Section 5: Cookies Policy-->
    <div class="mb-3">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('policy.section-05-title')}}</h3>
      <p>{{ __('policy.section-05-caption')}}</p>
      <!-- Section 03 no lists -->
    </div>

    <!-- Section 6: Limits of our use of your data-->
    <div class="mb-3">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('policy.section-06-title')}}</h3>
      <p>{{ __('policy.section-06-caption')}}</p>
      <!-- Section 06 lists -->
      <ol>
        <li>{{ __('policy.section-06-list-01-caption')}}</li>
        <li>{{ __('policy.section-06-list-02-caption')}}</li>
        <li>{{ __('policy.section-06-list-03-caption')}}</li>
        <li>{{ __('policy.section-06-list-04-caption')}}</li>
        <li>{{ __('policy.section-06-list-05-caption')}}</li>
        <li>{{ __('policy.section-06-list-06-caption')}}</li>
        <li>{{ __('policy.section-06-list-07-caption')}}</li>
        <li>{{ __('policy.section-06-list-08-caption')}}</li>
      </ol>
    </div>

    <!-- Section 7: Agreeing on communications and notifications -->
    <div class="mb-3">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('policy.section-07-title')}}</h3>
      <p>{{ __('policy.section-07-caption')}}</p>
      <!-- Section 07 no lists -->
    </div>

    <!-- Section 8: Disclosure of your data -->
    <div class="mb-3">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('policy.section-08-title')}}</h3>
      <p>{{ __('policy.section-08-caption')}}</p>
      <!-- Section 08 lists -->
      <ol>
        <li>{{ __('policy.section-08-list-01-caption')}}</li>
        <li>{{ __('policy.section-08-list-02-caption')}}</li>
        <li>{{ __('policy.section-08-list-03-caption')}}</li>
        <li>{{ __('policy.section-08-list-04-caption')}}</li>
      </ol>
    </div>

    <!-- Section 9: Data storage -->
    <div class="mb-3">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('policy.section-09-title')}}</h3>
      <!-- Section 09 lists -->
      <ol>
        <li>{{ __('policy.section-09-list-01-caption')}}</li>
        <li>{{ __('policy.section-09-list-02-caption')}}</li>
      </ol>
    </div>

    <!-- Section 10: Sharing data with parties -->
    <div class="mb-3">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('policy.section-10-title')}}</h3>
      <p>{{ __('policy.section-10-caption')}}</p>
      <!-- Section 10 no lists -->
    </div>

    <!--  Section 11: Parties' obligations -->
    <div class="mb-3">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('policy.section-11-title')}}</h3>
      <p>{{ __('policy.section-11-caption')}}</p>
      <!-- Section 11 lists -->
      <ol>
        <li>{{ __('policy.section-11-list-01-caption')}}</li>
        <li>{{ __('policy.section-11-list-02-caption')}}</li>
        <li>{{ __('policy.section-11-list-03-caption')}}</li>
      </ol>
    </div>

    <!-- Section 12: Powers of The Parent Over the Data of Children -->
    <div class="mb-3">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('policy.section-12-title')}}</h3>
      <p>{{ __('policy.section-12-caption')}}</p>
      <!-- Section 12 no lists -->
    </div>

    <!--  Section 13: Updates -->
    <div class="mb-3">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('policy.section-13-title')}}</h3>
      <!-- Section 13 lists -->
      <ol>
        <li>{{ __('policy.section-13-list-01-caption')}}</li>
        <li>{{ __('policy.section-13-list-02-caption')}}</li>
        <li>{{ __('policy.section-13-list-03-caption')}}</li>
      </ol>
    </div>


    <!-- Section 14: Contact us-->
    <div class="mb-3">
      <h3 class="fw-bold h4 text-decoration-underline bg-body-secondary p-1 pb-0">{{ __('policy.section-14-title')}}</h3>
      <p>{{ __('policy.section-14-caption')}} <a href="/contact-us">{{ __('footer.contact-us')}}.</a></p>
      <!-- Section 14 no lists -->
    </div>

  </div>
</section>
<!---- ./ Policies  ---->

<!-- Register-->
@include('partials/be-part')
<!-- ./ Register-->


@endsection