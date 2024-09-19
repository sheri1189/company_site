<header class="site-header header-style-8">
    <div class="site-header-menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="site-branding">
                                <a href="{{ route('home') }}">
                                    <img class="logo-img" alt="coworking"
                                        src="{{ asset('assets/images/creative/logo.png') }}" />
                                </a>
                            </div>
                        </div>
                        <div class="site-navigation ms-auto">
                            <nav class="main-menu navbar-expand-xl navbar-light">
                                <div class="navbar-header">
                                    <button class="navbar-toggler" type="button">
                                        <i class="pbmit-base-icon-menu-1"></i>
                                    </button>
                                </div>
                                <div class="pbmit-mobile-menu-bg"></div>
                                <div class="collapse navbar-collapse clearfix show" id="pbmit-menu">
                                    <div class="pbmit-menu-wrap">
                                        <span class="closepanel"><i
                                                class="pbmit-base-icon-close-circular-button-symbol"></i></span>
                                        <ul class="navigation clearfix">
                                            <li><a href="{{ route('about') }}">About Us</a></li>
                                            <li class="dropdown">
                                                <a href="{{ url('services') }}">Services</a>
                                                <ul>
                                                    <li><a href="{{ url('/services/details/full-stack') }}">Full
                                                            Stack Development</a></li>
                                                    <li><a href="{{ url('/services/details/mobile-app') }}">Mobile
                                                            App Development</a></li>
                                                    <li><a href="{{ url('/services/details/ecommerce-stores') }}">Ecommerce
                                                            Stores Development </a></li>
                                                    <li><a href="{{ url('/services/details/ui-ux') }}">UI/UX
                                                            Design</a></li>
                                                    <li><a href="{{ url('/services/details/cms-development') }}">Custom
                                                            CMS Development</a></li>
                                                    <li><a href="{{ url('/services/details/custom-software') }}">
                                                            Custom Software Development</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                                            {{-- <li><a href="{{ route('blog') }}">Blog</a></li> --}}
                                            <li><a href="{{ route('team') }}">Our Team</a></li>
                                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <div class="pbmit-right-main-box">
                            <div class="pbmit-search-cart-box">
                                <div class="pbmit-header-search-btn">
                                    <a href="{{ url('#') }}"><i class="pbmit-base-icon-search"></i></a>
                                </div>
                            </div>
                            <div class="pbmit-button-box m-0">
                                <div class="pbmit-header-button2">
                                    <a href="{{ route('contact') }}" class="pbmit-btn">get in touch</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
