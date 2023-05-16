
<header class="header-three header--sticky">
    <div class="container">
        <div class="row header-top-three">
            <div class="col-lg-5">
                <p class="top-left"> <a href="{{route('contact')}}">@lang('header.contact us')<i
                            class="far fa-mail-bulk"></i></a></p>
            </div>
            <div class="col-lg-7 right-h-three">
                <div class="header-top-right">
                    <div class="single-right email">
                        <i class="fas fa-envelope"></i>
                        <a href="#">info@example.com</a>
                    </div>
                    <div class="single-right call">
                        <i class="far fa-phone-volume"></i>
                        <span>@lang('header.phone'):</span>
                        <a href="#">+210-9856988</a>
                    </div>
                    <div class="dropdown">
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" onchange="changeLang(this)">
                            <option value="{{\Illuminate\Support\Facades\App::getLocale()}}" selected>{{strtoupper(\Illuminate\Support\Facades\App::getLocale())}}</option>
                            <option @if(\Illuminate\Support\Facades\App::getLocale() == "en") disabled @endif value="en">En</option>
                            <option @if(\Illuminate\Support\Facades\App::getLocale() == "tr") disabled @endif value="tr">Tr</option>
                        </select>
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
                            <li><a class="nav-item" href="{{route('index')}}">@lang('header.home')</a></li>
                            <li><a class="nav-item" href="{{route('services')}}">@lang('header.services')</a></li>
                            <li><a class="nav-item" href="{{route('blog')}}">@lang('header.blog')</a></li>
                            <li><a class="nav-item" href="{{route('about.us')}}">@lang('header.about')</a></li>
                            <li><a class="nav-item" href="{{route('contact')}}">@lang('header.contact')</a></li>
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

