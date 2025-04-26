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


<section class="section">
  <div class="container">
    <div class="text-center mb-4" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="h1 fw-bold">Meet Our Stars</h1>
      <p>Get to know the rising talents shaping the future of our team.</p>
    </div>

    <article id="IbrahimTouré" class="player  blue" data-aos="fade-right" data-aos-delay="200">
      <div class="player__img_link">
        <img class="player__img" src="images/players/Ibrahim-Toure.jpg"
          alt="Ibrahim Touré" loading="lazy" />
      </div>
      <div class="player__text">
        <h2 class="h2 player__title blue text-primary">Ibrahim Touré</h2>
        <div class="player__subtitle small text-dark">
          <time datetime="2025-4-21 12:00:00">
            <i class="bi bi-calendar3 me-2"></i>April 21 2025
          </time>
        </div>
        <div class="player__bar"></div>
        <div class="player__preview-txt">
          Ibrahim Touré is a promising young goalkeeper from Ivory Coast, currently playing for Genies FC. At just 14 years old, Ibrahim has already caught the attention of top clubs both locally and internationally due to his impressive skills and potential. Known for his excellent shot-stopping ability and exceptional footwork, he is often compared to top goalkeeper Thibaut Courtois, due to his calm and confident play with the ball at his feet.

          Ibrahim is part of the Ivory Coast U15 national team and will be participating in the upcoming Africa U15 Championship in Ghana next month, a significant opportunity for him to showcase his talent on a larger stage.

          His outstanding performances have drawn the interest of several top clubs in Ivory Coast, and many are excited to see his future progress. With his talent, dedication, and determination, Ibrahim Touré is certainly a young goalkeeper to watch in the coming years.
        </div>
        <ul class="player__tagbox">
          <li class="tag__item"><span class="text-primary fw-bold me-1">Position: </span> Goalkeeper</li>
          <li class="tag__item"><span class="text-primary fw-bold me-1">Height: </span> 184cm</li>
          <li class="tag__item"><span class="text-primary fw-bold me-1">Age: </span> 14</li>
          <li class="tag__item"><span class="text-primary fw-bold me-1">Club: </span> Genies FC</li>
          <li class="tag__item"><span class="text-primary fw-bold me-1">National Team: </span> Ivory Coast U15</li>
        </ul>
      </div>
    </article>
  </div>
</section>

<!-- Register-->
@include('partials/be-part')
<!-- ./ Register-->


@endsection