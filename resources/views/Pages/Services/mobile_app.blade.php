@extends('layouts.app')
@section('title', 'Mobile App Development - ibexstack')
@section('main-content')
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner container">
                            <x-breadcrum.heading heading="{{ __('Mobile App Development') }}" />
                            <x-breadcrum.description
                                description="{{ __('Transform business ideas into user-centric apps with our premier Mobile App Developer Services.') }}" />
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <x-breadcrum.title title="{{ __('Mobile App Development') }}" />
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
                            <x-services.details title="{!! __('Enhance Business impact through tailored Mobile App Development Solutions.') !!}" class="{!! 'col-md-6 portfolio-challange-bg' !!}"
                                description="{!! __(
                                    'At IbexStack, we specialize in mobile app development, focusing on delivering seamless solutions that enhance user engagement and drive business growth. Our team excels in both front-end and back-end development, ensuring your app is not only visually appealing and intuitive but also robust and scalable. We leverage the latest technologies to create responsive designs that work seamlessly across devices and platforms. Throughout the process, we collaborate closely with you to understand your goals and tailor our solutions to meet your specific needs. Whether you are looking to build a native app for iOS or Android, a cross-platform solution, or integrate with existing systems, IbexStack is committed to delivering high-quality, innovative mobile apps that empower your business in today is competitive digital landscape.',
                                ) !!}" />
                            <div class="service-page-infobox">
                                <div class="row">
                                    @foreach ([['Consultation and Strategy', ['Define goals, create roadmap.', 'Strategic planning, project outline.', 'Tailored strategies','Project consultation.', 'Align with business objectives.']], ['Design and User Experience (UX/UI)', ['Craft intuitive, engaging interfaces.', 'User-centric design approach.', 'Enhance usability, drive engagement.', 'Ensure seamless user experience.']], ['Development', ['Build robust, scalable apps.', 'Utilize latest technologies.', 'Implement best practices.', 'Meet functional requirements.']], ['Testing and Quality Assurance', ['Ensure flawless','Bug-free performance.', 'Rigorous testing methodologies.', 'Compatibility across platforms.', 'Optimize app reliability.']], ['Deployment and Support', ['Deploy, support, maintain apps.', 'App Store, Google Play deployment.', 'Ongoing maintenance services.', 'Ensure operational efficiency.']]] as $service)
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
