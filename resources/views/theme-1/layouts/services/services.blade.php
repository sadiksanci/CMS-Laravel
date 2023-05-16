@extends('theme-1.layouts.master')
@section('title','Our Services')
@section('content')

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">@lang("services.our services")</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="/">@lang("services.home")</a>
                        <span> / </span>
                        <a href="{{route("services")}}" class="active">@lang("services.our services")</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->


    <!-- our service area start -->
    <div class="rts-service-area rts-section-gapTop pb--200 service-two-bg bg_image">
        <div class="container">
            <div class="row g-5 service padding-controler">
                <!-- single service area -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100">
                    <div class="service-two-inner">
                        <a href="{{route('service.details')}}" class="thumbnail"><img src="{{asset("assets/images/service/02.jpg")}}" alt="Business_image"></a>
                        <div class="body-content">
                            <div class="hidden-area">
                                <h5 class="title">Strategy Growth</h5>
                                <p class="dsic">
                                    Porta sagittis diam imperdiet eu, tempus nisi aenean vehicula torquent dis mattis nullam
                                    bibendum morbi laoreet lobortis id
                                </p>
                                <a class="rts-read-more-two color-primary" href="service-details.html">Read More<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- our service area end -->

    <!-- service accordion area -->
    <div class="rts-accordion-area service rts-section-gap">
        <div class="accordion-service-bg bg_image ptb--120 ptb_md--80 ptb_sm--60">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="accordion-service-inner">
                            <div class="title-area-start">
                                <span class="sub color-primary">JUST A CONSULTANCY</span>
                                <h2 class="title">We know how to manage
                                    business globally</h2>
                            </div>
                            <div class="accordion-area">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Making Easy Business Growth
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Neque parturient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nec quam convallis ornare justo
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Business Solution Model
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Neque parturient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nec quam convallis ornare justo
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Finbiz Company Solution
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Neque parturient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nec quam convallis ornare justo
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Management Process
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Neque parturient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nec quam convallis ornare justo
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFive">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Managing Invesment
                                            </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Neque parturient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nec quam convallis ornare justo
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service accordion area End -->

    <!-- start pricing area -->
    <div class="rts-pricing-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rts-title-area pricing-planes text-center">
                        <p class="pre-title">
                            What We Offer
                        </p>
                        <h2 class="title">Packages & Pricing</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--50">
                <!-- single pricing plane -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="pricing-wrapper-one">
                        <div class="plane-process">
                            <span>/month</span>
                            <h3 class="title">$260</h3>
                        </div>
                        <!-- pricing header -->
                        <div class="pricing-header-start">
                            <span class="pre-title">Starter Package</span>
                            <h4 class="title">
                                Basic Plan
                            </h4>
                        </div>
                        <!-- pricing header End -->
                        <!-- pricing body start -->
                        <div class="pricing-body">
                            <!-- single pricing -->
                            <div class="single-pricing available">
                                <div class="icon">
                                    <i class="far fa-check"></i>
                                </div>
                                <span class="price-details">Business Solution</span>
                            </div>
                            <!-- single pricing End -->
                            <!-- single pricing -->
                            <div class="single-pricing available">
                                <div class="icon">
                                    <i class="far fa-check"></i>
                                </div>
                                <span class="price-details">24/7 Consultant Service</span>
                            </div>
                            <!-- single pricing End -->
                            <!-- single pricing -->
                            <div class="single-pricing available">
                                <div class="icon">
                                    <i class="far fa-check"></i>
                                </div>
                                <span class="price-details">Great Customer Support</span>
                            </div>
                            <!-- single pricing End -->
                            <!-- single pricing -->
                            <div class="single-pricing ">
                                <div class="icon">
                                    <i class="far fa-check"></i>
                                </div>
                                <span class="price-details">Market Growth Solution</span>
                            </div>
                            <!-- single pricing End -->
                            <!-- single pricing -->
                            <div class="single-pricing">
                                <div class="icon">
                                    <i class="far fa-check"></i>
                                </div>
                                <span class="price-details">24/7 Consultant Service</span>
                            </div>
                            <!-- single pricing End -->
                            <a class="rts-btn btn-primary" href="#">Buy This</a>
                        </div>
                        <!-- pricing body end -->
                    </div>
                </div>
                <!-- single pricing plane -->
                <!-- single pricing plane -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--80">
                    <div class="pricing-wrapper-one">
                        <div class="plane-process">
                            <span>/month</span>
                            <h3 class="title">$260</h3>
                        </div>
                        <!-- pricing header -->
                        <div class="pricing-header-start">
                            <span class="pre-title">Starter Package</span>
                            <h4 class="title">
                                Basic Plan
                            </h4>
                        </div>
                        <!-- pricing header End -->
                        <!-- pricing body start -->
                        <div class="pricing-body">
                            <!-- single pricing -->
                            <div class="single-pricing available">
                                <div class="icon">
                                    <i class="far fa-check"></i>
                                </div>
                                <span class="price-details">Business Solution</span>
                            </div>
                            <!-- single pricing End -->
                            <!-- single pricing -->
                            <div class="single-pricing available">
                                <div class="icon">
                                    <i class="far fa-check"></i>
                                </div>
                                <span class="price-details">24/7 Consultant Service</span>
                            </div>
                            <!-- single pricing End -->
                            <!-- single pricing -->
                            <div class="single-pricing available">
                                <div class="icon">
                                    <i class="far fa-check"></i>
                                </div>
                                <span class="price-details">Great Customer Support</span>
                            </div>
                            <!-- single pricing End -->
                            <!-- single pricing -->
                            <div class="single-pricing ">
                                <div class="icon">
                                    <i class="far fa-check"></i>
                                </div>
                                <span class="price-details">Market Growth Solution</span>
                            </div>
                            <!-- single pricing End -->
                            <!-- single pricing -->
                            <div class="single-pricing">
                                <div class="icon">
                                    <i class="far fa-check"></i>
                                </div>
                                <span class="price-details">24/7 Consultant Service</span>
                            </div>
                            <!-- single pricing End -->
                            <a class="rts-btn btn-primary" href="#">Buy This</a>
                        </div>
                        <!-- pricing body end -->
                    </div>
                </div>
                <!-- single pricing plane -->
                <!-- single pricing plane -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 mt_md--80 mt_sm--80">
                    <div class="pricing-wrapper-one">
                        <div class="plane-process">
                            <span>/month</span>
                            <h3 class="title">$260</h3>
                        </div>
                        <!-- pricing header -->
                        <div class="pricing-header-start">
                            <span class="pre-title">Starter Package</span>
                            <h4 class="title">
                                Basic Plan
                            </h4>
                        </div>
                        <!-- pricing header End -->
                        <!-- pricing body start -->
                        <div class="pricing-body">
                            <!-- single pricing -->
                            <div class="single-pricing available">
                                <div class="icon">
                                    <i class="far fa-check"></i>
                                </div>
                                <span class="price-details">Business Solution</span>
                            </div>
                            <!-- single pricing End -->
                            <!-- single pricing -->
                            <div class="single-pricing available">
                                <div class="icon">
                                    <i class="far fa-check"></i>
                                </div>
                                <span class="price-details">24/7 Consultant Service</span>
                            </div>
                            <!-- single pricing End -->
                            <!-- single pricing -->
                            <div class="single-pricing available">
                                <div class="icon">
                                    <i class="far fa-check"></i>
                                </div>
                                <span class="price-details">Great Customer Support</span>
                            </div>
                            <!-- single pricing End -->
                            <!-- single pricing -->
                            <div class="single-pricing ">
                                <div class="icon">
                                    <i class="far fa-check"></i>
                                </div>
                                <span class="price-details">Market Growth Solution</span>
                            </div>
                            <!-- single pricing End -->
                            <!-- single pricing -->
                            <div class="single-pricing">
                                <div class="icon">
                                    <i class="far fa-check"></i>
                                </div>
                                <span class="price-details">24/7 Consultant Service</span>
                            </div>
                            <!-- single pricing End -->
                            <a class="rts-btn btn-primary" href="#">Buy This</a>
                        </div>
                        <!-- pricing body end -->
                    </div>
                </div>
                <!-- single pricing plane -->
            </div>
        </div>
    </div>
    <!-- end pricing area -->

@endsection
