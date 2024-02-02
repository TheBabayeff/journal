@extends('frontend.layouts.app')

@section('content')
    <header class="page-header" data-background="images/page-header.jpg">
        <div class="inner">
            <svg width="580" height="400" class="svg-morph">
                <path id="svg_morph" d="m261,30.4375c0,0 114,6 151,75c37,69 37,174 6,206.5625c-31,32.5625 -138,11.4375 -196,-19.5625c-58,-31 -86,-62 -90,-134.4375c12,-136.5625 92,-126.5625 129,-127.5625z" />
            </svg>
            <h1>News</h1>
            <p>For the latest updates about reopening, booking tickets and what's happening at the Museum, sign up to our newsletter</p>
        </div>
        <!-- end inner -->
    </header>
    <!-- end page-header -->
    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-post">
                        <figure data-scroll data-scroll-speed="-1"><img src="{{ asset("storage/" . $news->photo) }}" alt="Image"></figure>
                        <div class="content-box"> <small>{{ $news->published_at }}</small>
                            <h3>{{ $news->title }}</h3>
                            <p>{!! \App\Helpers\MarkdownHelper::toHtml($news->content) !!}</p>
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
                <!-- end col-12 -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
    @include('frontend.components.subscribe')
    <!-- end content-section -->
@endsection
