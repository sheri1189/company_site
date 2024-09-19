@extends('layouts.app')
@section('title', 'About Us - ibexstack')
@section('main-content')
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner container">
                            <x-breadcrum.heading heading="{{ __('About Us') }}" />
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <x-breadcrum.title title="{{ __('About Us') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content">
        <section class="section-lg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-md-12">
                        <div class="about-us-section-bg">
                            <div class="about-us-section-wrap">
                                Maximize Efficiency with Our Expert Services
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <div class="about-us-section-home">
                            <div class="pbmit-heading-subheading">
                                <h4 class="pbmit-subtitle-white">WHY CHOOSE US</h4>
                                <h2 class="pbmit-title">Providing expert SEO and marketing services.</h2>
                            </div>
                            <div>
                                We are a dynamic team of skilled developers with extensive experience and a passion for our
                                work. We have a history of successful collaborations with corporations.
                            </div>
                            <div class="pbmit-list-style-1">
                                <ul class="icon-list-items">
                                    <li class="icon-list-item">
                                        <span class="icon-list-text">Perfect for large sites agencies</span>
                                    </li>
                                    <li class="icon-list-item">
                                        <span class="icon-list-text">We appreciate your trust greatly</span>
                                    </li>
                                    <li class="icon-list-item">
                                        <span class="icon-list-text">Proven SEO & Marketing Experts </span>
                                    </li>
                                    <li class="icon-list-item">
                                        <span class="icon-list-text">Elite SEO & Marketing Services </span>
                                    </li>
                                </ul>
                            </div>
                            <a href="{{ url('contact') }}" class="pbmit-btn">Conatct Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Progressbar Start -->
        <section class="section-lg">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-6 col-md-12">
                        <div class="pbmit-heading-subheading">
                            <h4 class="pbmit-subtitle-white">SUCCESS STORIES</h4>
                            <h2 class="pbmit-title">We provide remarkable digital solutions.</h2>
                        </div>
                        <div class="pe-4">Digital marketing involves promoting and advertising services through online
                            channels, electronic devices, and digital technologies. Examples include social media and email
                            marketing.</div>
                        <div class="pbmit-ihbox pbmit-ihbox-style-20 mt-5">
                            <div class="pbmit-ihbox-box d-flex align-items-center">
                                <div class="pbmit-ihbox-icon">
                                    <div class="pbmit-ihbox-icon-wrapper">
                                        <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                            <i class="pbmit-xido-icon pbmit-xido-icon-email"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <div class="pbmit-heading-desc">Send Email</div>
                                    <h2 class="pbmit-element-title">needhelp@ibexstack.com</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12 progressbar-section-home">
                        <div class="progressbar pbmit-progress-style-4">
                            <span class="progress-label">Experience</span>
                            <div class="progress progress-lg progress-percent-bg">
                                <div class="progress-bar aos aos-init aos-animate" data-aos="slide-right"
                                    data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                    role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                    style="width:90%">
                                    <span class="progress-percent">90%</span>
                                </div>
                            </div>
                        </div>
                        <div class="progressbar pbmit-progress-style-4">
                            <span class="progress-label">Development</span>
                            <div class="progress progress-lg progress-percent-bg">
                                <div class="progress-bar aos aos-init aos-animate" data-aos="slide-right"
                                    data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                    role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                    style="width:90%">
                                    <span class="progress-percent">90%</span>
                                </div>
                            </div>
                        </div>
                        <div class="progressbar pbmit-progress-style-4">
                            <span class="progress-label">Marketing</span>
                            <div class="progress progress-lg progress-percent-bg">
                                <div class="progress-bar aos aos-init aos-animate" data-aos="slide-right"
                                    data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                    role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                    style="width:80%">
                                    <span class="progress-percent">80%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="section-lg">
            <div class="container">
                <div class="pbmit-heading-subheading">
                    <h4 class="pbmit-subtitle-white"> RECENT NEWS </h4>
                    <h2 class="pbmit-title">Read Our Latest News</h2>
                </div>
                <div class="row">
                    @foreach ($news_array as $key => $data)
                        <article class="pbmit-blog-style-2 col-md-12">
                            <div class="post-item">
                                <div class="pbminfotech-box-content">
                                    <div class="pbmit-meta-date-wrapper pbmit-meta-line">
                                        <div class="pbmit-meta-date">
                                            <span class="pbmit-date-wrap">
                                                @php
                                                    $dateString = $data['date'];
                                                    $date = new DateTime($dateString);

                                                    $formattedDate = $date->format('Y-m-d '); // Adjust format as needed
                                                    $dateParts = explode('-', $formattedDate);

                                                    print_r($dateParts[2]);
                                                @endphp</span>{{ $data['date'] }}<span>



                                            </span>
                                        </div>
                                    </div>
                                    <div class="pbmit-content-wrapper">
                                        <div class="pbmit-meta-cat-wrapper pbmit-meta-line">
                                            <div class="pbmit-meta-category">
                                                <a href="{{ url('blog/details/' . $key) }}"
                                                    rel="category tag">{{ $key }}</a>
                                            </div>
                                        </div>
                                        <h3 class="pbmit-post-title"><a
                                                href="{{ url('blog/details/' . $key) }}">{{ $data['description'] }}</a>
                                        </h3>
                                    </div>
                                    <div class="pbmit-featured-container">
                                        <div class="pbmit-featured-img-wrapper">
                                            <div class="pbmit-featured-wrapper">
                                                <img src="{{ asset('/images/coworking/blog/blog-01.jpg') }}"
                                                    class="img-fluid" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pbmit-read-more-link">
                                        <a href="{{ url('blog/details/' . $key) }}"><span>Continue read</span></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Blog End -->
    </div>
@endsection
