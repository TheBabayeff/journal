
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#feed01"/>
    <title>{{ __('frontend.title') }}</title>
    <meta name="author" content="TheBabayeff">
    <meta name="description" content="Azərbaycan Dünyası jurnalı">
    <meta name="keywords" content="exhibition, museum, art, history, entry, ticket, contemporary, modern, booking, visit, culture, life, centuries, , , ">


    <link href="{{ asset('assets/ico/favicon.png') }}" rel="shortcut icon">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body>
<div class="preloader" id="preloader">
    <svg viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1">
        <path d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z"></path>
    </svg>
    <div class="inner">
        <canvas class="progress-bar" id="progress-bar" width="25" height="25"></canvas>
        <figure><img src="{{ asset('assets/images/qorqud.png') }}" style="height: 150px;" alt="Image"></figure>

    </div>
    <!-- end inner -->
</div>
<!-- end preloder -->
<div class="page-transition">
    <svg viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1">
        <path d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,980 1294.66667,930 960,930 C625.333333,930 305.333333,980 0,1080 L0,0 Z"></path>
    </svg>
</div>
<!-- end page-transition -->
<div class="smooth-scroll" style="font-family: 'Nunito', sans-serif">
    <div class="section-wrapper" data-scroll-section>
        <div class="search-box">
            <div class="container">
                <div class="form">
                    <h3>Nə axtarırıq?</h3>
                    <input type="search" placeholder="Axtarış mətnini yazın...">
                    <input type="submit" value="SEARCH">
                </div>
                <!-- end form -->
            </div>
        </div>
        <!-- end search-box -->
        <aside class="side-widget">
            <svg viewBox="0 0 600 1080" preserveAspectRatio="none" version="1.1">
                <path d="M540,1080H0V0h540c0,179.85,0,359.7,0,539.54C540,719.7,540,899.85,540,1080z"></path>
            </svg>
            <figure class="logo"> <img src="{{ asset("assets/images/World.png") }}" alt="Image"> </figure>
            <!-- end logo -->
            <div class="inner">

                <!-- end widget -->
                <div class="widget">

                    <p>Jurnal 1998-ci ildə Azərbaycan Respublikasının Nəşr və Məlumat Nazirliyində qeydiyyatdan keçmişdir.Qeydiyyat şəhadətnaməsi nömrə- 639.
                        Redaksiyanın fikri müəllifin fikri ilə uyğunlaşmaya bilər.</p>
                    <p>Jurnal 1998-ci ildə Azərbaycan Respublikasının Mətbuat və İnformasiya Nazirliyində qeydiyyatdan keçmişdir.</p>
                    <h6 class="widget-title">www.AzerbaycanDunyasi.az</h6>
                    <h6 class="widget-title">www.WorldOfAzerbaijan.az</h6>
                    <h6 class="widget-title">www.Mir-Azerbaydjana.az</h6>
                </div>
                <!-- end widget -->
            </div>
            <!-- end inner -->
            <div class="display-mobile">
                <div class="custom-menu">
                    <ul>
                        <li><a href="{{ route('locale' ,'en') }}">Eng</a></li>
                        <li><a href="{{ route('locale' ,'ru') }}">Ru</a></li>
                        <li><a href="{{ route('locale' ,'az') }}">Az</a></li>
                        <li><a href="{{ route('locale' ,'tr') }}">Tr</a></li>
                    </ul>
                </div>
                <!-- end custom-menu -->
                <div class="site-menu">
                    <ul>
                        <li><a href="{{ route('welcome') }}">{{ __('frontend.home') }}</a></li>
                        <li><a href="{{ route('articles')  }}">{{ __('frontend.article') }}</a></li>
                        <li><a href="{{ route('journals')  }}">{{ __('frontend.publications') }}</a></li>
                        <li><a href="{{ route('news')  }}">{{ __('frontend.news') }}</a></li>
                        <li><a href="{{ route('chairmen')  }}">{{ __('frontend.chairmen') }}</a></li>
                        <li><a href="{{ route('galleries')  }}">{{ __('frontend.gallery') }}</a></li>
                        <li><a href="{{ route('contact')  }}">{{ __('frontend.contact') }}</a></li>
                    </ul>
                </div>
                <!-- end site-menu -->
            </div>
            <!-- end display-mobile -->
        </aside>

        <nav class="navbar">
            <div class="logo"> <a href="{{ route('welcome') }}"> <img src="{{  asset("assets/images/World2.png") }}" alt="Image"> </a> </div>
            <!-- end logo -->
            <div class="custom-menu">
                <ul>
                    <li><a href="{{ route('locale' ,'tr') }}">Tr</a></li>
                    <li><a href="{{ route('locale' ,'en') }}">Eng</a></li>
                    <li><a href="{{ route('locale' ,'ru') }}">Ru</a></li>
                    <li><a href="{{ route('locale' ,'az') }}">Az</a></li>
                </ul>
            </div>
            <!-- end custom-menu -->
            <div class="site-menu">
                <ul>
                    <li><a href="{{ route('welcome') }}">{{ __('frontend.home') }}</a></li>
                    <li><a href="{{ route('articles')  }}">{{ __('frontend.article') }}</a></li>
                    <li><a href="{{ route('journals')  }}">{{ __('frontend.publications') }}</a></li>
                    <li><a href="{{ route('news')  }}">{{ __('frontend.news') }}</a></li>
                    <li><a href="{{ route('chairmen')  }}">{{ __('frontend.chairmen') }}</a></li>
                    <li><a href="{{ route('galleries')  }}">{{ __('frontend.gallery') }}</a></li>
                    <li><a href="{{ route('contact')  }}">{{ __('frontend.contact') }}</a></li>
                </ul>
            </div>
            <!-- end site-menu -->
            <div class="search-button"> <i class="far fa-search"></i> </div>
            <!-- end search-button -->
            <div class="hamburger-menu">
                <svg class="hamburger" width="30" height="30" viewBox="0 0 30 30">
                    <path class="line line-top" d="M0,9h30"/>
                    <path class="line line-center" d="M0,15h30"/>
                    <path class="line line-bottom" d="M0,21h30"/>
                </svg>
            </div>
            <!-- end hamburger-menu -->
            {{--            <div class="navbar-button"> <a href="membership.html">GET A TICKET</a> </div>--}}
            <!-- end navbar-button -->
        </nav>
        <!-- end navbar -->


        @yield('content')

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <h6 class="widget-title">About Journal</h6>
                        <ul class="footer-menu">
                            <li><a href="{{ route('news') }}">{{ __('frontend.news') }}</a></li>
                            <li><a href="{{ route('contact') }}">{{ __('frontend.contact') }}</a></li>
                            <li><a href="{{ route('chairmen') }}">{{ __('frontend.chairmen') }}</a></li>
                            <li><a href="{{ route('articles') }}">{{ __('frontend.article') }}</a></li>
                            <li><a href="{{ route('galleries') }}">{{ __('frontend.gallery') }}</a></li>
                        </ul>
                    </div>
                    <!-- end col-4 -->
                    <div class="col-lg-4 col-md-6">
                        <h6 class="widget-title">{{ __('frontend.contact') }}</h6>
                        <ul class="social-media">
                            <li><a href="#"><i class="fab fa-facebook-f"></i> /Azərbaycan Dünyası</a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i> /Azərbaycan Dünyası</a></li>
                            <li><a href="#"><i class="fab fa-whatsapp"></i> (+99450) 444 88 00</a></li>
                            <li><a href="#"><i class="fa fa-phone"></i>  (+99450) 364 46 01 </a></li>
                            <li><a href="#"><i class="fa fa-phone"></i>  (+99450) 992 29 96 </a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@azerbaycandunyasi.az</a></li>
                        </ul>
                    </div>
                    <!-- end col-4 -->
                    <div class="col-lg-4">
                        <h6 class="widget-title">Visit Us Now</h6>
                        <address class="address">
                            Az1073, Azərbaycan Respublikası, <br/>
                            Bakı şəh, Mətbuat prospekti 524 "Azərbaycan nəşriyyatı" <br/><br/>
                        </address>
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
            <div class="footer-bottom">
                <div class="container"> <span class="copyright">© 2023 World of Azerbaijan | Journal </span> <span class="creation">Site created by <a href="http://babayev.info">TheBabayeff</a></span> </div>
                <!-- end container -->
            </div>
            <!-- end footer-bottom -->
        </footer>
        <!-- end footer -->
    </div>
</div>

<!-- JS FILES -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/gsap.min.js') }}"></script>
<script src="{{ asset('assets/js/locomotive-scroll.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('assets/js/kinetic-slider.js') }}"></script>
<script src="{{ asset('assets/js/fancybox.min.js') }}"></script>
<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>

</body>
</html>

