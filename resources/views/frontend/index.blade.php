@extends('frontend.layouts.app')
@section('content')

    <header class="slider">
        <div class="swiper-container slider-images">
            <div class="swiper-wrapper">
                <div class="swiper-slide" data-background="assets/images/slides/slide22.jpg">
                    <div class="mobile-slide" data-background="assets/images/slide-mobile01.jpg"></div>
                </div>
                <div class="swiper-slide" data-background="assets/images/slides/slide23.jpg">
                    <div class="mobile-slide" data-background="assets/images/slide-mobile02.jpg"></div>
                </div>
                <div class="swiper-slide" data-background="assets/images/slides/slide25.jpg">
                    <div class="mobile-slide" data-background="assets/images/slide-mobile03.jpg"></div>
                </div>
            </div>
            <!-- end swiper-wrapper -->
            <div class="container-fluid slider-nav">
                <div class="swiper-pagination"></div>
                <!-- end swiper-pagination -->
                <div class="swiper-fraction"></div>
                <!-- end swiper-fraction -->
                <div class="button-prev"><i class="far fa-chevron-down"></i></div>
                <!-- end swiper-button-prev -->
                <div class="button-next"><i class="far fa-chevron-up"></i></div>
                <!-- end swiper-button-next -->
            </div>
            <!-- end slider-nav -->
        </div>
        <!-- end slider-images -->
        <div class="swiper-container slider-texts">
            <svg width="580" height="400" class="svg-morph">
                <path id="svg_morph" d="m261,30.4375c0,0 114,6 151,75c37,69 37,174 6,206.5625c-31,32.5625 -138,11.4375 -196,-19.5625c-58,-31 -86,-62 -90,-134.4375c12,-136.5625 92,-126.5625 129,-127.5625z" />
            </svg>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container-fluid">
                        <h1>Our power is <br>
                            in the Unity </h1>
                        <p>Explore hundreds of museums, galleries and
                            historic <br>
                            places across the UK.</p>
                    </div>
                    <!-- end container -->
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <div class="container-fluid">
                        <h1>World of <br>
                            Azerbaijan </h1>
                        <p>Your support is vital and helps the Museum to share <br>
                            the collection with the world.</p>
                    </div>
                    <!-- end container -->
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <div class="container-fluid">
                        <h1>Eldar Ismayilov<br>
                            Editor in Chief </h1>
                        <p>Curator Peter Loovers explores the special relationship between<br>
                            Arctic Peoples and 'man's best friend'.</p>
                    </div>
                    <!-- end container -->
                </div>
                <!-- end swiper-slide -->
            </div>
            <!-- end swiper-wrapper -->
        </div>
        <!-- end slider-texts -->
        <div class="play-now"> <a href="videos/video.mp4" data-fancybox data-width="640" data-height="360"  class="play-btn"></a>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
          <defs>
              <path id="circlePath" d="M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 "/>
          </defs>
                <circle cx="150" cy="100" r="75" fill="none"/>
                <g>
                    <use xlink:href="#circlePath" fill="none"/>
                    <text>
                        <textPath xlink:href="#circlePath">PLAY NOW  - PLAY NOW - PLAY NOW -</textPath>
                    </text>
                </g>
        </svg>
        </div>
        <!-- end play-now -->
    </header>
    <!-- end slider -->

    <section class="content-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <figure><img src="{{ asset('assets/images/qorqud.png') }}" alt="Image"></figure>
                        <h6>Get Latest Updates and News</h6>
                        <h2>Recent News</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @foreach($news AS $n)
                    <div class="recent-news">
                        <div class="content-box"> <small>Dec 26, 2020</small>
                            <h3>The Ultimate Guide To
                                Knots Practice Kit</h3>
                            <p>{{ \Illuminate\Support\Str::limit($n->content, 200) }}</p>
                            <a href="#" class="custom-link">Ətraflı oxu</a> </div>
                        <!-- end content-box -->
                        <figure data-scroll data-scroll-speed="-1"><img src="{{ asset("storage/".$n->photo) }}" alt="Image"></figure>
                    </div>
                    @endforeach
                    <!-- end recent-news -->
                </div>
                <!-- end col-8 -->
                <!-- end col-9 -->
                <div class="col-12 text-center"> <a href="news.html" class="circle-button">SEE ALL<br>
                        NEWS</a> </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
    <section class="content-section">
        <div class="container">
            <div class="section-title text-center">
                <figure><img src="{{ asset('assets/images/qorqud.png') }}" alt="Image"></figure>
                <h6>Get Latest Updates and News</h6>
                <h2>{{ __('frontend.publications') }}</h2>
            </div>
            <div class="row g-0 align-items-center">
                <div class="col-lg-6">
                    <div class="art-slider">
                        <div class="titles">
                            <h6>Art Collection</h6>
                            <h2>History of <br>
                                Journals</h2>
                        </div>
                        <!-- end titles -->
                        <div class="swiper-container art-slider-content">
                            <div class="swiper-wrapper">
                                @foreach($journals AS $journal)
                                <div class="swiper-slide"> <span>0{{ $journal->id }}</span>
                                    <h3>{{ $journal->name }}</h3>
                                </div>
                                @endforeach
                                <!-- end swiper-slide -->
                            </div>

                            <!-- end swiper-wrapper -->
                        </div>
                        <!-- end art-slider-content -->
                    </div>
                    <!-- end art-slider -->
                </div>
                <!-- end col-6 -->
                <div class="col-lg-6">
                    <div class="art-slider" data-scroll data-scroll-speed="1">
                        <div class="swiper-container art-slider-images">

                            <div class="swiper-wrapper">
                                @foreach($journals AS $journal)
                                <div class="swiper-slide"> <img src="{{ asset("storage/".$journal->image) }}" alt="Image"> </div>
                                @endforeach
                                <!-- end swiper-slide -->
                            </div>
                            <!-- end swiper-wrapper -->
                        </div>
                        <!-- end art-slider-images -->
                    </div>
                    <!-- end art-slider -->
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->


    <section class="content-section">
        <div class="video-bg">
            <video src="assets/videos/video2.mp4" loop autoplay playsinline muted></video>
        </div>
        <!-- end video-bg -->
        <div class="container">
            <div class="cta-box" data-scroll data-scroll-speed="-1">
                <h6>Dünya Azerbaycanlılar Kurultayı - Eldar İsmayılov</h6>
                <h2>Dünya Azerbaycanlılar Kurultayı - Eldar İsmayılov</h2>
                <a href="#" class="custom-button">Müsahibəyə bax</a> </div>
            <!-- end cta-box -->
        </div>
        <!-- end container -->
    </section>


    <section class="content-section no-bottom-spacing bottom-white" data-background="#fffbf7">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <figure><img src="assets/images/qorqud.png" alt="Image"></figure>
                        <h2>Art Inspiration of <br>
                            19th Century</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
                <div class="col-lg-4 col-md-6">
                    <div class="text-content" data-scroll data-scroll-speed="-1">
                        <h6>The challenge</h6>
                        <p>Jurnal 1998-ci ildə Azərbaycan Respublikasının Mətbuat və İnformasiya Nazirliyində qeydiyyatdan keçmişdir. Qeydiyyat şəhadətnaməsi №639. Redaksiyanın fikri müəllifin fikri ilə üst-üstə düşməyə bilər.</p>
                    </div>
                    <!-- end text-content -->
                </div>
                <!-- end col-4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="text-content" data-scroll data-scroll-speed="0.5">
                        <h6>İdarə Heyyəti</h6>
                        <p>Arif Paşayevİsgəndər Xəlilov
                            Bədrəddin DalanMəhəmməd Qurbanov
                            Eldar İsmayılovSəfər Əbiyev
                            Çingiz İsayevŞəmsəddin Xanbabayev
                            Rəşid RzayevNazim Abbasov
                            Fatimə HacıyevaSədaqət Qəhrəmanova
                            Melix YevdayevRafat Əliyev
                            Emil MirzəyevSabir Dadaşov
                            Vəhdət Sultanzadə Rafiq Əziz
                            Namiq ƏliyevSakit Məmmədov </p>
                    </div>
                    <!-- end text-content -->
                </div>
                <!-- end col-4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="text-content" data-scroll data-scroll-speed="1">
                        <h6>The impact</h6>
                        <p>Təsisçi və baş redaktor:


                            Eldar İsmayılov Şef redaktor:


                            Elnarə Quliyeva Bu nömrədə çalışanlar:
                            Aqil Mehdi, Zarema Dadaşova, Nərgiz Namiq qızı, Natavan Arifqızı, Zülfiyyə Vəliyeva, Sergey Qriqoryev</p>
                    </div>
                    <!-- end text-content -->
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <div class="clearfix spacing-100"></div>
        <div class="horizontal-scroll">
            <div class="scroll-inner" data-scroll data-scroll-direction="horizontal" data-scroll-speed="5">
                <div class="scroll-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <figure class="image-box" data-scroll data-scroll-speed="0"> <img src="assets/images/gallery1.jpeg" alt="Image"> </figure>
                            </div>
                            <!-- end col-3 -->
                            <div class="col-md-4 offset-md-1">
                                <figure class="image-box" data-scroll data-scroll-speed="0"> <img src="assets/images/gallery7.jpeg" alt="Image"> </figure>
                            </div>
                            <!-- end col-3 -->
                            <div class="col-md-2 offset-md-1">
                                <figure class="image-box" data-scroll data-scroll-speed="0"> <img src="assets/images/gallery3.jpeg" alt="Image"> </figure>
                            </div>
                            <!-- end col-3 -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end scroll-wrapper -->
                <div class="scroll-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <figure class="image-box" data-scroll data-scroll-speed="0"> <img src="assets/images/gallery4.jpg" alt="Image"> </figure>
                            </div>
                            <!-- end col-3 -->
                            <div class="col-md-4 offset-md-1">
                                <figure class="image-box" data-scroll data-scroll-speed="0"> <img src="assets/images/gallery5.jpg" alt="Image"> </figure>
                            </div>
                            <!-- end col-3 -->
                            <div class="col-md-2 offset-md-1">
                                <figure class="image-box" data-scroll data-scroll-speed="0"> <img src="assets/images/gallery6.jpg" alt="Image"> </figure>
                            </div>
                            <!-- end col-3 -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- end scroll-wrapper -->
            </div>
            <!-- end scroll-inner -->
        </div>
        <!-- end horizontal-scroll -->
    </section>

    <section class="content-section" data-background="#fffbf7">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <figure><img src="assets/images/qorqud.png" alt="Image"></figure>
                        <h2>Our collections are <br>
                 php            most important</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
            <div class="row justify-content-center">
                @foreach($articles AS $article)
                <div class="col-lg-4 col-md-6">
                    <div class="collection-box" data-scroll data-scroll-speed="1.5" >
                        <figure><img src="{{ asset("storage/".$article->photo) }}" alt="Image"></figure>
                        <h4><a href="collection-detail.html">Hammersmith: Kelmscott Press.</a></h4>
                        <p>The Works of Geoffrey Chaucer Now
                            Newly Imprinted, by William Morris & Sir
                            Edward Burne-Jones, 1896, Hammersmith:
                            Kelmscott Press.</p>
                    </div>
                    <!-- end collection-box -->
                </div>
                @endforeach
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <section class="content-section no-spacing" data-background="#DEB887">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="newsletter-box">
                        <div class="form">
                            <div class="titles">
                                <h6>Subscribe Newsletter</h6>
                                <h2>{{ __('frontend.subscribe_us') }}</h2>
                            </div>
                            <!-- end titles -->
                            <div class="inner">
                                <input type="email" placeholder="Enter your e-mail address">
                                <input type="submit" value="{{ __('frontend.subscribe') }}">
                            </div>
                            <!-- end inner -->
                            <small>Will be used in accordance with our <a href="#">Privacy Policy</a></small> </div>
                        <!-- end form -->
                        <figure class="newsletter-image" data-scroll data-scroll-speed="0.7"><img src="{{ asset('assets/images/qorqud.png') }}" style="width: 40%" alt="Image"></figure>
                    </div>
                    <!-- end newsletter-box -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

@endsection