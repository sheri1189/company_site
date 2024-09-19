@extends('layouts.app')
@section('title', 'Blog Details - ibexstack')
@section('main-content')
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner container">
                            <x-breadcrum.heading heading="{{ $array_data['description'] }}" />
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <x-breadcrum.title title="{{ __('Blog Details') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content" style="background-color: #ffffff">
        <section class="section-lgt">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 blog-right-col ">
                        <div class="row">
                            <div class="col-md-12">
                                <article class="post blog-details">
                                    <div class="post-thumbnail">
                                        <div class="pbmit-featured-container">
                                            <div class="pbmit-featured-wrapper">
                                                <img src="{{ asset('assets/images/coworking/blog/blog-02b.png') }}"

                                                    class="img-fluid w-100" alt="">
                                            </div>
                                            <div class="pbmit-short-description">
                                                <p>
                                                    <span class="dropcap">M</span> Microsoft has officially unveiled its latest update for Windows 11, bringing a host of new features and enhancements designed to improve user experience, system performance, and productivity. This major update, which rolls out to users starting today, introduces several exciting changes, including a redesigned taskbar, advanced virtual desktop functionality, and improved security measures. Here’s a detailed look at what you can expect from the new Windows 11 update.
                                                </p>
                                                <p>The Windows 11 taskbar has received a significant overhaul. The new design features a more streamlined and customizable layout, allowing users to move the taskbar to different positions on the screen, including the top, left, or right. Additionally, new quick-access icons have been added, making it easier to launch frequently used apps and access system settings.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-content">
                                        <blockquote>
                                            <p>Comprehensive Guide to the Latest Windows Updates: In-Depth Overview of New Features, Performance Enhancements, and Important Changes You Should Be Aware Of.<br>
                                                <em><cite>- Hanan Innocent</cite></em>
                                            </p>
                                        </blockquote>
                                        <p class="">The update introduces advanced virtual desktop functionality, offering users greater flexibility in managing multiple workspaces. Users can now create and customize virtual desktops with unique wallpapers and app layouts. This enhancement is designed to improve multitasking and organization, making it simpler to switch between different projects and tasks.</p>
                                        <div class="row">
                                            <div class="col-md-12 col-xl-6">
                                                <img src="{{ asset('assets/images/coworking/blog/blog-singal-01.png') }}"
                                                    class="img-fluid w-100 mb-4" alt="">
                                            </div>
                                            <div class="col-md-12 col-xl-6">
                                                <img src="{{ asset('assets/images/coworking/blog/blog-singal-02.png') }}"
                                                    class="img-fluid w-100 mb-4" alt="">
                                            </div>
                                        </div>
                                        <h4 class="pbmit-blog-title">Types Of Software Development Methodologies</h4>
                                        <p>
                                            The Widgets panel has been revamped to provide more personalized content. Users can now customize the Widgets panel to display news, weather, calendar events, and more, based on their preferences. This feature aims to keep users informed and organized with relevant information at their fingertips.
                                        </p>
                                        <ul class="list-group list-group-borderless">
                                            <li class="list-group-item">
                                                <i class="pbmit-base-icon-ok"></i>It is the result of preparation, hard
                                                work, and learning from failure.
                                            </li>
                                            <li class="list-group-item">
                                                <i class="pbmit-base-icon-ok"></i>Most clients that approach you as a
                                                professional want to know pitch.
                                            </li>
                                            <li class="list-group-item">
                                                <i class="pbmit-base-icon-ok"></i>The world will get to know you based on
                                                what you bring to the table
                                            </li>
                                        </ul>
                                        <p>The update includes several new security enhancements, such as improved protection against ransomware and phishing attacks. Windows 11 now features advanced threat detection and response capabilities, including updated Windows Defender definitions and enhanced firewall protection.

                                            Better Support for Modern Hardware: Windows 11’s latest update expands support for a broader range of modern hardware. The update includes improved compatibility with new processors and peripherals, ensuring that users can take full advantage of the latest technological advancements.</p>
                                        <div class="post-content-bottom">
                                            <a href="{{ url('#') }}" rel="tag">Trends</a>
                                        </div>
                                    </div>
                                </article>
                                <div class="pbmit-author-box">
                                    <div class="pbmit-author-image">
                                        <img src="{{ asset('assets/images/coworking/avatar/img1.png') }}" class="img-fluid w-100"
                                            alt="">
                                    </div>
                                    <div class="pbmit-author-content pe-2">
                                        <span class="pbmit-author-name">
                                            <a href="{{ url('#') }}" title="Posted by admin" rel="author">admin</a>
                                        </span>
                                        <p class="pbmit-text pbmit-author-bio">Did you lose your phone or leave your account
                                            logged in at a public computer? You can log out everywhere else, and stay logged
                                            in here.</p>
                                    </div>
                                </div>
                                <nav class="navigation post-navigation">
                                    <div class="nav-links">
                                        <div class="nav-previous">
                                            <a href="{{ url('#') }}" rel="prev"><span
                                                    class="pbmit-post-nav-thumbnail">
                                                    <span class="pbmit-post-nav-icon">
                                                        <i class=" pbmit-base-icon-left-small"></i>
                                                    </span>
                                                    <img src="{{ asset('assets/images/coworking/blog/blog-03s.jpg') }}"
                                                        class="img-fluid" alt="">
                                                </span>
                                                <span class="pbmit-post-nav-wrapper">
                                                    <span class="pbmit-post-nav-head">Previous</span>
                                                    <span class="pbmit-post-nav nav-title">Five Ways Elevate Your Employees
                                                        Workplace</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="nav-next">
                                            <a href="{{ url('#') }}" rel="next">
                                                <span class="pbmit-post-nav-wrapper">
                                                    <span class="pbmit-post-nav-head">Next</span>
                                                    <span class="pbmit-post-nav nav-title">Easy ways to implement wellbeing
                                                        programs</span>
                                                </span>
                                                <span class="pbmit-post-nav-thumbnail">
                                                    <img src="{{ asset('assets/images/coworking/blog/blog-01s.jpg') }}"
                                                        class="img-fluid" alt="">
                                                    <span class="pbmit-post-nav-icon">
                                                        <i class=" pbmit-base-icon-right-small"></i>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </nav>
                                <div class="comments-box">
                                    <h3 class="comments-title">3 Replies to “Politicals campaigns usually require a manager”
                                    </h3>
                                    <div class="media">
                                        <div class="comment-author">
                                            <img src="{{ asset('assets/images/coworking/avatar/img-2.jpg') }}" alt="">
                                        </div>
                                        <div class="media-body comment-meta">
                                            <span class="mt-0 comment-owner">
                                                by<span class="comment-owner-inner">John Doe</span>
                                            </span>
                                            <a class="comment-time-date" href="{{ url('#') }}">1 year ago</a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium eius,
                                                sunt porro corporis maiores ea, voluptatibus omnis maxime</p>
                                            <div class="reply">
                                                <a href="{{ url('#') }}" class="comment-reply-link">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="children">
                                        <div class="media even depth-2">
                                            <div class="comment-author">
                                                <img src="{{ asset('assets/images/coworking/avatar/img-1.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="media-body comment-meta">
                                                <span class="mt-0 comment-owner">
                                                    by<span class="comment-owner-inner">Leona Spencer</span>
                                                </span>
                                                <a class="comment-time-date" href="{{ url('#') }}">3 years ago</a>
                                                <p>Sed maximus imperdiet ipsum, id scelerisque nisi tincidunt vitae. In
                                                    lobortis neque nec dolor vehicula, eget vulputate ligula lobortis.</p>
                                                <div class="reply">
                                                    <a href="{{ url('#') }}" class="comment-reply-link">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="comment-author">
                                            <img src="{{ asset('assets/images/coworking/avatar/img-2.jpg') }}" alt="">
                                        </div>
                                        <div class="media-body comment-meta">
                                            <span class="mt-0 comment-owner">
                                                by<span class="comment-owner-inner">John Doe</span>
                                            </span>
                                            <a class="comment-time-date" href="{{ url('#') }}">3 years ago</a>
                                            <p>Vivamus gravida felis et nibh tristique viverra. Sed vel tortor id ex
                                                accumsan lacinia. Interdum et malesuada fames ac ante ipsum primis in
                                                faucibus.</p>
                                            <div class="reply">
                                                <a href="{{ url('#') }}" class="comment-reply-link">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-respond">
                                    <h3 class="comment-reply-title">Leave a Reply</h3>
                                    <div class="comment-form">
                                        <p class="comment-notes">Your email address will not be published. Required fields
                                            are marked *</p>
                                        <form>
                                            <div class="row g-2">
                                                <div class="col-12">
                                                    <textarea class="form-control" name="comment" placeholder="Enter your comment here..." cols="100"
                                                        rows="5"></textarea>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <input id="name" type="text" placeholder="Name"
                                                        class="form-control" name="name">
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <input id="email" class="form-control" placeholder="Email"
                                                        name="email" type="email" value="">
                                                </div>
                                                <div class="col-md-12 col-sm-12">
                                                    <input id="url" class="form-control" placeholder="Website"
                                                        name="url" type="text" value="">
                                                </div>
                                                <div class="col-12 pb-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                        <label class="form-check-label">
                                                            Save my name, email, and website in this browser for the next
                                                            time I comment.
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-2">
                                                    <button type="submit"
                                                        class="pbmit-btn pbmit-btn-secondary pbmit-btn-hover-global">Post
                                                        Comment</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 blog-left-col">
                        <aside class="sidebar">
                            <aside class="widget widget-search">
                                <h2 class="widget-title">Search</h2>
                                <form class="search-form">
                                    <input type="search" class="search-field" placeholder="Search …" value="">
                                    <a href="{{ url('#') }}"><i class="fa fa-search"></i></a>
                                </form>
                            </aside>
                            <aside class="widget widget-recent-post">
                                <h2 class="widget-title">Recent posts</h2>
                                <ul class="recent-post-list">
                                    <li class="recent-post-list-li">
                                        <a class="recent-post-thum" href="{{ url('#') }}">
                                            <img src="{{ asset('assets/images/coworking/recent-post/blog-01.png') }}"

                                                class="img-fluid" alt="" />
                                        </a>
                                        <div class="media-body">
                                            <a href="{{ url('blog-single-details.html') }}">Microsoft Launches New Windows 11 Features Update</a>
                                            <span class="post-date">May 17, 2022</span>
                                        </div>
                                    </li>
                                    <li class="recent-post-list-li">
                                        <a class="recent-post-thum" href="{{ url('#') }}">
                                            <img src="{{ asset('assets/images/coworking/recent-post/blog-02.png') }}"
                                                class="img-fluid" alt="" />
                                        </a>
                                        <div class="media-body">
                                            <a href="{{ url('blog-single-details.html') }}">TGoogle Announces Major Upgrades to Google Cloud Platform</a>
                                            <span class="post-date">April 25, 2022</span>
                                        </div>
                                    </li>
                                    <li class="recent-post-list-li">
                                        <a class="recent-post-thum" href="{{ url('#') }}">
                                            <img src="{{ asset('assets/images/coworking/recent-post/blog-03.png') }}"
                                                class="img-fluid" alt="" />
                                        </a>
                                        <div class="media-body">
                                            <a href="{{ url('blog-single-details.html') }}">Apple Unveils iOS 18 with New Features and Enhancements</a>
                                            <span class="post-date">April 8, 2022</span>
                                        </div>
                                    </li>
                                </ul>
                            </aside>
                            {{-- <aside class="widget widget-categories">
                                <h3 class="widget-title">Categories</h3>
                                <ul>
                                    <li><a href="{{ url('blog-classic.html') }}">Agreements</a><span>2</span></li>
                                    <li><a href="{{ url('blog-classic.html') }}">coworking</a><span>2</span></li>
                                    <li><a href="{{ url('blog-classic.html') }}">Leadership</a><span>2</span></li>
                                    <li><a href="{{ url('blog-classic.html') }}">Marketing</a><span>1</span></li>
                                    <li><a href="{{ url('blog-classic.html') }}">Proptech</a><span>1</span></li>
                                    <li><a href="{{ url('blog-classic.html') }}">Strategies</a><span>1</span></li>
                                </ul>
                            </aside> --}}

                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Details End -->

    </div>
@endsection
