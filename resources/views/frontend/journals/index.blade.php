@extends('frontend.layouts.app')
@section('content')
    <header class="page-header" data-background="images/page-header.jpg">
        <div class="inner">
            <svg width="580" height="400" class="svg-morph">
                <path id="svg_morph" d="m261,30.4375c0,0 114,6 151,75c37,69 37,174 6,206.5625c-31,32.5625 -138,11.4375 -196,-19.5625c-58,-31 -86,-62 -90,-134.4375c12,-136.5625 92,-126.5625 129,-127.5625z" />
            </svg>
            <h1>{{ __('frontend.journals') }}</h1>
            <p>Jurnalımızın bütün tirajlarını buradan yükləyə bilərsiniz.</p>
        </div>
        <!-- end inner -->
    </header>
    <!-- end page-header -->
    <section class="content-section" data-background="#fffbf7">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($journals AS $journal)
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="exhibition-box" data-scroll data-scroll-speed="-1" >
                            <figure> <a href="{{ route('journal.show' , $journal->id) }}"><img src="{{ asset("storage/" . $journal->image) }}" alt="Image" class="img"></a>
                                <div class="info">
                                    <figure class="i"><img src="{{ asset("assets/images/icon-info.png") }}" alt="Image"></figure>
                                    <span><a href="{{ route('journal.show' , $journal->id) }}">Ətraflı</a></span> </div>
                                <!-- end info -->
                            </figure>
                            <div class="content-box">
                                <h4><a href="{{ route('journal.show' , $journal->id) }}">{{ $journal->title }}</a></h4>
                            </div>
                            <!-- end content-box -->
                        </div>
                        <!-- end exhibition-box -->
                    </div>
                @endforeach
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
@endsection
