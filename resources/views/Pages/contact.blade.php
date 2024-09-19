@extends('layouts.app')
@section('title', 'Contact Us - ibexstack')
@section('main-content')
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner container">
                            <x-breadcrum.heading heading="{{ __('Contact Us') }}" />
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <x-breadcrum.title title="{{ __('Contact Us') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content">
        <!-- Contact -->
        <section class="contact-section-home1">
            <div class="container">
                <div class="section-lg">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="pbmit-heading-subheading">
                                <h4 class="pbmit-subtitle-white">CONTACT WITH US</h4>
                                <h2 class="pbmit-title">Get expert help by contacting our specialists</h2>
                                <div class="mt-2">Trusted by more than 4,200 customers</div>
                            </div>
                            <ul class="pbmit-social-links">
                                <li class="pbmit-social-li pbmit-social-facebook ">
                                    <a href="#" target="_blank">
                                        <span><i class="pbmit-base-icon-facebook-squared"></i></span>
                                    </a>
                                </li>
                                <li class="pbmit-social-li pbmit-social-twitter ">
                                    <a href="#" target="_blank">
                                        <span><i class="pbmit-base-icon-twitter"></i></span>
                                    </a>
                                </li>
                                <li class="pbmit-social-li pbmit-social-instagram ">
                                    <a href="#" target="_blank">
                                        <span><i class="pbmit-base-icon-instagram"></i></span>
                                    </a>
                                </li>
                                <li class="pbmit-social-li pbmit-social-youtube ">
                                    <a href="#" target="_blank">
                                        <span><i class="pbmit-base-icon-youtube-play"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-7">
                            <form class="contact-left-section contact-form" method="post" id="contact-form" action="####">
                                <div class="row">
                                    <div class=" col-lg-6 col-md-6 form-floating ml-3">
                                        <input type="text" class="form-control form-floating" placeholder="Full Name"
                                            id="floatingTextarea" name="name">
                                        <label for="floatingTextarea">Full Name</label>
                                    </div>
                                    <div class="col-lg-6 col-md-6 form-floating">
                                        <input type="text" class="form-control" id="floatingEmail"
                                            placeholder="Full Name" name="email" required="">
                                        <label for="floatingEmail">Email</label>

                                    </div>
                                    <div class="col-lg-12 col-sm-12 form-floating">
                                        <textarea class="form-control" name="message" rows="4" placeholder="Write Message" id="floatingMessage"
                                            required=""></textarea>
                                        <label for="floatingMessage">Write a message</label>

                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <button type="submit" class="pbmit-btn pbmit-btn-hover-secondary">
                                            <i
                                                class="form-btn-loader fa fa-circle-o-notch fa-spin fa-fw margin-bottom d-none"></i>
                                            Post Comment
                                        </button>
                                    </div>
                                    <div class="col-md-12 col-lg-12 message-status"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="contact-section-home1-bottom">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="pbmit-ihbox-style-20">
                                <div class="pbmit-ihbox-box d-flex align-items-center">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper">
                                            <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                <i class="pbmit-xido-icon pbmit-xido-icon-location"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pbmit-ihbox-contents">
                                        <div class="pbmit-heading-desc">Visit Our Store</div>
                                        <h2 class="pbmit-element-title">5th floor, Meezan Executive Tower, Faisalabad,
                                            Punjab 38000</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="pbmit-ihbox-style-20">
                                <div class="pbmit-ihbox-box d-flex align-items-center">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper">
                                            <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                <i class="pbmit-xido-icon-email"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pbmit-ihbox-contents">
                                        <div class="pbmit-heading-desc">Send Email</div>
                                        <h2 class="pbmit-element-title">needhelp@ibexstack.com </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="pbmit-ihbox-style-20">
                                <div class="pbmit-ihbox-box d-flex align-items-center">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper">
                                            <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                <i class="pbmit-xido-icon pbmit-xido-icon-call"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pbmit-ihbox-contents">
                                        <div class="pbmit-heading-desc">Call Anytime</div>
                                        <h2 class="pbmit-element-title">(+92) 343-4417145</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404.6277408278393!2d73.07426837399686!3d31.424380951881083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922436e8f5db28d%3A0x63e7227b4a9be8b1!2sibexstack!5e0!3m2!1sen!2s!4v1720679169050!5m2!1sen!2s"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <!-- Contact End -->
    </div>
@endsection
