@extends('theme-1.layouts.master')
@section('title','Blog')
@section('content')

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Post Details</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="/">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Post Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- rts blog mlist area -->
    <div class="rts-blog-list-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <!-- rts blo post area -->
                <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                    <!-- single post -->
                    <div class="blog-single-post-listing details mb--0">
                        <div class="thumbnail">
                            <img src="{{asset("assets/images/blog/blog-lg-1.jpg")}}" alt="Business-Blog">
                        </div>
                        <div class="blog-listing-content">
                            <div class="user-info">
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-user-circle"></i>
                                    <span>by David Smith</span>
                                </div>
                                <!-- single infoe end -->
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-clock"></i>
                                    <span>by David Smith</span>
                                </div>
                                <!-- single infoe end -->
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-tags"></i>
                                    <span>by David Smith</span>
                                </div>
                                <!-- single infoe end -->
                            </div>
                            <h3 class="title">Profitable business makes your profit</h3>
                            <p class="disc para-1">
                                Collaboratively pontificate bleeding edge resources with inexpensive methodologies
                                globally initiate multidisciplinary compatible architectures pidiously repurpose leading
                                edge growth strategies with just in time web readiness communicate timely meta services
                            </p>
                            <p class="disc">
                                Onubia semper vel donec torquent fusce mauris felis aptent lacinia nisl, lectus
                                himenaeos euismod molestie iaculis interdum in laoreet condimentum dictum, quisque quam
                                risus sollicitudin gravida ut odio per a et. Gravida maecenas lobortis suscipit mus
                                sociosqu convallis, mollis vestibulum donec aliquam risus sapien ridiculus, nulla
                                sollicitudin eget in venenatis. Tortor montes platea iaculis posuere per mauris, eros
                                porta blandit curabitur ullamcorper varius
                            </p>
                            <!-- quote area start -->
                            <div class="rts-quote-area text-center">
                                <h5 class="title">“Placerat pretium tristique mattis tellus accuan metus dictumst
                                    vivamus odio nulla fusce auctor into suscipit habitasse class congue potenti
                                    iaculis”</h5>
                                <a href="#" class="name">Daniel X. Horrar</a>
                                <span>Author</span>
                            </div>
                            <!-- quote area end -->

                            <p class="disc">
                                Ultrices iaculis commodo parturient euismod pulvinar donec cum eget a, accumsan viverra
                                cras praesent cubilia dignissim ad rhoncus. Gravida maecenas lobortis suscipit mus
                                sociosqu convallis, mollis vestibulum donec aliquam risus sapien ridiculus, nulla
                                sollicitudin eget in venenatis. Tortor montes platea iaculis posuere per mauris, eros
                                porta blandit curabitur ullamcorper varius, nostra ante risus egestas suscipit. Quisque
                                interdum nec parturient facilisis nunc ac quam, ad est cubilia mauris himenaeos nascetur
                                vestibulum.
                            </p>

                            <div class="row g-5">
                                <div class="col-lg-6 col-md-6">
                                    <div class="thumbnail details">
                                        <img src="{{asset("assets/images/blog/details/01.jpg")}}" alt="finbiz_buseness">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="thumbnail details">
                                        <img src={{asset("assets/images/blog/details/02.jpg")}} alt="finbiz_buseness">
                                    </div>
                                </div>
                            </div>

                            <h4 class="title mt--40 mt_sm--20">Ultimate Business Strategy Solution</h4>
                            <p class="disc mb--25">
                                Gravida maecenas lobortis suscipit mus sociosqu convallis, mollis vestibulum donec
                                aliquam risus sapien ridiculus, nulla sollicitudin eget in venenatis. Tortor montes
                                platea iaculis posuere per mauris, eros porta blandit curabitur ullamcorper varius
                                nostra ante risus egestas.
                            </p>
                            <div class="row align-items-center">
                                <div class="col-lg-5">
                                    <div class="thumbnail details mb_sm--15"><img src="{{asset("assets/images/blog/details/03.jpg")}}" alt="finbiz_buseness">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="check-area-details">
                                        <!-- single check -->
                                        <div class="single-check">
                                            <i class="far fa-check-circle"></i>
                                            <span>How will activities traditional manufacturing</span>
                                        </div>
                                        <!-- single check End -->
                                        <!-- single check -->
                                        <div class="single-check">
                                            <i class="far fa-check-circle"></i>
                                            <span>All these digital and projects aim to enhance</span>
                                        </div>
                                        <!-- single check End -->
                                        <!-- single check -->
                                        <div class="single-check">
                                            <i class="far fa-check-circle"></i>
                                            <span>I monitor my software that takes screenshots</span>
                                        </div>
                                        <!-- single check End -->
                                        <!-- single check -->
                                        <div class="single-check">
                                            <i class="far fa-check-circle"></i>
                                            <span>Laoreet dolore niacin sodium glutimate
                                            </span>
                                        </div>
                                        <!-- single check End -->
                                        <!-- single check -->
                                        <div class="single-check">
                                            <i class="far fa-check-circle"></i>
                                            <span>Minim veniam sodium glutimate nostrud</span>
                                        </div>
                                        <!-- single check End -->
                                    </div>
                                </div>
                            </div>
                            <p class="disc mt--30">
                                Cubilia hendrerit luctus sem aptent curae gravida maecenas eleifend nunc nec vitae morbi
                                sodales fusce tristique aenean habitasse mattis sociis feugiat conubia mus auctor
                                praesent urna tincidunt taciti dui lobortis nullam. Mattis placerat feugiat ridiculus
                                sed a per curae fermentum aenean facilisi, vitae urna imperdiet ac mauris non inceptos
                                luctus hac odio.
                            </p>
                            <div class="row  align-items-center">
                                <div class="col-lg-6 col-md-12">
                                    <!-- tags details -->
                                    <div class="details-tag">
                                        <h6>Tags:</h6>
                                        <button>Services</button>
                                        <button>Business</button>
                                        <button>Growth</button>
                                    </div>
                                    <!-- tags details End -->
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="details-share">
                                        <h6>Share:</h6>
                                        <button><i class="fab fa-facebook-f"></i></button>
                                        <button><i class="fab fa-twitter"></i></button>
                                        <button><i class="fab fa-instagram"></i></button>
                                        <button><i class="fab fa-linkedin-in"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="author-area">
                                <div class="thumbnail details mb_sm--15">
                                    <img src="{{asset("assets/images/blog/details/03.jpg")}}" alt="finbiz_buseness">
                                </div>
                                <div class="author-details team">
                                    <span>Brand Designer</span>
                                    <h5>Angelina H. Dekato</h5>
                                    <p class="disc">
                                        Nullam varius luctus pharetra ultrices volpat facilisis donec tortor, nibhkisys
                                        habitant curabitur at nunc nisl magna ac rhoncus vehicula sociis tortor nist
                                        hendrerit molestie integer.
                                    </p>
                                </div>
                            </div>
                            <div class="replay-area-details">
                                <h4 class="title">Leave a Reply</h4>
                                <form action="#">
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <input type="text" placeholder="Your Name">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" placeholder="Your Name">
                                        </div>
                                        <div class="col-12">
                                            <input type="text" placeholder="Select Topic">
                                            <textarea></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <a class="rts-btn btn-primary" href="#">Submit Message</a>
                        </div>
                    </div>
                    <!-- single post End-->
                </div>
                <!-- rts-blog post end area -->
                <!--rts blog wizered area -->
                <div class="col-xl-4 col-md-12 col-sm-12 col-12">
                    <!-- single wizered start -->
                    <div class="rts-single-wized search">
                        <div class="wized-header">
                            <h5 class="title">
                                Search Hear
                            </h5>
                        </div>
                        <div class="wized-body">
                            <div class="rts-search-wrapper">
                                <input class="Search" type="text" placeholder="Enter Keyword">
                                <button><i class="fal fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- single wizered End -->
                    <!-- single wizered start -->
                    <div class="rts-single-wized Categories">
                        <div class="wized-header">
                            <h5 class="title">
                                Categories
                            </h5>
                        </div>
                        <div class="wized-body">
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Business Solution <i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Strategy Growth<i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Finance Solution<i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Investment Policy<i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Tax Managment<i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                        </div>
                    </div>
                    <!-- single wizered End -->
                    <!-- single wizered start -->
                    <div class="rts-single-wized Recent-post">
                        <div class="wized-header">
                            <h5 class="title">
                                Recent Posts
                            </h5>
                        </div>
                        <div class="wized-body">
                            <!-- recent-post -->
                            <div class="recent-post-single">
                                <div class="thumbnail">
                                    <a href="#"><img src="{{asset("assets/images/blog/details/recent-post/01.png")}}" alt="Blog_post"></a>
                                </div>
                                <div class="content-area">
                                    <div class="user">
                                        <i class="fal fa-clock"></i>
                                        <span>15 Jan, 2023</span>
                                    </div>
                                    <a class="post-title" href="#">
                                        <h6 class="title">We would love to share a similar experience</h6>
                                    </a>
                                </div>
                            </div>
                            <!-- recent-post End -->
                        </div>
                    </div>
                    <!-- single wizered End -->
                    <!-- single wizered start -->
                    <div class="rts-single-wized Recent-post">
                        <div class="wized-header">
                            <h5 class="title">
                                Gallery Posts
                            </h5>
                        </div>
                        <div class="wized-body">
                            <div class="gallery-inner">
                                <div class="row-1 single-row">
                                    <a href="#"><img src="{{asset("assets/images/blog/details/gallery/01.png")}}" alt="Gallery"></a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single wizered End -->
                    <!-- single wizered start -->
                    <div class="rts-single-wized">
                        <div class="wized-header">
                            <h5 class="title">
                                Popular Tags
                            </h5>
                        </div>
                        <div class="wized-body">
                            <div class="tags-wrapper">
                                <a href="#">Services</a>
                                <a href="#">Business</a>
                                <a href="#">Growth</a>
                                <a href="#">Finance</a>
                                <a href="#">UI/UX Design</a>
                                <a href="#">Solution</a>
                                <a href="#">Speed</a>
                                <a href="#">Strategy</a>
                                <a href="#">Technology</a>
                            </div>
                        </div>
                    </div>
                    <!-- single wizered End -->
                    <!-- single wizered start -->
                    <div class="rts-single-wized contact">
                        <div class="wized-header">
                            <a href="#"><img src="{{asset("assets/images/logo/logo-2.svg")}}" alt="Business_logo"></a>
                        </div>
                        <div class="wized-body">
                            <h5 class="title">Need Help? We Are Here
                                To Help You</h5>
                            <a class="rts-btn btn-primary" href="{{route('contact')}}">Contact Us</a>
                        </div>
                    </div>
                    <!-- single wizered End -->
                </div>
                <!-- rts- blog wizered end area -->
            </div>
        </div>
    </div>
    <!-- rts blog mlist area End -->

@endsection
