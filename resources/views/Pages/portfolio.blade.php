@extends('layouts.app')
@section('title', 'Portfolio - ibexstack')
@section('main-content')
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner container">
                            <x-breadcrum.heading heading="{{ __('Portfolio') }}" />
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <x-breadcrum.title title="{{ __('Portfolio') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content blog-grid">
        <section class="section-lg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <article class="pbmit-portfolio-style-4">
                            <div class="pbminfotech-post-content">
                                <div class="pbmit-image-wrapper">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('assets/images/coworking/project/project-04.jpg') }}"
                                                class="img-fluid w-100" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="pbminfotech-box-content pbminfotech-overlay">
                                    <div class="pbminfotech-box-content-wrapper">
                                        <div class="pbminfotech-titlebox">
                                            <h3 class="pbmit-portfolio-title">
                                                <a href="{{ route('portfolio/details') }}">Design Strategies</a>
                                            </h3>
                                            <div class="pbmit-port-cat">
                                                <a href="{{ route('portfolio/details') }}" rel="tag">Specific</a>
                                            </div>
                                        </div>
                                        <div class="pbminfotech-icon-box pbminfotech-media-link">
                                            <a class="pbmit-lightbox"
                                                href="{{ url('assets/images/coworking/project/project-04.jpg') }}">
                                                <i class="pbmit-base-icon-plus-symbol-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <article class="pbmit-portfolio-style-4">
                            <div class="pbminfotech-post-content">
                                <div class="pbmit-image-wrapper">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('assets/images/coworking/project/project-03.jpg') }}"
                                                class="img-fluid w-100" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="pbminfotech-box-content pbminfotech-overlay">
                                    <div class="pbminfotech-box-content-wrapper">
                                        <div class="pbminfotech-titlebox">
                                            <h3 class="pbmit-portfolio-title">
                                                <a href="{{ route('portfolio/details') }}">Sociology Coliving</a>
                                            </h3>
                                            <div class="pbmit-port-cat">
                                                <a href="{{ route('portfolio/details') }}" rel="tag">Private</a>
                                            </div>
                                        </div>
                                        <div class="pbminfotech-icon-box pbminfotech-media-link">
                                            <a class="pbmit-lightbox"
                                                href="{{ url('assets/images/coworking/project/project-03.jpg') }}">
                                                <i class="pbmit-base-icon-plus-symbol-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <article class="pbmit-portfolio-style-4">
                            <div class="pbminfotech-post-content">
                                <div class="pbmit-image-wrapper">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('assets/images/coworking/project/project-02.jpg') }}"
                                                class="img-fluid w-100" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="pbminfotech-box-content pbminfotech-overlay">
                                    <div class="pbminfotech-box-content-wrapper">
                                        <div class="pbminfotech-titlebox">
                                            <h3 class="pbmit-portfolio-title">
                                                <a href="{{ route('portfolio/details') }}">Working Together</a>
                                            </h3>
                                            <div class="pbmit-port-cat">
                                                <a href="{{ route('portfolio/details') }}" rel="tag">Lifestyle</a>
                                            </div>
                                        </div>
                                        <div class="pbminfotech-icon-box pbminfotech-media-link">
                                            <a class="pbmit-lightbox"
                                                href="{{ url('assets/images/coworking/project/project-02.jpg') }}">
                                                <i class="pbmit-base-icon-plus-symbol-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <article class="pbmit-portfolio-style-4">
                            <div class="pbminfotech-post-content">
                                <div class="pbmit-image-wrapper">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('assets/images/coworking/project/project-01b.jpg') }}"
                                                class="img-fluid w-100" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="pbminfotech-box-content pbminfotech-overlay">
                                    <div class="pbminfotech-box-content-wrapper">
                                        <div class="pbminfotech-titlebox">
                                            <h3 class="pbmit-portfolio-title">
                                                <a href="{{ route('portfolio/details') }}">Armazem Cowork</a>
                                            </h3>
                                            <div class="pbmit-port-cat">
                                                <a href="{{ route('portfolio/details') }}" rel="tag">Corporate</a>
                                            </div>
                                        </div>
                                        <div class="pbminfotech-icon-box pbminfotech-media-link">
                                            <a class="pbmit-lightbox"
                                                href="{{ url('assets/images/coworking/project/project-01b.jpg') }}">
                                                <i class="pbmit-base-icon-plus-symbol-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <article class="pbmit-portfolio-style-4">
                            <div class="pbminfotech-post-content">
                                <div class="pbmit-image-wrapper">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('assets/images/coworking/project/project-05.jpg') }}"
                                                class="img-fluid w-100" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="pbminfotech-box-content pbminfotech-overlay">
                                    <div class="pbminfotech-box-content-wrapper">
                                        <div class="pbminfotech-titlebox">
                                            <h3 class="pbmit-portfolio-title">
                                                <a href="{{ route('portfolio/details') }}">Innovation Center</a>
                                            </h3>
                                            <div class="pbmit-port-cat">
                                                <a href="{{ route('portfolio/details') }}" rel="tag">Venture</a>
                                            </div>
                                        </div>
                                        <div class="pbminfotech-icon-box pbminfotech-media-link">
                                            <a class="pbmit-lightbox"
                                                href="{{ url('assets/images/coworking/project/project-05.jpg') }}">
                                                <i class="pbmit-base-icon-plus-symbol-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <article class="pbmit-portfolio-style-4">
                            <div class="pbminfotech-post-content">
                                <div class="pbmit-image-wrapper">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('assets/images/coworking/project/project-06.jpg') }}"
                                                class="img-fluid w-100" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="pbminfotech-box-content pbminfotech-overlay">
                                    <div class="pbminfotech-box-content-wrapper">
                                        <div class="pbminfotech-titlebox">
                                            <h3 class="pbmit-portfolio-title">
                                                <a href="{{ route('portfolio/details') }}">Future Workspace</a>
                                            </h3>
                                            <div class="pbmit-port-cat">
                                                <a href="{{ route('portfolio/details') }}" rel="tag">vision</a>
                                            </div>
                                        </div>
                                        <div class="pbminfotech-icon-box pbminfotech-media-link">
                                            <a class="pbmit-lightbox"
                                                href="{{ url('assets/images/coworking/project/project-06.jpg') }}">
                                                <i class="pbmit-base-icon-plus-symbol-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <article class="pbmit-portfolio-style-4">
                            <div class="pbminfotech-post-content">
                                <div class="pbmit-image-wrapper">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('assets/images/coworking/project/project-07.jpg') }}"
                                                class="img-fluid w-100" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="pbminfotech-box-content pbminfotech-overlay">
                                    <div class="pbminfotech-box-content-wrapper">
                                        <div class="pbminfotech-titlebox">
                                            <h3 class="pbmit-portfolio-title">
                                                <a href="{{ route('portfolio/details') }}">Unique coworking</a>
                                            </h3>
                                            <div class="pbmit-port-cat">
                                                <a href="{{ route('portfolio/details') }}"
                                                    rel="tag">Corporate</a>
                                            </div>
                                        </div>
                                        <div class="pbminfotech-icon-box pbminfotech-media-link">
                                            <a class="pbmit-lightbox"
                                                href="{{ url('assets/images/coworking/project/project-07.jpg') }}">
                                                <i class="pbmit-base-icon-plus-symbol-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <article class="pbmit-portfolio-style-4">
                            <div class="pbminfotech-post-content">
                                <div class="pbmit-image-wrapper">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('assets/images/coworking/project/project-08.jpg') }}"
                                                class="img-fluid w-100" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="pbminfotech-box-content pbminfotech-overlay">
                                    <div class="pbminfotech-box-content-wrapper">
                                        <div class="pbminfotech-titlebox">
                                            <h3 class="pbmit-portfolio-title">
                                                <a href="{{ route('portfolio/details') }}">Typographia Cowork</a>
                                            </h3>
                                            <div class="pbmit-port-cat">
                                                <a href="{{ route('portfolio/details') }}"
                                                    rel="tag">Lifestyle</a>
                                            </div>
                                        </div>
                                        <div class="pbminfotech-icon-box pbminfotech-media-link">
                                            <a class="pbmit-lightbox"
                                                href="{{ url('assets/images/coworking/project/project-08.jpg') }}">
                                                <i class="pbmit-base-icon-plus-symbol-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <article class="pbmit-portfolio-style-4">
                            <div class="pbminfotech-post-content">
                                <div class="pbmit-image-wrapper">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('assets/images/coworking/project/project-09.jpg') }}"
                                                class="img-fluid w-100" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="pbminfotech-box-content pbminfotech-overlay">
                                    <div class="pbminfotech-box-content-wrapper">
                                        <div class="pbminfotech-titlebox">
                                            <h3 class="pbmit-portfolio-title">
                                                <a href="{{ route('portfolio/details') }}">Running Practice</a>
                                            </h3>
                                            <div class="pbmit-port-cat">
                                                <a href="{{ route('portfolio/details') }}" rel="tag">Private</a>
                                            </div>
                                        </div>
                                        <div class="pbminfotech-icon-box pbminfotech-media-link">
                                            <a class="pbmit-lightbox"
                                                href="{{ url('assets/images/coworking/project/project-09.jpg') }}">
                                                <i class="pbmit-base-icon-plus-symbol-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
