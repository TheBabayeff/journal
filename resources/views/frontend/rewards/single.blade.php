@extends('frontend.layouts.app')

@section('content')

    <!-- end page-header -->
    <section class="content-section" style="font-size: 20px; ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <figure><img src="{{ asset('assets/images/qorqud.png') }}" style=" height: 250px;" alt="Image" ></figure>
                        <h6>Dünya Türkləri Birləşin!!!</h6>
                        <h2>{{ $fundRewards->title }}</h2>

                    </div>
                    <!-- end section-title -->
                </div>
                <div class="col-lg-8">
                    <div class="blog-post">
                        <div class="container">
                        <section class="slider container " style="height: 440px; width: 100%">
                            <div class="swiper-container slider-images">
                                <div class="swiper-wrapper">
                                    @foreach($fundRewards->photo AS $slide)

                                        <div class="swiper-slide" data-background="{{ asset("storage/" . $slide) }}">
                                            <div class="mobile-slide" data-background="{{ asset("storage/" . $slide) }}"></div>
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
                        </section>
                        </div>
                        <div class="content-box">

                            <p >{!! \App\Helpers\MarkdownHelper::toHtml($fundRewards->content) !!}</p>
                        </div>
                        <!-- end content-box -->
                    </div>
                    <!-- end blog-post -->
                </div>
                <!-- end col-8 -->

                @if(!empty($fundRewards->video))
                <div class="col-lg-4 col-md-6">
                    <div class="widget">
                    <div class="exhibition-box" data-scroll data-scroll-speed="-1" >
                        <figure> <a href="#"><img src="{{ asset("storage/" . $fundRewards->photo[0]) }}" alt="Image" class="img"></a>



                            <!-- end info -->
                        </figure>
                        <div class="play-now"> <a href="{{ asset("storage/" . $fundRewards->video) }}" data-fancybox data-width="640" data-height="360"  class="play-btn"></a>
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

                        <!-- end content-box -->
                    </div>
                    </div>
                </div>
                <!-- end col-4 -->
                @endif
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
    @include('frontend.components.subscribe')
    <!-- end content-section -->
@endsection
