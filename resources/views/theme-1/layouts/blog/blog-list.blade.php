@extends('theme-1.layouts.master')
@section('title','Blog')
@section('content')

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">@lang('blog.latest posts')/h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="index-2.html">@lang('blog.home')</a>
                        <span> / </span>
                        <a href="#" class="active">@lang('blog.latest posts')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- rts blog list area -->
    <div class="rts-blog-list-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <!-- rts blog post area -->
                <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                    <!-- single post -->
                    <div class="blog-single-post-listing">
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
                                    <span>15 Jan, 2023</span>
                                </div>
                                <!-- single infoe end -->
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-tags"></i>
                                    <span>Business Solution</span>
                                </div>
                                <!-- single info end -->
                            </div>
                            <a class="blog-title" href="{{route('blog.details')}}">
                                <h3 class="title">Profitable business makes your profit</h3>
                            </a>
                            <p class="disc">
                                Collaboratively pontificate bleeding edge resources with inexpensive methodologies
                                globally initiate multidisciplinary compatible architectures pidiously repurpose leading
                                edge growth strategies with just in time web readiness communicate timely meta services
                            </p>
                            <a class="rts-btn btn-primary" href="{{route('blog.details')}}">Read Details</a>
                        </div>
                    </div>
                    <!-- single post End-->
                    <!-- single post -->
                    <div class="blog-single-post-listing">
                        <div class="thumbnail">
                            <img src="{{asset("assets/images/blog/blog-lg-2.jpg")}}" alt="Business-Blog">
                        </div>
                        <div class="blog-listing-content">
                            <div class="user-info">
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-user-circle"></i>
                                    <span>by David Smith</span>
                                </div>
                                <!-- single info end -->
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-clock"></i>
                                    <span>15 Jan, 2023</span>
                                </div>
                                <!-- single info end -->
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-tags"></i>
                                    <span>Business Solution</span>
                                </div>
                                <!-- single info end -->
                            </div>
                            <a class="blog-title" href="{{route('blog.details')}}">
                                <h3 class="title">Profitable business makes your profit</h3>
                            </a>
                            <p class="disc">
                                Collaboratively pontificate bleeding edge resources with inexpensive methodologies
                                globally initiate multidisciplinary compatible architectures pidiously repurpose leading
                                edge growth strategies with just in time web readiness communicate timely meta services
                            </p>
                            <a class="rts-btn btn-primary" href="{{route('blog.details')}}">Read Details</a>
                        </div>
                    </div>
                    <!-- single post End-->
                    <!-- single post -->
                    <div class="blog-single-post-listing">
                        <div class="thumbnail">
                            <img src="assets/images/blog/blog-lg-3.jpg" alt="Business-Blog">
                        </div>
                        <div class="blog-listing-content">
                            <div class="user-info">
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-user-circle"></i>
                                    <span>by David Smith</span>
                                </div>
                                <!-- single info end -->
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-clock"></i>
                                    <span>15 Jan, 2023</span>
                                </div>
                                <!-- single info end -->
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-tags"></i>
                                    <span>Business Solution</span>
                                </div>
                                <!-- single info end -->
                            </div>
                            <a class="blog-title" href="{{route('blog.details')}}">
                                <h3 class="title">Profitable business makes your profit</h3>
                            </a>
                            <p class="disc">
                                Collaboratively pontificate bleeding edge resources with inexpensive methodologies
                                globally initiate multidisciplinary compatible architectures pidiously repurpose leading
                                edge growth strategies with just in time web readiness communicate timely meta services
                            </p>
                            <a class="rts-btn btn-primary" href="{{route('blog.details')}}">Read Details</a>
                        </div>
                    </div>
                    <!-- single post End-->
                    <!-- single post -->
                    <div class="blog-single-post-listing mb_sm--15">
                        <div class="thumbnail">
                            <img src="assets/images/blog/blog-lg-4.jpg" alt="Business-Blog">
                        </div>
                        <div class="blog-listing-content">
                            <div class="user-info">
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-user-circle"></i>
                                    <span>by David Smith</span>
                                </div>
                                <!-- single info end -->
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-clock"></i>
                                    <span>15 Jan, 2023</span>
                                </div>
                                <!-- single info end -->
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-tags"></i>
                                    <span>Business Solution</span>
                                </div>
                                <!-- single info end -->
                            </div>
                            <a class="blog-title" href="{{route('blog.details')}}">
                                <h3 class="title">Profitable business makes your profit</h3>
                            </a>
                            <p class="disc">
                                Collaboratively pontificate bleeding edge resources with inexpensive methodologies
                                globally initiate multidisciplinary compatible architectures pidiously repurpose leading
                                edge growth strategies with just in time web readiness communicate timely meta services
                            </p>
                            <a class="rts-btn btn-primary" href="{{route('blog.details')}}">Read Details</a>
                        </div>
                    </div>
                    <!-- single post End-->
                    <!-- pagination area -->
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <div class="pagination">
                                    <button class="active">01</button>
                                    <button>02</button>
                                    <button>03</button>
                                    <button>04</button>
                                    <button><i class="fal fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- pagination area End -->
                </div>
                <!-- rts-blog post end area -->
                <!--rts blog wized area -->
                <div class="col-xl-4 col-md-12 col-sm-12 col-12 mt_lg--60">
                    <!-- single wized start -->
                    <div class="rts-single-wized search">
                        <div class="wized-header">
                            <h5 class="title">
                               @lang("blog.search hear")
                            </h5>
                        </div>
                        <div class="wized-body">
                            <div class="rts-search-wrapper">
                                <input class="Search" type="text" placeholder="Enter Keyword">
                                <button><i class="fal fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- single wized End -->
                    <!-- single wized start -->
                    <div class="rts-single-wized Categories">
                        <div class="wized-header">
                            <h5 class="title">
                                @lang('blog.categories')
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
                                <li><a href="#">Solution Model<i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">More Business <i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Finbiz Solution <i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Consulting Busiuness<i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                        </div>
                    </div>
                    <!-- single wized End -->
                    <!-- single wized start -->
                    <div class="rts-single-wized Recent-post">
                        <div class="wized-header">
                            <h5 class="title">
                                @lang('blog.recent posts')
                            </h5>
                        </div>
                        <div class="wized-body">
                            <!-- recent-post -->
                            <div class="recent-post-single">
                                <div class="thumbnail">
                                    <a href="#"><img src="assets/images/blog/details/recent-post/01.png" alt="Blog_post"></a>
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
                            <!-- recent-post -->
                            <div class="recent-post-single">
                                <div class="thumbnail">
                                    <a href="#"><img src="assets/images/blog/details/recent-post/02.png" alt="Blog_post"></a>
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
                            <!-- recent-post -->
                            <div class="recent-post-single">
                                <div class="thumbnail">
                                    <a href="#"><img src="assets/images/blog/details/recent-post/03.png" alt="Blog_post"></a>
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
                            <!-- recent-post -->
                            <div class="recent-post-single">
                                <div class="thumbnail">
                                    <a href="#"><img src="assets/images/blog/details/recent-post/04.png" alt="Blog_post"></a>
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
                    <div class="rts-single-wized">
                        <div class="wized-header">
                            <h5 class="title">
                                @lang('blog.popular tags')
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
                </div>
                <!-- rts- blog wized end area -->
            </div>
        </div>
    </div>
    <!-- rts blog list area End -->

@endsection
