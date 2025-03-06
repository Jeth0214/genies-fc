<!-- Register-->
<section class="section pb-0">
  <div class="row justify-content-center footer-cta" data-aos="fade-up">
    <div class="col-lg-7 mx-auto text-center">
      <h2 class="mb-4">{{ __('global.be-part-title') }}</h2>
      <div>
        @if (Request::path() != 'registration')
        <a href="/registration" class="btn btn-secondary text-primary  btn-large fw-bold py-3 px-4">{{ __('global.register-btn') }}</a>
        @endif
        @if (Request::path() != 'contact-us')
        <a href="/contact-us" class="btn btn-primary text-white  btn-large fw-bold py-3 px-4">{{ __('global.contact-btn') }}</a>
        @endif

      </div>
    </div>
    <!-- /.col-lg-7 -->
  </div>
  <!-- /.row -->

  <div class="row justify-content-center footer-cta mt-5 px-3" data-aos="fade-up">
    <div class="col-lg-9 mx-auto text-center text-uppercase">
      <h3 class="mb-4 h5">
        {{ __('contact.content-02')}}
      </h3>
    </div>
  </div>
</section>
<!-- ./ Register-->