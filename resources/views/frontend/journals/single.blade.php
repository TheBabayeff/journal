@extends('frontend.layouts.app')
@section('content')
    <section class="content-section" data-background="#fffbf7">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="side-content left">

                        <small >{{$journal->published_at }}</small>
                        <h2>{{ $journal->name }}  </h2>

                        <a href="{{ asset("storage/" . $journal->pdf) }}" class="custom-button">{{ __('frontend.downloadPdf') }}</a>

                    </div>

                    <!-- end side-content -->
                </div>
                <!-- end col-6 -->
                <div class="col-lg-6">
                    <div class="side-image" data-scroll data-scroll-speed="1">
                        <img  src="{{ asset("storage/" . $journal->image) }}" alt="Image">
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
