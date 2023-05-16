@extends('theme-1.layouts.master')
@section('title','Blog')
@section('content')

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Latest Posts</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="index-2.html">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Latest Posts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->



    <!-- rts blog grid area -->
    <div class="rts-blog-grid-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-8 col-md-12 col-sm-12 col-12 pr--40 pr_md--0 pr_sm-controler--0">
                    <div class="row g-5">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <!-- start blog grid inner -->
                            <div class="blog-grid-inner">
                                <div class="blog-header">
                                    <a class="thumbnail" href="{{route('blog.details')}}">
                                        <img src="assets/images/blog/grid/01.jpg" alt="Business_Blog">
                                    </a>
                                    <div class="blog-info">
                                        <div class="user">
                                            <i class="fal fa-user-circle"></i>
                                            <span>by Smith</span>
                                        </div>
                                        <div class="user">
                                            <i class="fal fa-tags"></i>
                                            <span>Business</span>
                                        </div>
                                    </div>
                                    <div class="date">
                                        <h6 class="title">15</h6>
                                        <span>Jan</span>
                                    </div>
                                </div>
                                <div class="blog-body">
                                    <a href="blog-details.html">
                                        <h5 class="title">
                                            Building smart business grow solution for you
                                        </h5>
                                    </a>
                                </div>
                            </div>
                            <!-- end blog grid inner -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <!-- start blog grid inner -->
                            <div class="blog-grid-inner">
                                <div class="blog-header">
                                    <a class="thumbnail" href="blog-details.html">
                                        <img src="assets/images/blog/grid/02.jpg" alt="Business_Blog">
                                    </a>
                                    <div class="blog-info">
                                        <div class="user">
                                            <i class="fal fa-user-circle"></i>
                                            <span>by Smith</span>
                                        </div>
                                        <div class="user">
                                            <i class="fal fa-tags"></i>
                                            <span>Business</span>
                                        </div>
                                    </div>
                                    <div class="date">
                                        <h6 class="title">15</h6>
                                        <span>Jan</span>
                                    </div>
                                </div>
                                <div class="blog-body">
                                    <a href="blog-details.html">
                                        <h5 class="title">
                                            Smart business grow solution for your Building.
                                        </h5>
                                    </a>
                                </div>
                            </div>
                            <!-- end blog grid inner -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <!-- start blog grid inner -->
                            <div class="blog-grid-inner">
                                <div class="blog-header">
                                    <a class="thumbnail" href="blog-details.html">
                                        <img src="assets/images/blog/grid/03.jpg" alt="Business_Blog">
                                    </a>
                                    <div class="blog-info">
                                        <div class="user">
                                            <i class="fal fa-user-circle"></i>
                                            <span>by Smith</span>
                                        </div>
                                        <div class="user">
                                            <i class="fal fa-tags"></i>
                                            <span>Business</span>
                                        </div>
                                    </div>
                                    <div class="date">
                                        <h6 class="title">15</h6>
                                        <span>Jan</span>
                                    </div>
                                </div>
                                <div class="blog-body">
                                    <a href="blog-details.html">
                                        <h5 class="title">
                                            More smart business grow solution for you
                                        </h5>
                                    </a>
                                </div>
                            </div>
                            <!-- end blog grid inner -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <!-- start blog grid inner -->
                            <div class="blog-grid-inner">
                                <div class="blog-header">
                                    <a class="thumbnail" href="blog-details.html">
                                        <img src="assets/images/blog/grid/04.jpg" alt="Business_Blog">
                                    </a>
                                    <div class="blog-info">
                                        <div class="user">
                                            <i class="fal fa-user-circle"></i>
                                            <span>by Smith</span>
                                        </div>
                                        <div class="user">
                                            <i class="fal fa-tags"></i>
                                            <span>Business</span>
                                        </div>
                                    </div>
                                    <div class="date">
                                        <h6 class="title">15</h6>
                                        <span>Jan</span>
                                    </div>
                                </div>
                                <div class="blog-body">
                                    <a href="blog-details.html">
                                        <h5 class="title">
                                            Best smart business grow solution for you
                                        </h5>
                                    </a>
                                </div>
                            </div>
                            <!-- end blog grid inner -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <!-- start blog grid inner -->
                            <div class="blog-grid-inner">
                                <div class="blog-header">
                                    <a class="thumbnail" href="blog-details.html">
                                        <img src="assets/images/blog/grid/05.jpg" alt="Business_Blog">
                                    </a>
                                    <div class="blog-info">
                                        <div class="user">
                                            <i class="fal fa-user-circle"></i>
                                            <span>by Smith</span>
                                        </div>
                                        <div class="user">
                                            <i class="fal fa-tags"></i>
                                            <span>Business</span>
                                        </div>
                                    </div>
                                    <div class="date">
                                        <h6 class="title">15</h6>
                                        <span>Jan</span>
                                    </div>
                                </div>
                                <div class="blog-body">
                                    <a href="blog-details.html">
                                        <h5 class="title">
                                            Solution your business grow solution for you
                                        </h5>
                                    </a>
                                </div>
                            </div>
                            <!-- end blog grid inner -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <!-- start blog grid inner -->
                            <div class="blog-grid-inner">
                                <div class="blog-header">
                                    <a class="thumbnail" href="blog-details.html">
                                        <img src="assets/images/blog/grid/06.jpg" alt="Business_Blog">
                                    </a>
                                    <div class="blog-info">
                                        <div class="user">
                                            <i class="fal fa-user-circle"></i>
                                            <span>by Smith</span>
                                        </div>
                                        <div class="user">
                                            <i class="fal fa-tags"></i>
                                            <span>Business</span>
                                        </div>
                                    </div>
                                    <div class="date">
                                        <h6 class="title">15</h6>
                                        <span>Jan</span>
                                    </div>
                                </div>
                                <div class="blog-body">
                                    <a href="blog-details.html">
                                        <h5 class="title">
                                            Smart business grow solution for your Company
                                        </h5>
                                    </a>
                                </div>
                            </div>
                            <!-- end blog grid inner -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <!-- start blog grid inner -->
                            <div class="blog-grid-inner">
                                <div class="blog-header">
                                    <a class="thumbnail" href="blog-details.html">
                                        <img src="assets/images/blog/grid/07.jpg" alt="Business_Blog">
                                    </a>
                                    <div class="blog-info">
                                        <div class="user">
                                            <i class="fal fa-user-circle"></i>
                                            <span>by Smith</span>
                                        </div>
                                        <div class="user">
                                            <i class="fal fa-tags"></i>
                                            <span>Business</span>
                                        </div>
                                    </div>
                                    <div class="date">
                                        <h6 class="title">15</h6>
                                        <span>Jan</span>
                                    </div>
                                </div>
                                <div class="blog-body">
                                    <a href="blog-details.html">
                                        <h5 class="title">
                                            Latest business grow solution for you
                                        </h5>
                                    </a>
                                </div>
                            </div>
                            <!-- end blog grid inner -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <!-- start blog grid inner -->
                            <div class="blog-grid-inner">
                                <div class="blog-header">
                                    <a class="thumbnail" href="blog-details.html">
                                        <img src="assets/images/blog/grid/08.jpg" alt="Business_Blog">
                                    </a>
                                    <div class="blog-info">
                                        <div class="user">
                                            <i class="fal fa-user-circle"></i>
                                            <span>by Smith</span>
                                        </div>
                                        <div class="user">
                                            <i class="fal fa-tags"></i>
                                            <span>Business</span>
                                        </div>
                                    </div>
                                    <div class="date">
                                        <h6 class="title">15</h6>
                                        <span>Jan</span>
                                    </div>
                                </div>
                                <div class="blog-body">
                                    <a href="blog-details.html">
                                        <h5 class="title">
                                            Thinking smart business grow solution for you
                                        </h5>
                                    </a>
                                </div>
                            </div>
                            <!-- end blog grid inner -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <!-- start blog grid inner -->
                            <div class="blog-grid-inner">
                                <div class="blog-header">
                                    <a class="thumbnail" href="blog-details.html">
                                        <img src="assets/images/blog/grid/09.jpg" alt="Business_Blog">
                                    </a>
                                    <div class="blog-info">
                                        <div class="user">
                                            <i class="fal fa-user-circle"></i>
                                            <span>by Smith</span>
                                        </div>
                                        <div class="user">
                                            <i class="fal fa-tags"></i>
                                            <span>Business</span>
                                        </div>
                                    </div>
                                    <div class="date">
                                        <h6 class="title">15</h6>
                                        <span>Jan</span>
                                    </div>
                                </div>
                                <div class="blog-body">
                                    <a href="blog-details.html">
                                        <h5 class="title">
                                            Smart business grow solution for your building.
                                        </h5>
                                    </a>
                                </div>
                            </div>
                            <!-- end blog grid inner -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <!-- start blog grid inner -->
                            <div class="blog-grid-inner">
                                <div class="blog-header">
                                    <a class="thumbnail" href="blog-details.html">
                                        <img src="assets/images/blog/grid/10.jpg" alt="Business_Blog">
                                    </a>
                                    <div class="blog-info">
                                        <div class="user">
                                            <i class="fal fa-user-circle"></i>
                                            <span>by Smith</span>
                                        </div>
                                        <div class="user">
                                            <i class="fal fa-tags"></i>
                                            <span>Business</span>
                                        </div>
                                    </div>
                                    <div class="date">
                                        <h6 class="title">15</h6>
                                        <span>Jan</span>
                                    </div>
                                </div>
                                <div class="blog-body">
                                    <a href="blog-details.html">
                                        <h5 class="title">
                                            Grow smart business grow solution for you
                                        </h5>
                                    </a>
                                </div>
                            </div>
                            <!-- end blog grid inner -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <!-- start blog grid inner -->
                            <div class="blog-grid-inner">
                                <div class="blog-header">
                                    <a class="thumbnail" href="blog-details.html">
                                        <img src="assets/images/blog/grid/01.jpg" alt="Business_Blog">
                                    </a>
                                    <div class="blog-info">
                                        <div class="user">
                                            <i class="fal fa-user-circle"></i>
                                            <span>by Smith</span>
                                        </div>
                                        <div class="user">
                                            <i class="fal fa-tags"></i>
                                            <span>Business</span>
                                        </div>
                                    </div>
                                    <div class="date">
                                        <h6 class="title">15</h6>
                                        <span>Jan</span>
                                    </div>
                                </div>
                                <div class="blog-body">
                                    <a href="blog-details.html">
                                        <h5 class="title">
                                            business grow solution for you Building smart
                                        </h5>
                                    </a>
                                </div>
                            </div>
                            <!-- end blog grid inner -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <!-- start blog grid inner -->
                            <div class="blog-grid-inner">
                                <div class="blog-header">
                                    <a class="thumbnail" href="blog-details.html">
                                        <img src="assets/images/blog/grid/02.jpg" alt="Business_Blog">
                                    </a>
                                    <div class="blog-info">
                                        <div class="user">
                                            <i class="fal fa-user-circle"></i>
                                            <span>by Smith</span>
                                        </div>
                                        <div class="user">
                                            <i class="fal fa-tags"></i>
                                            <span>Business</span>
                                        </div>
                                    </div>
                                    <div class="date">
                                        <h6 class="title">15</h6>
                                        <span>Jan</span>
                                    </div>
                                </div>
                                <div class="blog-body">
                                    <a href="blog-details.html">
                                        <h5 class="title">
                                            Building smart business grow solution for you
                                        </h5>
                                    </a>
                                </div>
                            </div>
                            <!-- end blog grid inner -->
                        </div>
                    </div>
                    <!-- pagination area -->
                    <div class="row mt--30">
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
                <!--rts blog wized area -->
                <div class="col-xl-4 col-md-12 col-sm-12 col-12">
                    <!-- single wized start -->
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
                    <!-- single wized End -->
                    <!-- single wized start -->
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
                                <li><a href="#">Solution Model<i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Business Advantage<i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Feature Product<i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Catagory Thury<i class="far fa-long-arrow-right"></i></a></li>
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
                    <!-- single wized End -->
                    <!-- single wized start -->
                    <div class="rts-single-wized Recent-post">
                        <div class="wized-header">
                            <h5 class="title">
                                Recent Posts
                            </h5>
                        </div>
                        <div class="wized-body">
                            <div class="gallery-inner">
                                <div class="row-1 single-row">
                                    <a href="#"><img src="assets/images/blog/details/gallery/01.png" alt="Gallery"></a>
                                    <a href="#"><img src="assets/images/blog/details/gallery/02.png" alt="Gallery"></a>
                                    <a href="#"><img src="assets/images/blog/details/gallery/03.png" alt="Gallery"></a>
                                </div>
                                <div class="row-2 single-row">
                                    <a href="#"><img src="assets/images/blog/details/gallery/04.png" alt="Gallery"></a>
                                    <a href="#"><img src="assets/images/blog/details/gallery/05.png" alt="Gallery"></a>
                                    <a href="#"><img src="assets/images/blog/details/gallery/06.png" alt="Gallery"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single wized End -->
                    <!-- single wized start -->
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
                    <!-- single wized End -->
                    <!-- single wized start -->
                    <div class="rts-single-wized contact">
                        <div class="wized-header">
                            <a href="index-2.html"><img src="assets/images/logo/logo-2.svg" alt="Business_logo"></a>
                        </div>
                        <div class="wized-body">
                            <h5 class="title">Need Help? We Are Here
                                To Help You</h5>
                            <a class="rts-btn btn-primary" href="contactus.html">Contact Us</a>
                        </div>
                    </div>
                    <!-- single wized End -->
                </div>
                <!-- rts- blog wized end area -->
            </div>
        </div>
    </div>
    <!-- rts blog grid area end -->

@endsection
