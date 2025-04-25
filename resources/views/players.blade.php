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

<section class="dark section sec-testimonials" data-aos="fade-up" data-aos-delay="100">
  <div class="container py-4">
    <div class="text-center text-white" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="h1 text-white fw-bold" id="pageHeaderTitle">Meet Our Stars</h1>
      <p>Get to know the rising talents shaping the future of our team.</p>
    </div>

    <article class="postcard dark blue mt-4">
      <a class="postcard__img_link" href="#">
        <img class="postcard__img" src="images/players/Ibrahim Touré.jpg"
          alt="Ibrahim Touré" />
      </a>
      <div class="postcard__text">
        <h2 class="postcard__title blue text-">Ibrahim Touré</h2>
        <div class="postcard__subtitle small">
          <time datetime="2020-05-25 12:00:00">
            <i class="fas fa-calendar-alt mr-2"></i>April 21 2025
          </time>
        </div>
        <div class="postcard__bar"></div>
        <div class="postcard__preview-txt">
          Ibrahim Touré is a promising young goalkeeper from Ivory Coast, currently playing for Genies FC. At just 14 years old, Ibrahim has already caught the attention of top clubs both locally and internationally due to his impressive skills and potential. Known for his excellent shot-stopping ability and exceptional footwork, he is often compared to top goalkeeper Thibaut Courtois, due to his calm and confident play with the ball at his feet.

          Ibrahim is part of the Ivory Coast U15 national team and will be participating in the upcoming Africa U15 Championship in Ghana next month, a significant opportunity for him to showcase his talent on a larger stage.

          His outstanding performances have drawn the interest of several top clubs in Ivory Coast, and many are excited to see his future progress. With his talent, dedication, and determination, Ibrahim Touré is certainly a young goalkeeper to watch in the coming years.
        </div>
        <ul class="postcard__tagbox">
          <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
          <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
          <li class="tag__item play blue">
            <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
          </li>
        </ul>
      </div>
    </article>
  </div>
</section>

<section class="light">
  <div class="container py-2">
    <div class="h1 text-center text-dark" id="pageHeaderTitle">My Cards Light</div>

    <article class="postcard light blue mt-4">
      <a class="postcard__img_link" href="#">
        <img class="postcard__img" src="images/players/Ibrahim Touré.jpg"
          alt="Ibrahim Touré" />
      </a>
      <div class="postcard__text">
        <h2 class="h2 postcard__title blue text-dark">Ibrahim Touré</h2>
        <div class="postcard__subtitle small text-dark">
          <time datetime="2020-05-25 12:00:00">
            <i class="fas fa-calendar-alt mr-2"></i>April 21 2025
          </time>
        </div>
        <div class="postcard__bar"></div>
        <div class="postcard__preview-txt text-dark">
          Ibrahim Touré is a promising young goalkeeper from Ivory Coast, currently playing for Genies FC. At just 14 years old, Ibrahim has already caught the attention of top clubs both locally and internationally due to his impressive skills and potential. Known for his excellent shot-stopping ability and exceptional footwork, he is often compared to top goalkeeper Thibaut Courtois, due to his calm and confident play with the ball at his feet.

          Ibrahim is part of the Ivory Coast U15 national team and will be participating in the upcoming Africa U15 Championship in Ghana next month, a significant opportunity for him to showcase his talent on a larger stage.

          His outstanding performances have drawn the interest of several top clubs in Ivory Coast, and many are excited to see his future progress. With his talent, dedication, and determination, Ibrahim Touré is certainly a young goalkeeper to watch in the coming years.
        </div>
        <ul class="postcard__tagbox">
          <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
          <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
          <li class="tag__item play blue">
            <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
          </li>
        </ul>
      </div>
  </div>
</section>

<!-- Register-->
@include('partials/be-part')
<!-- ./ Register-->


@endsection