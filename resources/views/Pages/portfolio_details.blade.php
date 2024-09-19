@extends('layouts.app')
@section('title', 'Portfolio Details - ibexstack')
@section('main-content')
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner container">
                            <x-breadcrum.heading heading="{{ __('Portfolio Details') }}" />
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <x-breadcrum.title title="{{ __('Portfolio Details') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content">
        <section class="section-lgt portfolio-single">
           <div class="container">
              <div class="row">
                 <div class="col-12">
                    <div class="pbmit-short-description">
                       <h4>Gaining For VR Learning Programs</h4>
                          <span class="dropcap">M</span>Posuere morbi leo urna molestiPosuere morbi leo urna molestie at. Ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Odio ut enim blandit volutpat maecenas volutpat. Tristique magna sit Posuere morbi leo urna molestie at. Ipsum dolor sit amet consectetur adipiscing elit
                       </div>
                    <img  src="{{ asset("assets/images/coworking/project/project-02big.jpg") }}" class="img-fluid w-100 mb-4" alt="" />
                    <div class="pbmit-single-project-details-list">
                       <div class="pbmit-portfolio-lines-wrapper">
                          <ul class="pbmit-portfolio-lines-ul">
                             <li class="pbmit-portfolio-line-li">
                                <span class="pbmit-portfolio-line-title">Client: </span>
                                <span class="pbmit-portfolio-line-value">Michael Daniel</span>
                             </li>
                             <li class="pbmit-portfolio-line-li">
                                <span class="pbmit-portfolio-line-title">Team: </span>
                                <span class="pbmit-portfolio-line-value">Raelyn Esme, Richard Edward</span>
                             </li>
                             <li class="pbmit-portfolio-line-li">
                                <span class="pbmit-portfolio-line-title">Service: </span>
                                <span class="pbmit-portfolio-line-value">coworking Spaces, Global Movement</span>
                             </li>
                             <li class="pbmit-portfolio-line-li">
                                <span class="pbmit-portfolio-line-title">Category: </span>
                                <span class="pbmit-portfolio-line-value">
                                   <a href="{{ url("#") }}" rel="tag">Lifestyle</a>
                                </span>
                             </li>
                          </ul>
                       </div>
                    </div>
                 </div>
                 <div class="portfolio-details">
                    <h4>Working Process</h4>
                    <p>Posuere morbi leo urna molestie at. Ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Odio ut enim blandit volutpat maecenas volutpat. Tristique magna sit amet purus gravida. Vitae proin sagittis nisl rhoncus. Sagittis nisl rhoncus mattis rhoncus urna. Mauris vitae ultricies leo integer. Elit eget gravida cum sociis natoque Amet consectetur adipiscing elit ut aliquam purus sit amet luctus.</p>
                    <div class="row g-2">
                       <div class="col-md-4">
                          <div class="pbmit-ihbox-style-19">
                             <div class="pbmit-ihbox-box d-flex">
                                <div class="pbmit-ihbox-icon">
                                   <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-text">01</div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                   <h2 class="pbmit-element-title">Company Analytics</h2>
                                   <div class="pbmit-heading-desc">Neque porro est qui dolorem ipsum quia quaed inventore veritatis.</div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="col-md-4">
                          <div class="pbmit-ihbox-style-19">
                             <div class="pbmit-ihbox-box d-flex">
                                <div class="pbmit-ihbox-icon">
                                   <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-text">02</div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                   <h2 class="pbmit-element-title">Client Impressions</h2>
                                   <div class="pbmit-heading-desc">Neque porro est qui dolorem ipsum quia quaed inventore veritatis.</div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="col-md-4">
                          <div class="pbmit-ihbox-style-19">
                             <div class="pbmit-ihbox-box d-flex">
                                <div class="pbmit-ihbox-icon">
                                   <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-text">03</div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                   <h2 class="pbmit-element-title">Summary Results</h2>
                                   <div class="pbmit-heading-desc">Neque porro est qui dolorem ipsum quia quaed inventore veritatis.</div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="portfolio-challange">
                       <div class="row">
                          <div class="col-md-6">
                             <h5>The Challange</h5>
                             <div>Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy</div>
                             <ul class="list-group list-group-borderless">
                                <li class="list-group-item">
                                   <i class="pbmit-base-icon-ok"></i> Research beyond the business plan
                                </li>
                                <li class="list-group-item">
                                   <i class="pbmit-base-icon-ok"></i> Marketing options and rates
                                </li>
                                <li class="list-group-item">
                                   <i class="pbmit-base-icon-ok"></i> The ability to turnaround consulting
                                </li>
                                <li class="list-group-item">
                                   <i class="pbmit-base-icon-ok"></i> Customer engagement matters
                                </li>
                             </ul>
                          </div>
                          <div class="col-md-6 portfolio-challange-bg">
                          </div>
                       </div>
                    </div>
                    <div>
                       <h5>Final Result</h5>
                        <div>Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</div>
                    </div>
                    <nav class="navigation post-navigation" aria-label="Posts">
                       <div class="nav-links">
                          <div class="nav-previous">
                             <a href="{{ url("#") }}" rel="prev">
                                <span class="pbmit-portfolio-nav-icon">
                                   <i class=" pbmit-base-icon-left-small"></i>
                                </span>
                                <span class="pbmit-portfolio-nav-wrapper">
                                   <span class="pbmit-portfolio-nav-head">Previous</span>
                                   <span class="pbmit-portfolio-nav nav-title">Sociology Coliving</span>
                                </span>
                                <span class="pbmit-portfolio-nav-thumbnail">
                                   <img src="{{ asset("assets/images/coworking/project/project-03s.jpg") }}" class="img-fluid" alt="" />
                                </span>
                             </a>
                          </div>
                          <div class="nav-next">
                             <a href="{{ url("#") }}" rel="next">
                                <span class="pbmit-portfolio-nav-thumbnail">
                                   <img src="{{ asset("assets/images/coworking/project/project-01s.jpg") }}" class="img-fluid" alt="" />
                                </span>
                                <span class="pbmit-portfolio-nav-wrapper">
                                   <span class="pbmit-portfolio-nav-head">Next</span>
                                   <span class="pbmit-portfolio-nav nav-title">Armazem Cowork</span>
                                </span>
                                <span class="pbmit-portfolio-nav-icon">
                                   <i class=" pbmit-base-icon-right-small"></i>
                                </span>
                             </a>
                          </div>
                       </div>
                    </nav>
                 </div>
              </div>
           </div>
        </section>
     </div>
@endsection
