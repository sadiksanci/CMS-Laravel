<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}} | @yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("assets/images/fav.png")}}">
    <link rel="stylesheet" href="{{asset("assets/css/plugins/swiper.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/plugins/fontawesome-5.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/plugins/animate.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/plugins/unicons.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/vendor/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
</head>
<body class="home-yellow">
<div id="side-bar" class="side-bar">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="rts-sidebar-menu-desktop">
        <a class="logo-1" href="index-2.html"><img class="logo" src="{{asset("assets/images/logo/logo-1.svg")}}"
                                                   alt="finbiz_logo"></a>
        <a class="logo-2" href="index-2.html"><img class="logo" src="{{asset("assets/images/logo/logo-4.svg")}}"
                                                   alt="finbiz_logo"></a>
        <a class="logo-3" href="index-2.html"><img class="logo" src="{{asset("assets/images/logo/logo-3.svg")}}"
                                                   alt="finbiz_logo"></a>
        <a class="logo-4" href="index-2.html"><img class="logo" src="{{asset("assets/images/logo/logo-5.svg")}}"
                                                   alt="finbiz_logo"></a>
        <div class="body d-none d-xl-block">
            <p class="disc">
                We must explain to you how all seds this mistakens idea denouncing pleasures and praising account.
            </p>
            <div class="get-in-touch">
                <!-- title -->
                <div class="h6 title">Get In Touch</div>
                <!-- title End -->
                <div class="wrapper">
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-phone-alt"></i>
                        <a href="#">+8801234566789</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-envelope"></i>
                        <a href="#">example@gmail.com</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-globe"></i>
                        <a href="#">www.webexample.com</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="#">13/A, New Pro State, NYC</a>
                    </div>
                    <!-- single ENd -->
                </div>
                <div class="social-wrapper-two menu">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                </div>
            </div>
        </div>
        <div class="body-mobile d-block d-xl-none">
            <nav class="nav-main mainmenu-nav">
                <ul class="mainmenu">
                    <li class="has-droupdown menu-item">
                        <a class="menu-link" href="#">Home</a>
                        <ul class="submenu">
                            <li>
                                <ul>
                                    <a href="#0" class="tag">Homepages</a>
                                    <li class="mobile-menu-link"><a href="index-2.html">Main Home</a></li>
                                    <li class="mobile-menu-link"><a href="index-two.html">Consulting Home</a></li>
                                    <li class="mobile-menu-link"><a href="index-three.html">Corporate Home</a></li>
                                    <li class="mobile-menu-link"><a href="index-four.html">Insurance Home</a></li>
                                    <li class="mobile-menu-link"><a href="index-five.html">Marketing Home</a></li>
                                    <li class="mobile-menu-link"><a href="index-six.html">Finance Home</a></li>
                                    <li class="mobile-menu-link"><a href="index-seven.html">Human Resources</a></li>
                                    <li class="mobile-menu-link"><a href="index-eight.html">IT Solutions</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <a href="#0" class="tag">Onepages</a>
                                    <li class="mobile-menu-link"><a href="onepage-one.html">Main Home Onepage</a>
                                    </li>
                                    <li class="mobile-menu-link"><a href="onepage-two.html">Consulting Home
                                            Onepage</a></li>
                                    <li class="mobile-menu-link"><a href="onepage-three.html">Corporate Home
                                            Onepage</a></li>
                                    <li class="mobile-menu-link"><a href="onepage-four.html">Insurance Home
                                            Onepage</a></li>
                                    <li class="mobile-menu-link"><a href="onepage-five.html">Marketing Home
                                            Onepage</a></li>
                                    <li class="mobile-menu-link"><a href="onepage-six.html">Finance Home Onepage</a>
                                    </li>
                                    <li class="mobile-menu-link"><a href="onepage-seven.html">Human Resources
                                            Onepage</a></li>
                                    <li class="mobile-menu-link"><a href="onepage-eight.html">IT Solutions
                                            Onepage</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item"><a class="menu-link" href="about-us.html">About Us</a></li>
                    <li class="has-droupdown menu-item">
                        <a class="menu-link" href="#">Services</a>
                        <ul class="submenu">
                            <li class="has-droupdown sub-droupdown">
                                <a href="#">Our Service</a>
                                <ul class="submenu third-lvl mobile-menu">
                                    <li><a href="our-service.html">Service 1</a></li>
                                    <li><a href="service-2.html">Service 2</a></li>
                                    <li><a href="service-3.html">Service 3</a></li>
                                </ul>
                            </li>
                            <li class="mobile-menu-link"><a href="service-details.html">Service Details</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown menu-item">
                        <a class="menu-link" href="#">Pages</a>
                        <ul class="submenu">
                            <li class="mobile-menu-link"><a href="project.html">Project</a></li>
                            <li class="mobile-menu-link"><a href="project-details.html">Project Details</a></li>
                            <li class="mobile-menu-link"><a href="team.html">Team</a></li>
                            <li class="mobile-menu-link"><a href="team-details.html">Team Details</a></li>
                            <li class="mobile-menu-link"><a href="appoinment.html">appoinment</a></li>
                            <li class="mobile-menu-link"><a href="price-plan.html">Price Plan</a></li>
                            <li class="mobile-menu-link"><a href="404.html">404 Page</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown menu-item">
                        <a class="menu-link" href="#">Blog</a>
                        <ul class="submenu">
                            <li class="mobile-menu-link"><a href="blog-list.html">Blog List</a></li>
                            <li class="mobile-menu-link"><a href="blog-grid.html">Blog Grid</a></li>
                            <li class="mobile-menu-link"><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item"><a class="menu-link" href="contactus.html">Contact</a></li>
                </ul>
            </nav>
            <div class="social-wrapper-two menu mobile-menu">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
                <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
            </div>
            <a href="#" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btnmenu">Get Quote</a>
        </div>
    </div>
    <!-- inner menu area desktop End -->
</div>
<div id="anywhere-home"></div>
@include('theme-1.layouts.particals.header')

@yield('content')

@include('theme-1.layouts.particals.footer')


<script src="{{asset("assets/js/vendor/jquery.min.js")}}"></script>
<script src="{{asset("assets/js/vendor/jqueryui.js")}}"></script>
<script src="{{asset("assets/js/vendor/waypoint.js")}}"></script>
<script src="{{asset("assets/js/plugins/swiper.js")}}"></script>
<script src="{{asset("assets/js/plugins/counterup.js")}}"></script>
<script src="{{asset("assets/js/plugins/sal.min.js")}}"></script>
<script src="{{asset("assets/js/vendor/bootstrap.min.js")}}"></script>
<script src={{asset("assets/js/plugins/contact.form.js")}}></script>
<script src= {{asset("assets/js/main.js")}}></script>

</body>

</html>
