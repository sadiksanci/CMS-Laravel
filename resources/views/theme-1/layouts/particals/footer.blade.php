
    <div class="rts-footer-area footer-three rts-section-gapTop footer-bg-2">
        <div class="container pb--100 pb_sm--40">
            <div class="row g-5">
                <div class="col-xl-3 col-lg-6">
                    <div class="footer-three-single-wized left">
                        <a href="/" class="logo_footer">
                            <img src="{{asset("assets/images/logo/logo-3.svg")}}" alt="Logo-image">
                        </a>
                        <p class="disc">
                            @lang('footer.short about')
                        </p>

                    </div>
                </div>
                <!-- footer three mid area -->
                <div class="col-xl-6 col-lg-6">
                    <div class="row">
                        <!-- footer mid area left -->
                        <div class="col-lg-6">
                            <div class="footer-three-single-wized mid-left">
                                <h5 class="title">@lang("footer.office information")</h5>
                                <div class="body">
                                    <div class="info-wrapper">
                                        <div class="single">
                                            <ul class="icon">
                                                <li><i class="fas fa-phone-alt"></i></li>
                                            </ul>
                                            <div class="info">
                                                <span>@lang("footer.call us") 24/7</span>
                                                <a href="#">(+256) 2145.2156</a>
                                            </div>
                                        </div>
                                        <div class="single">
                                            <ul class="icon">
                                                <li><i class="far fa-envelope"></i></li>
                                            </ul>
                                            <div class="info">
                                                <span>@lang("footer.email")</span>
                                                <a href="#">info@finbiz.com</a>
                                            </div>
                                        </div>
                                        <div class="single">
                                            <ul class="icon">
                                                <li><i class="fas fa-map-marker-alt"></i></li>
                                            </ul>
                                            <div class="info">
                                                <span>@lang("footer.address")</span>
                                                <a href="#">XYZ Hilton Street, 125 <br>
                                                    Town United State</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- footer mid area left end -->

                        <!-- footer mid area right -->
                        <div class="col-lg-6">
                            <div class="footer-three-single-wized mid-right">
                                <h5 class="title">@lang("footer.get updates")</h5>
                                <div class="body">
                                    <div class="update-wrapper">
                                        <p class="disc">@lang("footer.send mail for our latest news articles").</p>
                                        <form class="email-footer-area">
                                            <input type="email" placeholder="@lang("footer.enter email address")." required>
                                            <button type="submit"><i class="fas fa-location-arrow"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- footer mid area right end -->
                    </div>
                </div>
                <!-- footer three mid area ENd -->
                <div class="col-xl-3 col-lg-6">
                    <div class="footer-three-single-wized right">
                        <h5 class="title">@lang("footer.social media")</h5>
                        <div class="body">
                            <div class="footer-gallery-inner">
                                <ul class="social-three-wrapper">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area ptb--20">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="disc text-center">
                            {{config("app.name")}} - @lang('footer.copyright') 2023. @lang("footer.all rights reserved").
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



