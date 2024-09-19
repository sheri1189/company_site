<footer class="pbmit-bg-color-secondary footer footer-style-2 site-footer">
    <div class="footer-wrap pbmit-footer-big-area">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <h3>Our business management tools integrate systems, application controls, and analytical solutions.</h3>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="pbmit-footer-logo">
                        <img class="pbmit-main-logo"
                            src="{{ asset('assets/images/creative/logo_white.png') }}" alt="coworking" style="width:75%" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pbmit-footer-widget-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="widget pbmit-two-column-menu">
                        <h3 class="widget-title">Our Company</h3>
                        <div class="textwidget">
                            <ul>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('home') }}">Home</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="widget">
                        <h3 class="widget-title">Need Help?</h3>
                        <div class="pbmit-footer-contact">
                            <div class="pbmit-footer-contact-info">
                                <div class="pbmit-content-box">Customer Care</div>
                                <div class="pbmit-contact-box">
                                    <a href="{{ url('tel:(+92) 343-4417145') }}">(+92) 343-4417145</a>
                                </div>
                            </div>
                            <div class="pbmit-footer-contact-info">
                                <div class="pbmit-content-box">Need live support?</div>
                                <div class="pbmit-contact-box">
                                    <a href="{{ url('mailto:info@ibexstack.com') }}">info@ibexstack.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="widget">
                        <h3 class="widget-title">Keep in touch</h3>
                        <div class="mc4wp-form-fields">
                            <div class="pbmit-footer-newsletter">
                                <input type="email" name="EMAIL" placeholder="Get news &amp; updates">
                                <button type="submit" value="Sign up"><i
                                        class="pbmit-base-icon-arroba"></i></button>
                            </div>
                            Our expertise, as well as our passion for web design sets us apart from other
                            agencies
                        </div>
                        <ul class="pbmit-social-links">
                            {{-- <li class="pbmit-social-li pbmit-social-facebook ">
                                <a href="{{ url('#') }}" target="_blank" rel="noopener">
                                    <span><i class="pbmit-base-icon-facebook-squared"></i></span>
                                </a>
                            </li> --}}
                            <li class="pbmit-social-li pbmit-social-linkedin ">
                                <a href="https://www.linkedin.com/company/ibexstack/?originalSubdomain=pk" target="_blank" rel="noopener">
                                    <span><i class="fab fa-linkedin"></i></span>
                                </a>
                            </li>
                            <li class="pbmit-social-li pbmit-social-instagram ">
                                <a href="https://www.instagram.com/p/C3RnCR5C6wx/?utm_source=ig_web_copy_link" target="_blank" rel="noopener">
                                    <span><i class="pbmit-base-icon-instagram"></i></span>
                                </a>
                            </li>
                            <li class="pbmit-social-li pbmit-social-youtube ">
                                <a href="https://www.youtube.com/@ibexstack" target="_blank" rel="noopener">
                                    <span><i class="pbmit-base-icon-youtube-play"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" pbmit-footer-text-area">
        <div class="container">
            <div class="pbmit-footer-text-inner">
                <div class="row">
                    <div class="col-md-6">
                        <div class="pbmit-footer-copyright-text-area"> Copyright © {{ date('Y') }}
                            <a href="{{ url('#') }}">ibexstack</a>, All Rights Reserved.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class=" pbmit-footer-menu-area">
                            <div class="menu-copyright-menu-container">
                                <ul class="pbmit-footer-menu">
                                    <li class="menu-item">
                                        <a href="{{ url('contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
