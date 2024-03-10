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
                        <h2>{{ $news->title }}</h2>

                    </div>
                    <!-- end section-title -->
                </div>
                <div class="col-lg-8">
                    <div class="blog-post">
                        <figure data-scroll data-scroll-speed="-1" style="width: 75%; "><img src="{{ asset("storage/" . $news->photo) }}" alt="Image"></figure>

                        <div class="content-box"> <small>{{ $news->published_at }}</small>

                            <p >{!! \App\Helpers\MarkdownHelper::toHtml($news->content) !!}</p>
                        </div>
                        <!-- end content-box -->
                    </div>
                    <!-- end blog-post -->
                    <ul class="pagination">
                        @if($prevPost)
                         <li class="page-item"> <a class="page-link" href="{{ route('news.show', $prevPost->slug) }}">Prev Post</a> </li>
                        @endif
                        @if($nextPost)
                         <li class="page-item"><a class="page-link" href="{{ route('news.show', $nextPost->slug) }}">Next Post</a></li>
                        @endif
                    </ul>
                    <!-- end pagination -->
                </div>
                <!-- end col-8 -->

                <div class="col-lg-4 col-md-6">

                    <div class="exhibition-box" data-scroll data-scroll-speed="-1" >
                        <figure> <a href="#"><img src="http://localhost:8000/storage/child-photos/01HRERJRJCN3D48DYGWX3S2ENQ.jpg" alt="Image" class="img"></a>



                            <!-- end info -->
                        </figure>
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

                        <!-- end content-box -->
                    </div>
                    <!-- end exhibition-box -->
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
    @include('frontend.components.subscribe')
    <!-- end content-section -->
@endsection
