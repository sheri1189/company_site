@extends('layouts.app')
@section('title', 'Custom Software Development - ibexstack')
@section('main-content')
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner container">
                            <x-breadcrum.heading heading="{{ __('Custom Software Development') }}" />
                            <x-breadcrum.description
                                description="{{ __('TTranslate your business visions into user-friendly websites with our specialized custom software development services.') }}" />
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <x-breadcrum.title title="{{ __('Custom Software Development') }}" />
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
                            <x-services.details title="{!! __('
                                                        Enhance business effectiveness through our customized custom software development solutions.') !!}" class="{!! 'col-md-6 portfolio-challange-bg' !!}"
                                description="{!! __(
                                    'Elevate your online presence with IbexStack specialized custom software development services. We excel in transforming your business concepts into high-performing, user-centric websites and applications. Our expertise spans creating seamless user experiences, integrating secure functionalities, optimizing for mobile responsiveness, and implementing robust backend solutions. Whether you are launching a new venture or revitalizing an existing platform, we are committed to delivering solutions that enhance operational efficiency and user engagement.

                                At IbexStack, we leverage cutting-edge technologies and industry best practices to ensure your custom software solution meets your unique business requirements. Our team collaborates closely with you to understand your vision, refine your ideas, and execute them with precision and efficiency. From intuitive user interfaces to scalable architecture, we prioritize functionality and usability, ensuring your software not only meets but exceeds expectations.

                                Partner with IbexStack to propel your online business forward with a custom software solution tailored to drive growth and achieve lasting success.',
                                ) !!}" />

                            <div class="service-page-infobox">
                                <div class="row">
                                    @foreach ([
                                        ['User-Centric Design', ['Intuitive interfaces', 'Engaging user experience', 'Design for usability', 'Enhance user interaction']],
                                        ['Secure Functionality Integration', ['Robust security measures', 'Secure feature integration', 'Customized security solutions', 'Protect business data']],
                                        ['Mobile Responsiveness Optimization', ['Optimize across devices', 'Seamless mobile experience', 'Responsive design solutions', 'Mobile-friendly applications']],
                                        ['Backend Solutions', ['Scalable backend architecture', 'Efficient data management', 'Integration solutions development', 'Backend performance optimization']],
                                        ['Custom Application Development', ['Tailored business applications', 'Specific business needs', 'Customized software solutions', 'Application development services']],
                                        ['E-commerce Solutions', ['Seamless shopping experiences', 'Secure payment gateways', 'E-commerce platform development', 'Online sales optimization']],
                                        ['Consultation and Collaboration', ['Client collaboration approach', 'Understanding client vision', 'Refining client ideas', 'Effective project consultation']],
                                        ['Technology Expertise', ['Cutting-edge technologies', 'Industry best practices', 'Innovative tech solutions', 'Expert technology implementation']],
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
