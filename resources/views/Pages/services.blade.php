@extends('layouts.app')
@section('title', 'Services - ibexstack')
@section('main-content')
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner container">
                            <x-breadcrum.heading heading="{{ __('Services') }}" />
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <x-breadcrum.title title="{{ __('Services') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content">
        <section class="service-section p-5">
            <div class="container">
                <div class="pbmit-heading-subheading-style-7 text-center">
                    <h2 class="pbmit-title">We Develop Digital Future</h2>
                </div>
                <div class="swiper-slider" data-arrows-class="home3-team-arrow" data-autoplay="false"
                data-dots="true" data-arrows="false" data-columns="3" data-margin="30" data-effect="slide">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <article class="pbmit-service-style-2">
                            <div class="pbminfotech-post-item">
                                <div class="pbmit-service-image-wrapper">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('assets/images/services/web.png') }}"
                                                class="img-fluid" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbmit-service-cat">
                                        <h4>
                                            <a href="{{ route('/services/details/full-stack') }}" rel="tag">Web</a>
                                        </h4>
                                    </div>
                                    <h3 class="pbmit-service-title">
                                        <a href="{{ route('/services/details/full-stack') }}">Full
                                            Stack Development</a>
                                    </h3>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="swiper-slide">
                        <article class="pbmit-service-style-2">
                            <div class="pbminfotech-post-item">
                                <div class="pbmit-service-image-wrapper">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('assets/images/services/mobile.png') }}"
                                                class="img-fluid" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbmit-service-cat">
                                        <h4>
                                            <a href="{{ route('/services/details/mobile-app') }}" rel="tag">App</a>
                                        </h4>
                                    </div>
                                    <h3 class="pbmit-service-title">
                                        <a href="{{ route('/services/details/mobile-app') }}">Mobile App
                                            Development</a>
                                    </h3>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="pbmit-service-style-2">
                            <div class="pbminfotech-post-item">
                                <div class="pbmit-service-image-wrapper">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('assets/images/services/ecommerce.png') }}"
                                                class="img-fluid" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbmit-service-cat">
                                        <h4>
                                            <a href="{{ route('/services/details/ecommerce-stores') }}" rel="tag">Ecommerce</a>
                                        </h4>
                                    </div>
                                    <h3 class="pbmit-service-title">
                                        <a href="{{ route('/services/details/ecommerce-stores') }}">Ecommerce Stores
                                            Development</a>
                                    </h3>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="pbmit-service-style-2">
                            <div class="pbminfotech-post-item">
                                <div class="pbmit-service-image-wrapper">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('assets/images/services/uiux.png') }}"
                                                class="img-fluid" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbmit-service-cat">
                                        <h4>
                                            <a href="{{ route('/services/details/ui-ux') }}" rel="tag">Design</a>
                                        </h4>
                                    </div>
                                    <h3 class="pbmit-service-title">
                                        <a href="{{ route('/services/details/ui-ux') }}">UI/UX Design</a>
                                    </h3>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="pbmit-service-style-2">
                            <div class="pbminfotech-post-item">
                                <div class="pbmit-service-image-wrapper">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('assets/images/services/cms.png') }}"
                                                class="img-fluid" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbmit-service-cat">
                                        <h4>
                                            <a href="{{ route('/services/details/cms-development') }}" rel="tag">CMS</a>
                                        </h4>
                                    </div>
                                    <h3 class="pbmit-service-title">
                                        <a href="{{ route('/services/details/cms-development') }}">Custom CMS
                                            Development</a>
                                    </h3>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="pbmit-service-style-2">
                            <div class="pbminfotech-post-item">
                                <div class="pbmit-service-image-wrapper">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('assets/images/services/software.png') }}"
                                                class="img-fluid" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbmit-service-cat">
                                        <h4>
                                            <a href="{{ route('/services/details/custom-software') }}" rel="tag">Development</a>
                                        </h4>
                                    </div>
                                    <h3 class="pbmit-service-title">
                                        <a href="{{ route('/services/details/custom-software') }}">Custom Software
                                            Development</a>
                                    </h3>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </div>
@endsection
