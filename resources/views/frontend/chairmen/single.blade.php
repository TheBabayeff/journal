@extends('frontend.layouts.app')
@section('content')
    <section class="content-section" data-background="#fffbf7">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="side-content left">
                        <small>{{ __('frontend.chairmen') }}</small>
                        <h2>{{ $chairman->title }}</h2>
                        <p>{!! \App\Helpers\MarkdownHelper::toHtml($chairman->description) !!}</p>
                    </div>
                    <!-- end side-content -->
                </div>
                <!-- end col-6 -->
                <div class="col-lg-6">
                    <div class="side-image right-half" data-scroll data-scroll-speed="1">
                        <img  src="{{ asset("storage/" . $chairman->image) }}" alt="Image">
                    </div>
                    <!-- end side-image -->
                </div>
                <!--end col-6 -->
            </div>


        </div>

        <!-- end container -->
    </section>

    @include('frontend.components.subscribe')
    <!-- end row -->
    <!-- end col-12 -->
    <!-- end content-section -->
@endsection
