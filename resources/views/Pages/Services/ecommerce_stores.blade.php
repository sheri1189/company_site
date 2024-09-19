@extends('layouts.app')
@section('title', 'Ecommerce Stores Development - ibexstack')
@section('main-content')
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner container">
                            <x-breadcrum.heading heading="{{ __('Ecommerce Stores Development') }}" />
                            <x-breadcrum.description
                                description="{{ __('Transform business ideas into user-friendly ecommerce websites with our specialized development services.') }}" />
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <x-breadcrum.title title="{{ __('Ecommerce Stores Development') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content">
        <section class="section-lgx">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 service-right-col order-1">
                        <div class="service-details">
                            <x-services.details title="{!! __('Optimize business outcomes with customized solutions for Ecommerce Store Development.') !!}" class="{!! 'col-md-6 portfolio-challange-bg' !!}"
                                description="{!! __(
                                    'Elevate your online presence with IbexStack specialized ecommerce development services. We excel in transforming your concepts into high-performing, user-centric ecommerce websites and applications. Our expertise lies in creating seamless shopping experiences, integrating secure payment gateways, optimizing for mobile responsiveness, and implementing robust backend solutions. Whether launching anew or revitalizing your current platform, we are committed to delivering ecommerce solutions that boost sales and elevate customer satisfaction.',
                                ) !!}" />

                            <div class="service-page-infobox">
                                <div class="row">
                                    @foreach ([
            ['Custom Ecommerce Website Development', ['Tailored website solutions', 'Unique to your brand', 'Seamless user experience', 'Scalable and robust']],
            ['Mobile Ecommerce Solutions', ['Mobile-friendly designs', 'Optimized for smartphones', 'App development available', 'Enhanced accessibility']],
            ['Payment Gateway Integration', ['Secure transactions ensured', 'Multiple payment methods', 'Smooth checkout process', 'Trusted payment gateways']],
            ['Shopping Cart Development', ['Intuitive cart systems', 'Easy product management', 'Add-ons available', 'Smooth shopping experience']],
            ['Product Catalog Management', ['Organized product listings', 'Customizable catalog layouts', 'Filter and search options', 'Detailed product information']],
            ['Order Management System', ['Efficient order processing', 'Track orders easily', 'Inventory management included', 'Automated notifications']],
            ['User Account and Customer Management', ['Personalized user accounts', 'Customer profile management', 'Secure login systems', 'CRM integration possible']],
            ['Responsive Website Design', ['Mobile-ready layouts', 'Adapts to all devices', 'Enhances user experience', 'Fast loading times']],
            ['SEO and Digital Marketing Integration', ['Optimized for search engines', 'Increase online visibility', 'Marketing campaigns supported', 'Drive traffic and sales']],
            ['Analytics and Reporting', ['Monitor site performance', 'Track visitor behavior', 'Insights for growth', 'Data-driven decisions']],
            ['Security and SSL Integration', ['Protect customer data', 'SSL certificates installed', 'Secure transactions assured', 'Compliance with standards']],
            ['Maintenance and Support Services', ['Ongoing support available', 'Regular updates provided', 'Technical assistance offered', 'Ensure site reliability']],
        ] as $service)
                                        <x-services.details.information :title="$service[0]" :description="$service[1]" />
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Issue Details End -->

    </div>
@endsection
