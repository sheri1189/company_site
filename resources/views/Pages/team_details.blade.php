@extends('layouts.app')
@section('title', 'Team Details - ibexstack')
@section('main-content')
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner container">
                            <x-breadcrum.heading heading="{{ __('Team Details') }}" />
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <x-breadcrum.title title="{{ __('Team Details') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content">


        <!-- Candidate  Details-->
        <section class="section-lgt">
            @foreach ($new_array as $key => $value)
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="pbmit-team-details">
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <div class="pbmit-team-img">
                                            <img src="{{ asset($value['img_url']) }}" class="img-fluid w-100"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 pbmit-team-details-inner">
                                        <div class="pbmit-team-des">
                                            <div class="pbmit-team-summary">
                                                <h2 class="pbmit-team-title">{{ $value['name'] }}</h2>
                                                <h4 class="pbmit-team-designation">{{ $value['category'] }}</h4>
                                            </div>
                                            <div class="pbmit-short-description">
                                                {{ $value['description'] }}
                                            </div>
                                            <ul class="pbmit-single-team-info">
                                                <li><label>Phone</label>
                                                    <a href="tel:{{ $value['phone'] }}">{{ $value['phone'] }}</a>
                                                </li>
                                                <li><label>Email</label>
                                                    <a href="mailto:{{ $value['email'] }}">
                                                        {{ $value['email'] }}</a>
                                                </li>

                                            </ul>
                                            <ul class="pbmit-social-links pbmit-team-social-links">
                                                <li class="pbmit-social-li pbmit-social-facebook">
                                                    <a href="https://www.linkedin.com/company/ibexstack/?originalSubdomain=pk"
                                                        title="Facebook" target="_blank">
                                                        <span>
                                                            <i class="fab fa-linkedin"></i>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="pbmit-social-li pbmit-social-instagram">
                                                    <a href="https://www.instagram.com/p/C3RnCR5C6wx/?utm_source=ig_web_copy_link"
                                                        title="instagram" target="_blank">
                                                        <span><i class="pbmit-base-icon-instagram"></i></span>
                                                    </a>
                                                </li>
                                                <li class="pbmit-social-li pbmit-social-youtube">
                                                    <a href="https://www.youtube.com/@ibexstack" title="youtube"
                                                        target="_blank">
                                                        <span><i class="pbmit-base-icon-youtube-play"></i></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-details-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h4 class="pbmit-title">About My Biography</h4>
                                <div>
                                    <span class="dropcap">AR</span>
                                    {{ $value['description'] }}
                                </div>
                                <div class="mt-4">Posuere morbi leo urna molestie at. Ipsum dolor sit amet consectetur
                                    adipiscing elit pellentesque habitant morbi. Odio ut enim blandit volutpat maecenas
                                    volutpat.
                                    Tristique magna sit amet purus gravida. Vitae proin sagittis nisl rhoncus. Sagittis nisl
                                    rhoncus mattis rhoncus urna. Mauris vitae ultricies leo integer. Elit eget gravida cum
                                    sociis
                                    natoque Amet consectetur adipiscing elit ut aliquam purus sit amet luctus.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-experience">
                    <div class="container">
                        <div class="row g-4 mt-0">
                            <div class="col-lg-6">
                                <h5 class="pbmit-title">Personal experience</h5>
                                <p>In my journey, personal experiences have been pivotal. Whether overcoming obstacles,
                                    achieving milestones, or simply interacting with others.</p>
                                <div class="progressbar pbmit-progress-style-4 pt-0">
                                    <span class="progress-label">Analysis</span>
                                    <div class="progress progress-lg progress-percent-bg">
                                        <div class="progress-bar aos aos-init aos-animate" data-aos="slide-right"
                                            data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                            role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                            style="width:90%">
                                            <span class="progress-percent">90%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progressbar pbmit-progress-style-4">
                                    <span class="progress-label">Marketing</span>
                                    <div class="progress progress-lg progress-percent-bg">
                                        <div class="progress-bar aos aos-init aos-animate" data-aos="slide-right"
                                            data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                            role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                            style="width:50%">
                                            <span class="progress-percent">50%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progressbar pbmit-progress-style-4">
                                    <span class="progress-label">Development</span>
                                    <div class="progress progress-lg progress-percent-bg">
                                        <div class="progress-bar aos aos-init aos-animate" data-aos="slide-right"
                                            data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                            role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                            style="width:70%">
                                            <span class="progress-percent">100%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h5 class="pbmit-title">Education & Awards</h5>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="pbmit-ihbox pbmit-ihbox-style-23">
                                            <div class="pbmit-ihbox-box">
                                                <div class="pbmit-ihbox-contents">
                                                    <div class="pbmit-ihbox-icon">
                                                        <div class="pbmit-ihbox-icon-wrapper"></div>
                                                    </div>
                                                    <h2 class="pbmit-element-title"> {{ $value['university'] }}</h2>
                                                    <div class="pbmit-heading-desc">
                                                        <span>{{ $value['duration'] }} - </span>Quisq comdo simply free.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-sm-12 col-md-4">
                                        <div class="pbmit-ihbox pbmit-ihbox-style-23">
                                            <div class="pbmit-ihbox-box">
                                                <div class="pbmit-ihbox-contents">
                                                    <div class="pbmit-ihbox-icon">
                                                        <div class="pbmit-ihbox-icon-wrapper"></div>
                                                    </div>
                                                    <h2 class="pbmit-element-title"> {{ $value['university'] }}</h2>
                                                    <div class="pbmit-heading-desc">
                                                        <span>{{ $value['duration'] }} - </span>Quisq comdo simply free.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                {{-- <div class="team-experience-inbox">
                                    <div class="pbmit-ihbox pbmit-ihbox-style-23">
                                        <div class="pbmit-ihbox-box">
                                            <div class="pbmit-ihbox-contents">
                                                <div class="pbmit-ihbox-icon">
                                                    <div class="pbmit-ihbox-icon-wrapper"></div>
                                                </div>
                                                <div class="pbmit-heading-desc">
                                                    <span>{{ $value['duration'] }} - </span>Cras eget lorem sed elit
                                                    finibus viverra.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pbmit-ihbox pbmit-ihbox-style-23">
                                        <div class="pbmit-ihbox-box">
                                            <div class="pbmit-ihbox-contents">
                                                <div class="pbmit-ihbox-icon">
                                                    <div class="pbmit-ihbox-icon-wrapper"></div>
                                                </div>
                                                <div class="pbmit-heading-desc">
                                                    <span>{{ $value['duration'] }} - </span>Cras eget lorem sed elit
                                                    finibus viverra.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pbmit-ihbox pbmit-ihbox-style-23">
                                        <div class="pbmit-ihbox-box">
                                            <div class="pbmit-ihbox-contents">
                                                <div class="pbmit-ihbox-icon">
                                                    <div class="pbmit-ihbox-icon-wrapper"></div>
                                                </div>
                                                <div class="pbmit-heading-desc">
                                                    <span>{{ $value['duration'] }} - </span>Cras eget lorem sed elit
                                                    finibus viverra.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-lg pbmit-bg-color-light">
                    <div class="container">
                        <div class="pbmit-heading-subheading text-center">
                            <h4 class="pbmit-subtitle-white">SEND US EMAIL</h4>
                            <h2 class="pbmit-title">Feel free to write</h2>
                        </div>
                        <form class="team-details-contact" id="formSubmit">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-6">
                                    <input type="hidden" name="To_Email" value="{{ $value['email'] }}">
                                    <input type="text" class="form-control mb-0" placeholder="Your Name"
                                        name="Name">
                                    <span class="text-danger fw-bold" id="errorName"></span>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <input type="email" class="form-control mb-0" placeholder="Email Address"
                                        name="email">
                                    <span class="text-danger fw-bold" id="errorEmail"></span>
                                </div>
                                <div class="col-sm-12 col-md-6 ">
                                    <input type="text" class="form-control mb-0" placeholder="Phone Number"
                                        name="phone">
                                    <span class="text-danger fw-bold " id="errorPhone"></span>
                                </div>
                                <div class="col-sm-12 col-md-6 ">
                                    <input type="text" class="form-control" placeholder="subject" name="subject">
                                </div>
                                <div class="col-sm-12 mt-0">
                                    <textarea class="form-control" placeholder="Write Message" name="Write_Message"></textarea>
                                </div>
                                <div class="mt-0">
                                    <button type="button" id="submitForm"
                                        class="pbmit-btn pbmit-btn-hover-secondary">Send a
                                        Massage</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
    </div>
@endsection
@section('script')
    <script>
      $(document).ready(function() {
    $(document).on("click", "#submitForm", function(e) {
        e.preventDefault();

        // Append spinner to the button
        $(this).append('<div class="spinner-border spinner-border-sm ms-2" id="spinner" role="status"></div>');

        // Disable the button to prevent multiple clicks
        $(this).prop("disabled", true);

        var formData = new FormData(formSubmit);
        $.ajax({
            url: "teamDetailMail",
            method: "POST",
            data: formData,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
            processData: false,
            contentType: false,
            success: function(result) {
                $("#submitForm").text("Send a Message").prop("disabled", false);
                $("#spinner").remove(); // Remove spinner
                if (result.message == 200) {
                    alert("Mail sent successfully");
                }
            },
            error: function(error) {
                $("#submitForm").text("Send a Message").prop("disabled", false);
                $("#spinner").remove(); // Remove spinner
                $("#errorName").empty();
                $("#errorEmail").empty();
                $("#errorPhone").empty();
                var response = error.responseJSON.errors;
                $("#errorName").append(response.Name);
                $("#errorEmail").append(response.email);
                $("#errorPhone").append(response.phone);
            }
        });
    });
});

    </script>
@endsection
