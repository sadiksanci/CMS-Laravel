<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
              @lang('master.short about')
            </p>
            <div class="get-in-touch">
                <!-- title -->
                <div class="h6 title">@lang('master.contact us')</div>
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
                    <li class="menu-item menu-item"><a class="menu-link" href="/">@lang('header.home')</a></li>
                    <li class="menu-item menu-item"><a class="menu-link" href="{{route('services')}}">@lang('header.services')</a></li>
                    <li class="menu-item menu-item"><a class="menu-link" href="{{route('blog')}}">@lang('header.blog')</a></li>
                    <li class="menu-item menu-item"><a class="menu-link" href="{{route('about.us')}}">@lang('header.about')</a></li>
                    <li class="menu-item menu-item"><a class="menu-link" href="{{route('contact')}}">@lang('header.contact')</a></li>
                </ul>
            </nav>
            <div class="social-wrapper-two menu mobile-menu">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
                <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
            </div>
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
<script>
    function changeLang(event){

        console.log(event.value);
        $.ajax({
            type : "POST",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url : "{{ route('change.lang') }}",
            data : {
                lang : event.value
            },
            success : function (e){
                window.location.reload();
            }
        });
    }
</script>
</body>

</html>
