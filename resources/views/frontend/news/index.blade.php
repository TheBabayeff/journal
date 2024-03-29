@extends('frontend.layouts.app')
@section('content')
    <header class="page-header" data-background="{{ asset("assets/images/page-header.jpg") }}">
        <div class="inner">
            <svg width="580" height="400" class="svg-morph">
                <path id="svg_morph" d="m261,30.4375c0,0 114,6 151,75c37,69 37,174 6,206.5625c-31,32.5625 -138,11.4375 -196,-19.5625c-58,-31 -86,-62 -90,-134.4375c12,-136.5625 92,-126.5625 129,-127.5625z" />
            </svg>
            <h1>Xəbərlər</h1>
            <p>Ən son xəbərləri Jurnallarımızın yeni tirajları və sərgilər haqqında məlumatı bizdən əldə edin.</p>
        </div>
        <!-- end inner -->
    </header>
    <!-- end page-header -->
    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @foreach($news AS $n)
                    <div class="blog-post">
                        <figure data-scroll data-scroll-speed="-1"><img src="{{ asset("storage/" . $n->photo) }}" alt="Image" style="width: 50%"></figure>
                        <div class="content-box"> <small>{{ $n->published_at }}</small>
                            <h3>{{ $n->title }}</h3>
                            <p>{{ \Illuminate\Support\Str::limit($n->content, 150) }} </p>
                            <a href="{{ route('news.show', $n->slug) }}" class="custom-link">Ətraflı oxu</a> </div>
                        <!-- end content-box -->
                    </div>
                    @endforeach
                    <!-- end blog-post -->

                    <ul class="pagination">
                        <li class="page-item disabled"> <a class="page-link" href="#" tabindex="-1">Prev</a> </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"> <a class="page-link" href="#">2</a> </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
                    </ul>
                    <!-- end pagination -->
                </div>
                <!-- end col-8 -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
    @include('frontend.components.subscribe')
    <!-- end content-section -->
@endsection
