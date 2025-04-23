@extends('layouts.app')

@section('content')

<!-- Hero -->
<section class="hero page-inner overlay" style="background-image: url('images/home/bg-page-02.jpg');">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-9 text-center mt-5">
        <h1 class="heading font-bodoni text-uppercase" data-aos="fade-up">
          {{ __('nav.players')}}
      </div>
    </div>
  </div>
</section>
<!-- /. Hero -->

<!-- Register-->
@include('partials/be-part')
<!-- ./ Register-->


@endsection