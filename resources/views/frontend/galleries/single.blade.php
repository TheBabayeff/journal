@extends('frontend.layouts.app')

@section('content')
    <section class="content-section">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="side-image left-half" data-scroll data-scroll-speed="2">
                        <img src="{{ asset("storage/" . $gallery->image[0]) }}" alt="Image">
                    </div>
                    <!-- end side-image -->
                </div>
                <!-- end col-6 -->
                <div class="col-lg-6">
                    <div class="side-arts">
                        <div class="titles">
                            <h6>Visit our Gallery</h6>
                            <h2>{{ $gallery->name }}</h2>
                        </div>
                        <!-- end titles -->
                        <ul>
                            @foreach($gallery->image as $image)
                                <li data-scroll data-scroll-speed="0.5">
                                    <a href="{{ asset("storage/" . $image) }}" data-fancybox>
                                        <img src="{{ asset("storage/" . $image) }}" alt="Image">
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- end side-arts -->
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
@endsection
