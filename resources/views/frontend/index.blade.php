@extends('frontend.layouts.app')
@section('content')


<section class="content-section" style="padding: 60px 0;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <figure><img src="{{ asset('assets/images/qorqud.png') }}" style=" height: 250px;" alt="Image" ></figure>
                        <h6>Dünya Türkləri Birləşin!!!</h6>
                        <h2>Azərbaycan Dünyası</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <div class="col-12">
                    <div class="image-box-carousel" style="background: transparent">
                        <div class="swiper-wrapper" >
                            @foreach($ordens AS $orden)
                                <div class="col-lg-4" style="width: 150px;">

                                    <div class="swiper-slide">
                                        <figure ><img src="{{ asset("storage/" . $orden->image) }}" alt="Image"></figure>
                                        <div class="content-box d-none d-sm-block">
                                            <a href="#" class="custom-link">{{ $orden->title }}</a>
                                        </div>
                                        <!-- end content-box -->

                                    </div>

                                </div>
                            @endforeach
                            <!-- end swiper-slide -->
                        </div>
                        <!-- end swiper-wrapper -->
                    </div>
                    <!-- end image-box-carousel -->
                </div>
                <!-- end col-12 -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>


{{--<section class="content-section" style="padding: 0px 0;">--}}
{{--    <div class="container">--}}
{{--        <div class="section-title text-center">--}}
{{--            <h6>Orden və Mükafatlarımız</h6>--}}
{{--            <h2>{{ __('frontend.publications') }}</h2>--}}
{{--        </div>--}}
{{--        <div class="row g-0 align-items-center">--}}
{{--            <div class="col-lg-6">--}}

{{--                <div class="art-slider" style="padding-bottom: 50px;">--}}
{{--                    <div class="titles">--}}
{{--                        <h6>Art Collection</h6>--}}
{{--                        <h2>History of <br>--}}
{{--                            Journals</h2>--}}
{{--                    </div>--}}
{{--                    <!-- end titles -->--}}
{{--                    <div class="swiper-container art-slider-content">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            @foreach($journals AS $journal)--}}
{{--                                <div class="swiper-slide"> <span>0{{ $journal->id }}</span>--}}
{{--                                    <h3><a href="{{ route('journal.show', $journal->id) }}">{{ \Illuminate\Support\Str::limit($journal->name, 35) }}</a></h3>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                            <!-- end swiper-slide -->--}}
{{--                        </div>--}}

{{--                        <!-- end swiper-wrapper -->--}}
{{--                    </div>--}}
{{--                    <!-- end art-slider-content -->--}}
{{--                </div>--}}

{{--                <!-- end art-slider -->--}}

{{--                <a href="{{ route('journals') }}" class="circle-button">{{ __('frontend.see_all') }}</a>--}}

{{--            </div>--}}
{{--            <!-- end col-6 -->--}}
{{--            <div class="col-lg-6">--}}
{{--                <div class="art-slider" data-scroll data-scroll-speed="1">--}}
{{--                    <div class="swiper-container art-slider-images">--}}

{{--                        <div class="swiper-wrapper">--}}
{{--                            @foreach($journals AS $journal)--}}
{{--                                <div class="swiper-slide">--}}
{{--                                    <a data-fancybox href="{{ asset("storage/".$journal->image) }}">--}}
{{--                                        <img  src="{{ asset("storage/".$journal->image) }}" alt="Image">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                            <!-- end swiper-slide -->--}}
{{--                        </div>--}}
{{--                        <!-- end swiper-wrapper -->--}}
{{--                    </div>--}}
{{--                    <!-- end art-slider-images -->--}}
{{--                </div>--}}
{{--                <!-- end art-slider -->--}}
{{--            </div>--}}
{{--            <!-- end col-6 -->--}}
{{--        </div>--}}
{{--        <!-- end row -->--}}
{{--    </div>--}}
{{--    <!-- end container -->--}}
{{--</section>--}}
{{--<!-- end content-section -->--}}


<section class="content-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="section-title">
                    <h6>Uşaqlar və gənclər</h6>
                    <h2>Uşaqlar və gənclər</h2>
                </div>
                <!-- end section-title -->
            </div>
            <!-- end col-9 -->
            <div class="col-lg-3">
                <figure style=" position: relative; top: -100px;">
                    <img src="{{ asset('assets/images/qorqud.png') }}" width="100px;" alt="Image">
                </figure>
            </div>
            <!-- end col-3 -->
        </div>
        <!-- end row -->
        <div class="row justify-content-center">
            @foreach($children AS $child)
                <div class="col-lg-4 col-md-6">
                    <div class="exhibition-box" data-scroll data-scroll-speed="-1" >
                        <figure> <a href="{{ route('children.show', $child->id) }}"><img src="{{ asset("storage/" . $child->photo[0]) }}" alt="Image" class="img"></a>
                            <div class="info">
                                <figure class="i"><img src="{{ asset('assets/images/icon-info.png') }}" alt="Image"></figure>
                                <span>Ətraflı</span> </div>
                            <!-- end info -->
                        </figure>
                        <div class="content-box">
                            <h4><a href="{{ route('children.show', $child->id) }}">{{ $child->title }}</a></h4>
                        </div>
                        <!-- end content-box -->
                    </div>
                    <!-- end exhibition-box -->
                </div>
            @endforeach
            <!-- end col-4 -->
            <div class="col-12 text-center"> <a href="{{ route('children') }}" class="custom-button">Hamısına bax</a> </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end content-section -->
