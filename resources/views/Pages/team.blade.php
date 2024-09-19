@extends('layouts.app')
@section('title', 'Our Team Members - ibexstack')
@section('main-content')
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner container">
                            <x-breadcrum.heading heading="{{ __('Our Team Members') }}" />
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <x-breadcrum.title title="{{ __('Our Team Members') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content">
        <section class="section-lg">
            <div class="container">
                <div class="row">
                    @foreach ($new_array as $key =>$value )
                     <div class="col-sm-12 col-md-4" data-aos="fade-right" data-aos-duration="2000" data-aos-once="false">
                        <article class="pbmit-team-style-3 ">
                            <div class="pbminfotech-post-item">
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <a href="{{ asset($value['img_url']) }}"
                                            data-toggle="lightbox" data-caption="This describes the image">
                                            <img src="{{ asset($value['img_url']) }}" class="img-fluid">

                                        </a>

                                    </div>
                                </div>
                                <div class="pbminfotech-social-box">
                                    <div class="pbminfotech-box-social-links">
                                        <ul class="pbmit-social-links pbmit-team-social-links">
                                            <li class="pbmit-social-li pbmit-social-instragram">
                                                <a href="https://www.instagram.com/p/C3RnCR5C6wx/?utm_source=ig_web_copy_link" title="Facebook" target="_blank">
                                                    <span><i class="pbmit-base-icon-instagram"></i></span>
                                                </a>
                                            </li>

                                            <li class="pbmit-social-li pbmit-social-linkedin">
                                                <a href="https://www.linkedin.com/in/tanveer-ahhttps://www.instagram.com/p/C3RnCR5C6wx/?utm_source=ig_web_copy_link" title="Instagram" target="_blank">
                                                    <span><i class="fab fa-linkedin"></i></span>
                                                </a>
                                            </li>
                                            <li class="pbmit-social-li pbmit-social-youtube">
                                                <a href="https://www.youtube.cohttps://www.youtube.com/@ibexstack" title="Youtube" target="_blank">
                                                    <span><i class="pbmit-base-icon-youtube-play"></i></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbminfotech-box-content-inner">
                                        <h3 class="pbmit-team-title">
                                            <a href="{{ url ('team/details/'. $value['name']) }}"> {{ $value['name'] }}</a>
                                        </h3>
                                        <div class="pbminfotech-team-position">
                                            <div class="pbminfotech-box-team-position text-uppercase">{{ $value['category'] }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Our Candidates End -->

    </div>
@endsection
