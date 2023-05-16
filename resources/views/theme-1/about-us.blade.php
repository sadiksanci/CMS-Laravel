@extends('theme-1.layouts.master')
@section('title','About Us')
@section('content')

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">About Us</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="index-2.html">Home</a>
                        <span> / </span>
                        <a href="#" class="active">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- rts about us section start -->
    <div class="rts-about-area rts-section-gap">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="about-image-v-inner">
                        <div class="image-area">
                            <img class="mt--110 img-1" src="assets/images/about/main/about-03.jpg" alt="BUsiness_image">
                            <img class="img-over" src="assets/images/about/main/about-04.jpg" alt="BUsiness_image">
                            <div class="goal-button-wrapper">
                                <div class="vedio-icone">
                                    <a id="play-video" class="video-play-button" href="#">
                                        <span></span>
                                    </a>
                                    <div id="video-overlay" class="video-overlay">
                                        <a class="video-overlay-close">×</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-progress-inner">
                        <div class="title-area">
                            <span>JUST A CONSULTANCY</span>
                            <h2 class="title">Get Consulting For Better
                                Business Growth</h2>
                        </div>
                        <!-- inner start -->
                        <div class="inner">
                            <p class="disc">Dapibus curae risus rutrum curabitur nunc sociis nullam nisl, aliquet quis
                                iaculis scelerisque primis massa imperdiet, dis senectus blandit aptent nulla cubilia
                                sodales convallis tortor pellentesque nulla.</p>
                            <div class="rts-progress-one-wrapper">
                                <div class="single-progress">
                                    <div class="progress-top">
                                        <p class="progress-title">Business Strategy</p>
                                        <span class="persectage">70%</span>
                                    </div>
                                    <div class="meter cadetblue">
                                        <span data-progress="70" style="width:0;"></span>
                                    </div>
                                </div>
                                <div class="single-progress">
                                    <div class="progress-top">
                                        <p class="progress-title">Company Strength</p>
                                        <span class="persectage">93%</span>
                                    </div>
                                    <div class="meter">
                                        <span data-progress="93" style="width:0;"></span>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="rts-btn btn-primary">Make an Appointment</a>
                        </div>
                        <!-- end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts about us section end -->

    <!-- rts services area start -->
    <div class="rts-service-area rts-section-gapBottom">
        <div class="container-fluid service-main about-service-width-controler">
            <div class="background-service service-three row">
                <div class="row g-5">
                    <div class="rts-title-area service-four text-center pt--40 pt_md--0 mt_sm--0 mt_md--0">
                        <p class="pre-title">
                            Our Services
                        </p>
                        <h2 class="title">What We Provide</h2>
                    </div>
                    <!-- start single Service -->
                    <div class="col-xl-4 col-md-6 col-sm-12 col-12 pt--15 mb--80 mb_md--40 mb_sm--30">
                        <div class="service-one-inner-four">
                            <div class="big-thumbnail-area">
                                <a href="#" class="thumbnail">
                                    <img src="assets/images/service/07.jpg" alt="Business-service">
                                </a>
                                <div class="content">
                                    <img src="assets/images/service/icon/13.svg" alt="Business-icon">
                                    <h5 class="title">Business Consultancy</h5>
                                    <p class="disc">Aenean augue venenatis est porttitor fames aptent lobortis nam
                                        potenti</p>
                                </div>
                                <a href="service-details.html" class="over_link"></a>
                            </div>
                            <a href="service-details.html" class="rts-btn btn-primary"> Read More<i
                                    class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- start single Service -->
                    <div class="col-xl-4 col-md-6 col-sm-12 col-12 pt--15 mb--80 mb_md--40 mb_sm--30">
                        <div class="service-one-inner-four">
                            <div class="big-thumbnail-area">
                                <a href="#" class="thumbnail">
                                    <img src="assets/images/service/08.jpg" alt="Business-service">
                                </a>
                                <div class="content">
                                    <img src="assets/images/service/icon/14.svg" alt="Business-icon">
                                    <h5 class="title">Business Appoinment</h5>
                                    <p class="disc">Aenean augue venenatis est porttitor fames aptent lobortis nam
                                        potenti</p>
                                </div>
                                <a href="service-details.html" class="over_link"></a>
                            </div>
                            <a href="service-details.html" class="rts-btn btn-primary"> Read More<i
                                    class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- start single Service -->
                    <div class="col-xl-4 col-md-6 col-sm-12 col-12 pt--15 mb--80">
                        <div class="service-one-inner-four">
                            <div class="big-thumbnail-area">
                                <a href="#" class="thumbnail">
                                    <img src="assets/images/service/09.jpg" alt="Business-service">
                                </a>
                                <div class="content">
                                    <img src="assets/images/service/icon/15.svg" alt="Business-icon">
                                    <h5 class="title">Consultancy Foundation</h5>
                                    <p class="disc">Aenean augue venenatis est porttitor fames aptent lobortis nam
                                        potenti</p>
                                </div>
                                <a href="service-details.html" class="over_link"></a>
                            </div>
                            <a href="service-details.html" class="rts-btn btn-primary"> Read More<i
                                    class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="cta-one-bg col-12">
                    <div class="cta-one-inner">
                        <div class="cta-left">
                            <h3 class="title animated fadeIn">Let’s discuss about how we can help
                                make your business better</h3>
                        </div>
                        <div class="cta-right">
                            <a class="rts-btn btn-white" href="#">Lets Work Togather</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts services area End -->

    <!-- rts team two area -->
    <div class="rts-team-area rts-section-gapBottom appoinment-team team-two">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rts-title-area team text-center">
                        <p class="pre-title">
                            Professionals Team
                        </p>
                        <h2 class="title">Professionals Team</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--15 mt_sm--0">
                <!-- single team -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <!-- single team inner -->
                    <div class="team-inner-two">
                        <a href="team-details.html" class="thumbnail">
                            <img src="assets/images/team/tm/lg-01.jpg" alt="">
                        </a>
                        <!-- Acquaintance area -->
                        <div class="acquaintance-area">
                            <div class="header">
                                <a href="team-details.html">
                                    <h5 class="title">Kevin Martin</h5>
                                </a>
                                <span>Consultant</span>
                            </div>
                            <div class="acquaintance-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <!-- Acquaintance area -->
                    </div>
                    <!-- single team inner End -->
                </div>
                <!-- single team End -->
                <!-- single team -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <!-- single team inner -->
                    <div class="team-inner-two">
                        <a href="team-details.html" class="thumbnail">
                            <img src="assets/images/team/tm/lg-02.jpg" alt="">
                        </a>
                        <!-- Acquaintance area -->
                        <div class="acquaintance-area">
                            <div class="header">
                                <a href="team-details.html">
                                    <h5 class="title">Martin Jone</h5>
                                </a>
                                <span>Manager</span>
                            </div>
                            <div class="acquaintance-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <!-- Acquaintance area -->
                    </div>
                    <!-- single team inner End -->
                </div>
                <!-- single team End -->
                <!-- single team -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <!-- single team inner -->
                    <div class="team-inner-two">
                        <a href="team-details.html" class="thumbnail">
                            <img src="assets/images/team/tm/lg-03.jpg" alt="">
                        </a>
                        <!-- Acquaintance area -->
                        <div class="acquaintance-area">
                            <div class="header">
                                <a href="team-details.html">
                                    <h5 class="title">Jone Lee</h5>
                                </a>
                                <span>CEO</span>
                            </div>
                            <div class="acquaintance-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <!-- Acquaintance area -->
                    </div>
                    <!-- single team inner End -->
                </div>
                <!-- single team End -->
            </div>
        </div>
    </div>
    <!-- rts team two area End -->

    <!-- rts faq section area -->
    <div class="rts-faq-section rts-section-gap rts-faq-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-two-inner">
                        <div class="title-area-faq">
                            <span class="sub">WHY CHOOSE US</span>
                            <h2 class="title">We Are Experienced
                                <span class="sm-title">Business <span>Solution</span></span>
                            </h2>
                        </div>
                        <!-- faq accordion area -->
                        <div class="faq-accordion-area">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <span>01. </span> What should i included my personal details?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Neque partrient nascetur facilisis suscipit ridiculus agna lobortis
                                            imperdiet vivamus est aliquam euismod nector quam convallis ornare justo
                                            service lifereu visionary sources unleash online businesss solutions
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <span>02. </span> Where i can find my business growth result?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Neque partrient nascetur facilisis suscipit ridiculus agna lobortis
                                            imperdiet vivamus est aliquam euismod nector quam convallis ornare justo
                                            service lifereu visionary sources unleash online businesss solutions
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <span>03. </span> Did you get any business consultant?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Neque partrient nascetur facilisis suscipit ridiculus agna lobortis
                                            imperdiet vivamus est aliquam euismod nector quam convallis ornare justo
                                            service lifereu visionary sources unleash online businesss solutions
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- faq accordion area end -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="thumbnail-faq-four">
                        <img src="assets/images/faq/02.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts faq section area End -->

    <!-- customers feed back area start -->
    <div class="rts-customer-feedback-area rts-section-gap bg-customer-feedback">
        <div class="container">
            <div class="row">
                <div class="rts-title-area feedback team text-center">
                    <p class="pre-title">
                        Feedbacks
                    </p>
                    <h2 class="title">Customer Feedbacks</h2>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="testimopnial-wrapper-two">
                        <div class="test-header">
                            <div class="thumbnail">
                                <img src="assets/images/testimonials/02.png" alt="">
                            </div>
                            <div class="name-desig">
                                <h5 class="title">David Smith</h5>
                                <span class="designation">Business Expert</span>
                            </div>
                        </div>
                        <div class="test-body">
                            <p class="disc">
                                “Parallel task user friendly convergence through supply are chains type siflify reliable
                                meta provide service visionary sources unleash tactical thinking via granular
                                intellectual capital architect dynamic information value online business solution
                                services”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="testimopnial-wrapper-two">
                        <div class="test-header">
                            <div class="thumbnail">
                                <img src="assets/images/testimonials/03.png" alt="">
                            </div>
                            <div class="name-desig">
                                <h5 class="title">David Smith</h5>
                                <span class="designation">Business Expert</span>
                            </div>
                        </div>
                        <div class="test-body">
                            <p class="disc">
                                “Parallel task user friendly convergence through supply are chains type siflify reliable
                                meta provide service visionary sources unleash tactical thinking via granular
                                intellectual capital architect dynamic information value online business solution
                                services”
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- customers feed back area end -->

@endsection
