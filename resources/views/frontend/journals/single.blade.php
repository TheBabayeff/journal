@extends('frontend.layouts.app')
@section('content')
    <section class="content-section" data-background="#fffbf7">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="side-content left">

                        <small >{{$journal->published_at }}</small>
                        <h2>{{ $journal->name }}  </h2>

                        <a href="{{ asset("storage/" . $journal->pdf) }}" target="_blank"  class="custom-button">{{ __('frontend.downloadPdf') }}</a>

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
    <section class="content-section no-bottom-spacing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title">
                        <h6>Digər Jurnallarımızada göz atın</h6>
                        <h2>{{ __('frontend.publications') }}</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
                <div class="col-12">
                    <div class="image-box-carousel">
                        <div class="swiper-wrapper">
                            @foreach($journals AS $jurnal)
                            <div class="swiper-slide">
                                <figure>
                                    <img src="{{ asset("storage/" . $jurnal->image) }}" alt="Image">
                                </figure>
                                <div class="content-box">
                                    <h5>{{ $jurnal->name }}</h5>
                                    <a href="{{ route('journal.show', $jurnal->id) }}" class="custom-link">Ətraflı</a>
                                </div>
                                <!-- end content-box -->
                            </div>
                            <!-- end swiper-slide -->
                            @endforeach
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
    @include('frontend.components.subscribe')
    <!-- end row -->
    <!-- end col-12 -->
    <!-- end content-section -->
@endsection
