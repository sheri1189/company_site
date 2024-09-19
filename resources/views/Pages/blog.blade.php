@extends('layouts.app')
@section('title', 'Blog - ibexstack')
@section('main-content')
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner container">
                            <x-breadcrum.heading heading="{{ __('Blog') }}" />
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <x-breadcrum.title title="{{ __('Blog') }}" />
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
                    <article class="pbmit-blog-style-6">
                       <div class="post-item">
                          <div class="pbmit-featured-container">
                             <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                   <img src="{{ asset("assets/images/coworking/blog/blog-01.jpg") }}" class="img-fluid w-100" alt="" />
                                </div>
                             </div>
                          </div>
                          <div class="pbminfotech-box-content">
                             <div class="pbmit-meta-container">
                                <span class="pbmit-meta-category">
                                   <a href="{{ route('blog/details') }}" rel="category tag">Agreements</a>
                                </span>
                             </div>
                             <div class="pbmit-box-content-wrapper">
                                <h3 class="pbmit-post-title">
                                   <a href="{{ route('blog/details') }}">Easy ways to implement wellbeing programs</a>
                                </h3>
                                <div class="pbmit-meta-container">
                                   <span class="pbmit-meta pbmit-date-wrapper">
                                      <span class="pbmit-post-date">
                                         <i class="pbmit-base-icon-calendar-1 pbmit-base-icon"></i>MAY 17, 2022
                                      </span>
                                   </span>
                                   <span class="pbmit-meta pbmit-meta-comments">
                                      <i class="pbmit-base-icon-comment-empty pbmit-base-icon"></i>3
                                      <span class="pbmit-meta-comments">Comments</span>
                                   </span>
                                </div>
                             </div>
                          </div>
                       </div>
                    </article>
                 </div>
                 <div class="col-sm-12 col-md-4">
                    <article class="pbmit-blog-style-6">
                       <div class="post-item">
                          <div class="pbmit-featured-container">
                             <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                   <img src="{{ asset("assets/images/coworking/blog/blog-02.jpg") }}" class="img-fluid w-100" alt="" />
                                </div>
                             </div>
                          </div>
                          <div class="pbminfotech-box-content">
                             <div class="pbmit-meta-container">
                                <span class="pbmit-meta-category">
                                   <a href="{{ route('blog/details') }}" rel="category tag">coworking</a>
                                </span>
                             </div>
                             <div class="pbmit-box-content-wrapper">
                                <h3 class="pbmit-post-title">
                                   <a href="{{ route('blog/details') }}">Things Can Help Any coworking Flourish Again</a>
                                </h3>
                                <div class="pbmit-meta-container">
                                   <span class="pbmit-meta pbmit-date-wrapper">
                                      <span class="pbmit-post-date">
                                         <i class="pbmit-base-icon-calendar-1 pbmit-base-icon"></i>APR 25, 2022
                                      </span>
                                   </span>
                                   <span class="pbmit-meta pbmit-meta-comments">
                                      <i class="pbmit-base-icon-comment-empty pbmit-base-icon"></i>3
                                      <span class="pbmit-meta-comments">Comments</span>
                                   </span>
                                </div>
                             </div>
                          </div>
                       </div>
                    </article>
                 </div>
                 <div class="col-sm-12 col-md-4">
                    <article class="pbmit-blog-style-6">
                       <div class="post-item">
                          <div class="pbmit-featured-container">
                             <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                   <img src="{{ asset("assets/images/coworking/blog/blog-03.jpg") }}" class="img-fluid w-100" alt="" />
                                </div>
                             </div>
                          </div>
                          <div class="pbminfotech-box-content">
                             <div class="pbmit-meta-container">
                                <span class="pbmit-meta-category">
                                   <a href="{{ route('blog/details') }}" rel="category tag">Leadership</a>
                                </span>
                             </div>
                             <div class="pbmit-box-content-wrapper">
                                <h3 class="pbmit-post-title">
                                   <a href="{{ route('blog/details') }}">Five Ways Elevate Your Employees Workplace</a>
                                </h3>
                                <div class="pbmit-meta-container">
                                   <span class="pbmit-meta pbmit-date-wrapper">
                                      <span class="pbmit-post-date">
                                         <i class="pbmit-base-icon-calendar-1 pbmit-base-icon"></i>APR 08, 2022
                                      </span>
                                   </span>
                                   <span class="pbmit-meta pbmit-meta-comments">
                                      <i class="pbmit-base-icon-comment-empty pbmit-base-icon"></i>3
                                      <span class="pbmit-meta-comments">Comments</span>
                                   </span>
                                </div>
                             </div>
                          </div>
                       </div>
                    </article>
                 </div>
              </div>
              <div class="row">
                 <div class="col-sm-12 col-md-4">
                    <article class="pbmit-blog-style-6">
                       <div class="post-item">
                          <div class="pbmit-featured-container">
                             <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                   <img src="{{ asset("assets/images/coworking/blog/blog-04.jpg") }}" class="img-fluid w-100" alt="" />
                                </div>
                             </div>
                          </div>
                          <div class="pbminfotech-box-content">
                             <div class="pbmit-meta-container">
                                <span class="pbmit-meta-category">
                                   <a href="{{ route('blog/details') }}" rel="category tag">Marketing</a>
                                </span>
                             </div>
                             <div class="pbmit-box-content-wrapper">
                                <h3 class="pbmit-post-title">
                                   <a href="{{ route('blog/details') }}">Find Your Target Market for coworking Spaces</a>
                                </h3>
                                <div class="pbmit-meta-container">
                                   <span class="pbmit-meta pbmit-date-wrapper">
                                      <span class="pbmit-post-date">
                                         <i class="pbmit-base-icon-calendar-1 pbmit-base-icon"></i>JUN 03, 2020
                                      </span>
                                   </span>
                                   <span class="pbmit-meta pbmit-meta-comments">
                                      <i class="pbmit-base-icon-comment-empty pbmit-base-icon"></i>3
                                      <span class="pbmit-meta-comments">Comments</span>
                                   </span>
                                </div>
                             </div>
                          </div>
                       </div>
                    </article>
                 </div>
                 <div class="col-sm-12 col-md-4">
                    <article class="pbmit-blog-style-6">
                       <div class="post-item">
                          <div class="pbmit-featured-container">
                             <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                   <img src="{{ asset("assets/images/coworking/blog/blog-05.jpg") }}" class="img-fluid w-100" alt="" />
                                </div>
                             </div>
                          </div>
                          <div class="pbminfotech-box-content">
                             <div class="pbmit-meta-container">
                                <span class="pbmit-meta-category">
                                   <a href="{{ route('blog/details') }}" rel="category tag">Proptech</a>
                                </span>
                             </div>
                             <div class="pbmit-box-content-wrapper">
                                <h3 class="pbmit-post-title">
                                   <a href="{{ route('blog/details') }}">Lead Generation and Your coworking Marketing Strategy</a>
                                </h3>
                                <div class="pbmit-meta-container">
                                   <span class="pbmit-meta pbmit-date-wrapper">
                                      <span class="pbmit-post-date">
                                         <i class="pbmit-base-icon-calendar-1 pbmit-base-icon"></i>JUN 03, 2020
                                      </span>
                                   </span>
                                   <span class="pbmit-meta pbmit-meta-comments">
                                      <i class="pbmit-base-icon-comment-empty pbmit-base-icon"></i>3
                                      <span class="pbmit-meta-comments">Comments</span>
                                   </span>
                                </div>
                             </div>
                          </div>
                       </div>
                    </article>
                 </div>
                 <div class="col-sm-12 col-md-4">
                    <article class="pbmit-blog-style-6">
                       <div class="post-item">
                          <div class="pbmit-featured-container">
                             <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                   <img src="{{ asset("assets/images/coworking/blog/blog-06.jpg") }}" class="img-fluid w-100" alt="" />
                                </div>
                             </div>
                          </div>
                          <div class="pbminfotech-box-content">
                             <div class="pbmit-meta-container">
                                <span class="pbmit-meta-category">
                                   <a href="{{ route('blog/details') }}" rel="category tag">Strategies</a>
                                </span>
                             </div>
                             <div class="pbmit-box-content-wrapper">
                                <h3 class="pbmit-post-title">
                                   <a href="{{ route('blog/details') }}">Creating A Marketing Plan For Your coworking Space</a>
                                </h3>
                                <div class="pbmit-meta-container">
                                   <span class="pbmit-meta pbmit-date-wrapper">
                                      <span class="pbmit-post-date">
                                         <i class="pbmit-base-icon-calendar-1 pbmit-base-icon"></i>MAY 26, 2020
                                      </span>
                                   </span>
                                   <span class="pbmit-meta pbmit-meta-comments">
                                      <i class="pbmit-base-icon-comment-empty pbmit-base-icon"></i>3
                                      <span class="pbmit-meta-comments">Comments</span>
                                   </span>
                                </div>
                             </div>
                          </div>
                       </div>
                    </article>
                 </div>
              </div>
              <div class="row">
                 <div class="col-sm-12 col-md-4">
                    <article class="pbmit-blog-style-6">
                       <div class="post-item">
                          <div class="pbmit-featured-container">
                             <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                   <img src="{{ asset("assets/images/coworking/blog/blog-07.jpg") }}" class="img-fluid w-100" alt="" />
                                </div>
                             </div>
                          </div>
                          <div class="pbminfotech-box-content">
                             <div class="pbmit-meta-container">
                                <span class="pbmit-meta-category">
                                   <a href="{{ route('blog/details') }}" rel="category tag">Agreements</a>
                                </span>
                             </div>
                             <div class="pbmit-box-content-wrapper">
                                <h3 class="pbmit-post-title">
                                   <a href="{{ route('blog/details') }}">Global IT consulting & software solutions provider</a>
                                </h3>
                                <div class="pbmit-meta-container">
                                   <span class="pbmit-meta pbmit-date-wrapper">
                                      <span class="pbmit-post-date">
                                         <i class="pbmit-base-icon-calendar-1 pbmit-base-icon"></i>MAY 26, 2020
                                      </span>
                                   </span>
                                   <span class="pbmit-meta pbmit-meta-comments">
                                      <i class="pbmit-base-icon-comment-empty pbmit-base-icon"></i>3
                                      <span class="pbmit-meta-comments">Comments</span>
                                   </span>
                                </div>
                             </div>
                          </div>
                       </div>
                    </article>
                 </div>
                 <div class="col-sm-12 col-md-4">
                    <article class="pbmit-blog-style-6">
                       <div class="post-item">
                          <div class="pbmit-featured-container">
                             <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                   <img src="{{ asset("assets/images/coworking/blog/blog-08.jpg") }}" class="img-fluid w-100" alt="" />
                                </div>
                             </div>
                          </div>
                          <div class="pbminfotech-box-content">
                             <div class="pbmit-meta-container">
                                <span class="pbmit-meta-category">
                                   <a href="{{ route('blog/details') }}" rel="category tag">coworking</a>
                                </span>
                             </div>
                             <div class="pbmit-box-content-wrapper">
                                <h3 class="pbmit-post-title">
                                   <a href="{{ route('blog/details') }}">Premium custom office solution solves Growfusely’s growing</a>
                                </h3>
                                <div class="pbmit-meta-container">
                                   <span class="pbmit-meta pbmit-date-wrapper">
                                      <span class="pbmit-post-date">
                                         <i class="pbmit-base-icon-calendar-1 pbmit-base-icon"></i>JUN 29, 2019
                                      </span>
                                   </span>
                                   <span class="pbmit-meta pbmit-meta-comments">
                                      <i class="pbmit-base-icon-comment-empty pbmit-base-icon"></i>3
                                      <span class="pbmit-meta-comments">Comments</span>
                                   </span>
                                </div>
                             </div>
                          </div>
                       </div>
                    </article>
                 </div>
                 <div class="col-sm-12 col-md-4">
                    <article class="pbmit-blog-style-6">
                       <div class="post-item">
                          <div class="pbmit-featured-container">
                             <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                   <img src="{{ asset("assets/images/coworking/blog/project-01.jpg") }}" class="img-fluid w-100" alt="" />
                                </div>
                             </div>
                          </div>
                          <div class="pbminfotech-box-content">
                             <div class="pbmit-meta-container">
                                <span class="pbmit-meta-category">
                                   <a href="{{ route('blog/details') }}" rel="category tag">Leadership</a>
                                </span>
                             </div>
                             <div class="pbmit-box-content-wrapper">
                                <h3 class="pbmit-post-title">
                                   <a href="{{ route('blog/details') }}">Health management firm scales its operations with a managed</a>
                                </h3>
                                <div class="pbmit-meta-container">
                                   <span class="pbmit-meta pbmit-date-wrapper">
                                      <span class="pbmit-post-date">
                                         <i class="pbmit-base-icon-calendar-1 pbmit-base-icon"></i>JUN 18, 2019
                                      </span>
                                   </span>
                                   <span class="pbmit-meta pbmit-meta-comments">
                                      <i class="pbmit-base-icon-comment-empty pbmit-base-icon"></i>3
                                      <span class="pbmit-meta-comments">Comments</span>
                                   </span>
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
