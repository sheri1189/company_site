@extends('layouts.app')
@section('title', 'Custom CMS Development - ibexstack')
@section('main-content')
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner container">
                            <x-breadcrum.heading heading="{{ __('Custom CMS Development') }}" />
                            <x-breadcrum.description
                                description="{{ __('Transform business concepts into intuitive websites with our specialized Custom CMS development services.') }}" />
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <x-breadcrum.title title="{{ __('Custom CMS Development') }}" />
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
                                                        Maximize business impact with tailored Custom CMS Development solutions.') !!}" class="{!! 'col-md-6 portfolio-challange-bg' !!}"
                                description="{!! __(
                                    'Elevate your online presence with IbexStack is specialized Custom CMS development services. We excel in transforming your business concepts into high-performing, user-centric websites and applications. Our expertise spans seamless shopping experiences, integration of secure payment gateways, optimization for mobile responsiveness, and implementation of robust backend solutions. Whether you are launching a new venture or revitalizing an existing platform, we are committed to delivering ecommerce solutions that enhance sales and elevate customer satisfaction.At IbexStack, we leverage cutting-edge technologies and industry best practices to ensure your Custom CMS solution meets your unique business requirements. Our team works closely with you to understand your vision, refine your ideas, and execute them with precision and efficiency. From intuitive user interfaces to scalable architecture, we prioritize functionality and usability, ensuring your ecommerce platform not only meets but exceeds expectations.Partner with IbexStack to propel your online business forward with a Custom CMS solution tailored to drive growth and achieve lasting success.',
                                ) !!}" />

                            <div class="service-page-infobox">
                                <div class="row">
                                    @foreach ([
            ['Custom CMS Design and Development', ['Tailored CMS creation', 'Aligns with business needs', 'Goal-oriented development approach', 'Bespoke content management system']],
            ['Responsive Web Design', ['Seamless cross-device functionality', 'Mobile-friendly CMS design', 'Ensures usability across devices', 'Adaptive website development']],
            ['Integration of Custom Features', ['Unique functionality implementation', 'Custom user roles', 'Advanced workflow customization', 'Feature-rich CMS integration']],
            ['Third-Party Integration', ['External services integration', 'API integration expertise', 'Payment gateway integration', 'Marketing tool integration']],
            ['Security and Performance Optimization', ['Robust security measures', 'Performance optimization strategies', 'Speed and reliability enhancements', 'Ensures site stability']],
            ['Content Migration', ['Seamless data transfer', 'Smooth content migration', 'Effortless data transition', 'Legacy system migration']],
            ['Training and Support', ['Comprehensive user training', 'Ongoing support services', 'Empowers CMS management', 'Client-focused assistance']],
            ['SEO and Analytics Integration', ['Enhances search visibility', 'Analytics tool integration', 'Tracks website performance', 'SEO optimization strategies']],
            ['Scalability and Future-Proofing', ['Scalable CMS solutions', 'Future-ready architecture', 'Adapts to growth', 'Flexible system expansion']],
            ['Maintenance and Updates', ['Regular updates and patches', 'Ensures CMS security', 'Ongoing maintenance support', 'Keeps CMS up-to-date']],
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
