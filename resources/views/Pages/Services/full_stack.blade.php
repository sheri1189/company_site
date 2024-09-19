@extends('layouts.app')
@section('title', 'Full Stack Development - ibexstack')
@section('main-content')
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner container">
                            <x-breadcrum.heading heading="{{ __('Full Stack Development') }}" />
                            <x-breadcrum.description
                                description="{{ __('Unlock the potential of full-stack development with our services. We deliver comprehensive, innovative solutions to drive your business success.') }}" />
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <x-breadcrum.title title="{{ __('Full Stack Development') }}" />
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
                            <x-services.details title="{!! __('Empower your business with our complete, cutting-edge full-stack development solutions') !!}" class="{!! 'col-md-6 portfolio-challange-bg' !!}"
                                description="{!! __('At IbexStack, we specialize in full-stack development, providing comprehensive solutions that cover every aspect of your project from start to finish. Our expertise spans both front-end and back-end development, ensuring seamless integration and functionality across your entire system. Whether you need a dynamic website, a robust web application, or a complex enterprise solution, our skilled developers are equipped to handle it all.

                                                                                                                                                                                                                                                                Our front-end development services focus on creating intuitive, user-friendly interfaces that enhance the user experience and drive engagement. We utilize the latest technologies and frameworks to build responsive and visually appealing designs that work flawlessly across all devices and platforms.

                                                                                                                                                                                                                                                                On the back end, we develop powerful and scalable server-side applications that ensure your system runs smoothly and efficiently. We manage databases, server configurations, and API integrations to provide a solid foundation for your digital infrastructure. Our full-stack developers are proficient in a wide range of programming languages and tools, allowing us to tailor our solutions to meet your specific needs.

                                                                                                                                                                                                                                                                At IbexStack, we are committed to delivering high-quality, innovative solutions that drive business success. Our full-stack development services are designed to provide you with a competitive edge, enabling you to achieve your goals and stay ahead in today’s fast-paced digital landscape.') !!}" />
                            <div class="service-page-infobox">
                                <div class="row">
                                    @foreach ([
            ['Front-end Development', ['Structure and style pages.', 'Adding interactivity to pages.', 'Build responsive user interfaces.', 'Accessible on all devices.']],
            ['Back-end Development', ['Writing server-side logic.', 'Designing and querying databases.', 'Creating RESTful or GraphQL APIs.']],
            ['Integration', ['Integrate APIs, payment gateways.', 'Social media platforms supported.', 'Email support.', 'Design and implement for large-scale.']],
            ['DevOps and Deployment', ['Use Git for collaboration.', 'Automate deployment pipelines effectively.', 'Manage web hosting environment.']],
            ['Security', ['Secure access mechanisms employed.', 'Encryption, secure coding.', 'Security audits.', 'Vulnerability assessments conducted.']],
            ['Performance Optimization', ['Enhance performance with caching.', 'Distribute workloads for reliability.', 'Scale horizontally, vertically for loads.']],
            ['Testing and Quality Assurance', ['Conduct functional tests.', 'Write automated tests for regression.', 'Perform user acceptance testing.', 'Deliver reliable, bug-free applications.']],
            ['Maintenance and Support', ['Fixing bugs, updates, security patches.', 'Offering ongoing support services.', 'Ensuring app operational smoothness.', 'Adding new features as required.']],
            ['Project Management', ['Agile methodologies for efficiency.', 'Tracking progress with tools.', 'Collaboration with stakeholders.', 'Ensuring project delivery on time.']]
        ] as $service)
                                        <x-services.details.information :title="$service[0]"
                                            :description="$service[1]" />
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