<section class="slider container ">

    <div class="swiper-container slider-images">

        <div class="swiper-wrapper">
            @foreach($slides AS $slide)
                <div class="swiper-slide" data-background="{{ asset("storage/" . $slide->image) }}">
                    <div class="mobile-slide" data-background="{{ asset("storage/" . $slide->image) }}"></div>
                </div>
            @endforeach

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


        <!-- end swiper-wrapper -->
    </div>
    <!-- end slider-texts -->
    <!-- end play-now -->

</section>
<!-- end slider -->
<section class="content-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="section-title">
                    <h6>Fondun Mükafatları</h6>
                    <h2>Fondun Mükafatları</h2>
                </div>
                <!-- end section-title -->
            </div>
            <!-- end col-9 -->
            <div class="col-lg-3">
                <figure style=" position: relative; top: -100px;">
                    <img src="{{ asset('assets/images/qorqud.png') }}" width="100px;" alt="Image">
                </figure>
            </div>
            <!-- end col-3 -->
        </div>
        <!-- end row -->
        <div class="row justify-content-center">
            @foreach($fundRewards AS $rewards)
                <div class="col-lg-4 col-md-6">
                    <div class="exhibition-box" data-scroll data-scroll-speed="-1" >
                        <figure> <a href="{{ route('rewards.show', $rewards->id) }}"><img src="{{ asset("storage/" . $rewards->photo[0]) }}" alt="Image" class="img"></a>
                            <div class="info">
                                <figure class="i"><img src="{{ asset('assets/images/icon-info.png') }}" alt="Image"></figure>
                                <span><a href="{{ route('rewards.show', $rewards->id) }}">Ətraflı</a></span> </div>
                            <!-- end info -->
                        </figure>
                        <div class="content-box">
                            <h4><a href="{{ route('rewards.show', $rewards->id) }}">{{ $rewards->title }}</a></h4>
                        </div>
                        <!-- end content-box -->
                    </div>
                    <!-- end exhibition-box -->
                </div>
            @endforeach
            <!-- end col-4 -->
            <div class="col-12 text-center"> <a href="{{ route('rewards') }}" class="custom-button">Hamısına bax</a> </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end content-section -->


<section class="content-section" style="padding: 20px 0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center">
{{--                    <figure><img src="{{ asset('assets/images/qorqud.png') }}" style=" height: 350px;" alt="Image" ></figure>--}}
                    <h6>{{ __('frontend.latest_news_and_updates') }}</h6>
                    <h2>{{ __('frontend.news') }}</h2>
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
                    <div class="content-box"> <small>{{ \Carbon\Carbon::parse($n->published_at)->format('M d, Y') }}</small>
                        <h3>{{ $n->title }}</h3>
                        <p>{{ \Illuminate\Support\Str::limit($n->content, 200) }}</p>
                        <a href="{{ route('news.show', $n->slug) }}" class="custom-link">Ətraflı oxu</a> </div>
                    <!-- end content-box -->
                    <figure data-scroll data-scroll-speed="-1">
                        <a href="{{ route('news.show', $n->slug) }}">
                        <img  src="{{ asset("storage/".$n->photo) }}" alt="Image">
                        </a>
                    </figure>
                </div>
                @endforeach
                <!-- end recent-news -->
            </div>
            <!-- end col-8 -->
            <div class="col-12 text-center">
                <a href="{{ route('news') }}" class="circle-button">{{ __('frontend.see_all') }}</a>
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end content-section -->




{{--<section class="content-section">--}}
{{--    <div class="video-bg">--}}
{{--        <video src="{{ asset('assets/videos/video2.mp4') }}" loop autoplay playsinline muted></video>--}}
{{--    </div>--}}
{{--    <!-- end video-bg -->--}}
{{--    <div class="container">--}}
{{--        <div class="cta-box" data-scroll data-scroll-speed="-1">--}}
{{--            <h6>Dünya Azerbaycanlılar Kurultayı - Eldar İsmayılov</h6>--}}
{{--            <h2>Dünya Azerbaycanlılar Kurultayı - Eldar İsmayılov</h2>--}}
{{--            <a href="#" class="custom-button">Müsahibəyə bax</a> </div>--}}
{{--        <!-- end cta-box -->--}}
{{--    </div>--}}
{{--    <!-- end container -->--}}
{{--</section>--}}
<!-- end content-section -->
<section class="content-section" data-background="#fffbf7">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h2>{{ __('frontend.article') }}</h2>
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
                    <h4><a href="{{ route('article.show', $article->slug) }}">{{ \Illuminate\Support\Str::limit($article->title, 25) }}</a></h4>
                    <p>{{ \Illuminate\Support\Str::limit($article->content, 150) }}</p>
                </div>
                <!-- end collection-box -->
            </div>
            @endforeach
        </div>
        <div class="col-12 text-center"> <a href="{{ route('articles') }}" class="circle-button">{{ __('frontend.see_all') }}</a></div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end content-section -->

{{--@include('frontend.components.subscribe')--}}


@endsection
