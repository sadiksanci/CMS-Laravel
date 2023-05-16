
<header class="header-three header--sticky">
    <div class="container">
        <div class="row header-top-three">
            <div class="col-lg-6">
                <p class="top-left"> <a href="{{route('contact')}}">Bize Ulaşın <i
                            class="far fa-mail-bulk"></i></a></p>
            </div>
            <div class="col-lg-6 right-h-three">
                <div class="header-top-right">
                    <div class="single-right email">
                        <i class="fas fa-envelope"></i>
                        <a href="#">info@example.com</a>
                    </div>
                    <div class="single-right call">
                        <i class="far fa-phone-volume"></i>
                        <span>Telefon:</span>
                        <a href="#">+210-9856988</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row main-header main-header-three">
            <div class="col-lg-3 col-md-4 col-sm-5 col-5">
                <a href="/" class="thumbnail-logo">
                    <img src="{{asset("assets/images/logo/logo-3.svg")}}" alt="Logo_three">
                </a>
            </div>
            <div class="col-lg-6 d-none d-xl-block">
                <div class="text-center d-flex justify-content-center">
                    <nav class="nav-main mainmenu-nav d-none d-xl-block">
                        <ul class="mainmenu">
                            <li><a class="nav-item" href="{{route('index')}}">Anasayfa</a></li>
                            <li><a class="nav-item" href="{{route('services')}}">Hizmetler</a></li>
                            <li><a class="nav-item" href="{{route('blog')}}">Blog</a></li>
                            <li><a class="nav-item" href="{{route('about.us')}}">Hakkımızda</a></li>
                            <li><a class="nav-item" href="{{route('contact')}}">İletişim</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-xl-3 col-lg-9 col-md-8 col-sm-7 col-7">
                <div class="right justify-content-end">
                    <button id="menu-btn" class="menu rts-btn btn-primary-3-menu ml--20">
                        <img class="menu-dark" src="{{asset("assets/images/icon/menu.png")}}" alt="Menu-icon">
                        <img class="menu-light" src="{{asset("assets/images/icon/menu-light.png")}}" alt="Menu-icon">
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>

