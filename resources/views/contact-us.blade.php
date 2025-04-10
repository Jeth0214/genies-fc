@extends('layouts.app')

@section('content')
<!-- Hero -->
<section class="hero page-inner overlay" style="background-image: url('images/home/bg-page-02.jpg');">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading font-bodoni text-uppercase" data-aos="fade-up">
                    <span class="d-block">{{ __('contact.header-01')}}</span>
                    <span class="d-block">{{ __('contact.header-02')}}</span>
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- /. Hero -->


<section class="section pb-2">
    <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-8">
                <h2 class="fw-bold heading text-primary mb-4">
                    {{ __('contact.title')}}
                </h2>
                <p class="text-black-50 text-uppercase">
                    {{ __('contact.content-01')}}
                </p>
            </div>
        </div>
        <div class="row  {{ config('app.locale') == 'ar' ? ' flex-row-reverse' : ''}}">
            <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-info text-primary">
                    <div class="address mt-2 row {{ config('app.locale') == 'ar' ? ' flex-row-reverse' : ''}}">
                        <div class="col-1 {{ config('app.locale') == 'ar' ? 'ps-0' : ''}}">
                            <i class="icon-room"></i>
                        </div>

                        <div class="col-11  {{ config('app.locale') == 'ar' ? 'text-end' : 'ps-4'}}">

                            <h4 class="mb-2">{{ __('contact.location')}}</h4>
                            <p>
                                {{ __('contact.address')}}
                            </p>
                        </div>
                    </div>

                    <div class="open-hours mt-4 row {{ config('app.locale') == 'ar' ? ' flex-row-reverse' : ''}}">
                        <div class="col-1 {{ config('app.locale') == 'ar' ? 'ps-0' : ''}}">

                            <i class="icon-clock-o"></i>
                        </div>
                        <div class="col-11 {{ config('app.locale') == 'ar' ? 'text-end' : 'ps-4'}}">

                            <h4 class="mb-2">{{ __('contact.hours')}}</h4>
                            <p>
                                {{ __('contact.days-value')}}<br />
                                {{ __('contact.hours-value')}}
                            </p>
                        </div>
                    </div>

                    <div class="email mt-4  row {{ config('app.locale') == 'ar' ? ' flex-row-reverse' : ''}}">
                        <div class="col-1 {{ config('app.locale') == 'ar' ? 'ps-0' : ''}}">

                            <i class=" icon-envelope"></i>
                        </div>
                        <div class="col-11 {{ config('app.locale') == 'ar' ? 'text-end' : 'ps-4'}}">

                            <h4 class="mb-2">{{ __('contact.email')}}</h4>
                            <p>
                                <a href="mailto:Geniesfcclub@gmail.com" target="_blank">Geniesfcclub@gmail.com</a>
                            </p>
                        </div>
                    </div>


                    <div class="phone mt-4 row {{ config('app.locale') == 'ar' ? ' flex-row-reverse' : ''}}">
                        <div class="col-1 {{ config('app.locale') == 'ar' ? 'ps-0' : ''}}">
                            <i class="icon-whatsapp"></i>
                        </div>
                        <div class="col-11 {{ config('app.locale') == 'ar' ? 'text-end' : 'ps-4'}}">
                            <h4 class="mb-2">{{ __('contact.whatsapp')}}</h4>
                            <p>
                                <a href="https://api.whatsapp.com/send?phone=966538884046" target="_blank">{{__('contact.whatsapp-value')}}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
                <h2 class="{{ config('app.locale') == 'ar' ? 'text-end' : 'text-center'}}">{{ __('contact.map-header')}}</h2>
                <hr />

                <div class="contact-us-form-container">
                    <form method="POST" method="/send-contact-us" class="contact-us-form needs-validation {{ config('app.locale') == 'ar' ? 'text-end' : ''}}" id="contact-us-form">
                        <div class="form-group">
                            <label class="form-label">{{ __('contact.name-label')}}<span class="text-danger">*</span></label>
                            <input type="text" name="fullname" class="form-control {{ config('app.locale') == 'ar' ? 'text-end' : ''}}" placeholder="{{ __('contact.name-placeholder')}}" maxlength="100" aria-describedby="fullname-feedback" />
                            <div class="invalid-feedback" id="fullname-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">{{ __('contact.email-label')}}<span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control {{ config('app.locale') == 'ar' ? 'text-end' : ''}}" placeholder="{{ __('contact.email-placeholder')}}" maxlength="150" />
                            <div class="invalid-feedback" id="email-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">{{ __('contact.phone-label')}}<span class="text-danger">*</span></label>
                            <input type="number" name="phone" class="form-control {{ config('app.locale') == 'ar' ? 'text-end' : ''}}" placeholder="{{ __('contact.phone-placeholder')}}" maxlength="13" />
                            <div class="invalid-feedback" id="phone-feedback"></div>
                        </div>
                        <div class="form-group ">
                            <label class="form-label">{{ __('contact.message-label')}}<span class="text-danger">*</span></label>
                            <!-- <div id="messageHint" class="d-inline float-right"><span id="message-max-char">2000</span> characters left</div> -->
                            <textarea rows="5" name="message" class="form-control {{ config('app.locale') == 'ar' ? 'text-end' : ''}}" placeholder="{{ __('contact.message-placeholder')}}" maxlength="2000"></textarea>
                            <div class="invalid-feedback" id="message-feedback"></div>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-secondary fw-bold" id="contact-us-submit-button">{{ __('contact.submit-btn')}}</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="row my-2" data-aos="fade-up" data-aos-delay="100">
            <div class="mt-3  overflow-hidden">
                <iframe title="Danah Business Tower , second floor , Olaya, Al Khobar" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d254.0103158227518!2d50.17712532032937!3d26.29050712399363!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e49e7d41d1b940d%3A0xd3c6c940cd47e0b1!2sDanah%20Business%20Tower!5e1!3m2!1sen!2ssa!4v1734399809432!5m2!1sen!2ssa" width="inherit" height="500" class="w-100  border-primary border-4 rounded" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </div>
</section>

<section>
    <!-- Register-->
    @include('partials/be-part')
    <!-- ./ Register-->
</section>

<!=========================== SUCCESS TOASTER===============================>
    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div class="toast text-bg-success {{ config('app.locale') == 'ar' ? 'text-end' : ''}}" id="successToaster" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header text-right text-bg-success text-light">
                <strong class="me-auto">{{ __('contact.toaster-success-header')}}</strong>

                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body text-light">
                <p>{{ __('contact.toaster-success-message')}}</p>
            </div>
        </div>
    </div>
    <!=========================== END OF SUCCESS TOASTER===============================>

        <!=========================== FAILED TOASTER===============================>
            <div class="toast-container position-fixed top-0 end-0 p-3">
                <div class="toast text-bg-danger {{ config('app.locale') == 'ar' ? 'text-end' : ''}}" id="failedToaster" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header text-right text-bg-danger text-light">
                        <strong class="me-auto ">{{ __('contact.toaster-fail-header')}}</strong>

                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body text-light">
                        <p><span class="fw-bold">{{ __('contact.toaster-fail-status')}}</span> <span id="error-status"></span></p>
                        <p>{{ __('contact.toaster-fail-message')}}</p>
                    </div>
                </div>
            </div>
            <!=========================== END OF FAILED TOASTER===============================>

                @endsection