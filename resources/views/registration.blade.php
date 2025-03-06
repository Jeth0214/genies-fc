@extends('layouts.app')

@section('content')
<section class="register-container">
    <div class="hero page-inner overlay register-hero-image" style="background-image: url('images/home/bg-hero.jpg');">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading font-bodoni text-uppercase" data-aos="fade-up">
                        <span class="d-block">{{ __('registration.title-01')}}</span>
                        <span class="d-block">{{ __('registration.title-02')}}</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>

<!=========================== REGISTRATION FORM===============================>
    <section class="section registration-main-content" data-aos="fade-up">
        <div class="container register-container">
            <div class="row ">
                <div class="col-md-8 mx-auto col-sm-12" data-aos="fade-up">
                    <h2 class="fw-bold mb-5 text-center">{{ __('registration.form-header')}}</h2>

                    <div class="upload-form-container border border-primary p-4 rounded shadow ">
                        <h3 class="fw-bold mt-3 {{ config('app.locale') == 'ar' ? 'text-end' : ''}}">{{ __('registration.form-name')}}</h3>
                        <form method="POST" id="registrationForm" class="upload-form mt-5 mb-3" action="/register-player">
                            @csrf
                            <div class="row {{ config('app.locale') == 'ar' ? ' flex-row-reverse' : ''}}">
                                <div class="col-12 col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="player" class="form-label text-primary {{ config('app.locale') == 'ar' ? 'd-flex flex-row-reverse' : ''}}">{{ __('registration.label-player')}} <span class="text-danger">*</span></label>
                                        <input id="player" type="text" name="player" class="form-control" maxlength="100" aria-describedby="player-feedback" />
                                        <div class="invalid-feedback {{ config('app.locale') == 'ar' ? 'text-end' : ''}}" id="player-feedback"></div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="id" class="form-label  text-primary {{ config('app.locale') == 'ar' ? 'd-flex flex-row-reverse' : ''}}">{{ __('registration.label-id')}} <span class="text-danger">*</span></label>
                                        <input id="id" type="number" name="id" class="form-control" maxlength="30" aria-describedby="id-feedback" />
                                        <div class="invalid-feedback {{ config('app.locale') == 'ar' ? 'text-end' : ''}}" id="id-feedback"></div>
                                    </div>

                                    <label for="bloodType" class="form-label  text-primary {{ config('app.locale') == 'ar' ? 'd-flex flex-row-reverse' : ''}}">{{ __('registration.label-blood')}} <span class="text-danger">*</span></label>
                                    <select id="bloodType" name="bloodType" class="form-select form-select-lg  mb-3" aria-label="Blood Type" aria-describedby="bloodType-feedback">
                                        <option selected disabled></option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                    <div class="invalid-feedback {{ config('app.locale') == 'ar' ? 'text-end' : ''}}" id="bloodType-feedback"></div>
                                </div>


                                <div class="col-12 col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="phone" class="form-label  text-primary {{ config('app.locale') == 'ar' ? 'd-flex flex-row-reverse' : ''}}">{{ __('registration.label-phone')}} <span class="text-danger">*</span></label>
                                        <input id="phone" type="number" name="phone" class="form-control" maxlength="13" aria-describedby="phone-feedback" />
                                        <div class="invalid-feedback {{ config('app.locale') == 'ar' ? 'text-end' : ''}}" id="phone-feedback"></div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="age" class="form-label  text-primary {{ config('app.locale') == 'ar' ? 'd-flex flex-row-reverse' : ''}}">{{ __('registration.label-age')}} <span class="text-danger">*</span></label>
                                        <input id="age" type="number" name="age" class="form-control" aria-describedby="age-feedback" />
                                        <div class="invalid-feedback {{ config('app.locale') == 'ar' ? 'text-end' : ''}}" id="age-feedback"></div>
                                    </div>

                                    <div dir="{{config('app.locale') == 'ar' ? 'rtl' : '' }}">
                                        <label class="custom-checkbox smal mt-3" id=" agreed">
                                            <input type="radio" name="agreed" value="1" for="agreed">
                                            <a href="/terms-and-policy">{{ __('registration.label-agreed')}} </a>
                                        </label>

                                        <label class="custom-checkbox d-none">
                                            <input type="radio" name="agreed" value="0">
                                            <span>I do agree</span>
                                        </label>
                                        <div class="invalid-feedback {{ config('app.locale') == 'ar' ? 'text-end' : ''}}" id="agreed-feedback"> </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-secondary mt-3 d-block w-100 fw-bold" id="registrationButton">{{ __('registration.submit')}} </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!=========================== END OF REGISTRATION FORM===============================>

        <!-- Register-->
        @include('partials/be-part')
        <!-- ./ Register-->

        <!=========================== SUCCESS TOASTER===============================>
            <div class="toast-container position-fixed top-0 end-0 p-3">
                <div class="toast text-bg-success {{ config('app.locale') == 'ar' ? 'text-end' : ''}}" id="successToaster" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header text-right text-bg-success text-light">
                        <strong class="me-auto">{{ __('registration.toaster-success-header')}}</strong>

                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body text-light">
                        <p>{{ __('registration.toaster-success-message')}}</p>
                    </div>
                </div>
            </div>
            <!=========================== END OF SUCCESS TOASTER===============================>

                <!=========================== FAILED TOASTER===============================>
                    <div class="toast-container position-fixed top-0 end-0 p-3">
                        <div class="toast text-bg-danger {{ config('app.locale') == 'ar' ? 'text-end' : ''}}" id="failedToaster" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header text-right text-bg-danger text-light">
                                <strong class="me-auto ">{{ __('registration.toaster-fail-header')}}</strong>

                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body text-light">
                                <p><span class="fw-bold">{{ __('registration.toaster-fail-status')}}</span> <span id="error-status"></span></p>
                                <p>{{ __('registration.toaster-fail-message')}}</p>
                            </div>
                        </div>
                    </div>
                    <!=========================== END OF FAILED TOASTER===============================>

                        @endsection