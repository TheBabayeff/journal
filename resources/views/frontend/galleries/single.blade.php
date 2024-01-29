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
                    <div class="side-icon-list left-side">
                        <ul>

                            <li>
                                <figure> <img src="assets/imagesicon01.png" alt="Image"> </figure>
                                <div class="content">
                                    <h5>Opening times</h5>
                                    <p>From 27 August<br>
                                        Thursday – Sunday: 11.00-19.00</p>
                                </div>
                                <!-- end content -->
                            </li>
                        </ul>
                    </div>
                    <!-- end side-icon-list -->
                </div>
                <!-- end col-6 -->
                <div class="col-lg-6">
                    <div class="side-arts">
                        <div class="titles">
                            <h6>Visit the our Gallery</h6>
                            <h2>Photo Gallery</h2>
                        </div>
                        <!-- end titles -->
                        <ul>
                            @foreach($gallery->image AS $image)
                            <li data-scroll data-scroll-speed="0.5"  ><img data-fancybox src="{{ asset("storage/" . $image) }}" alt="Image"></li>
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
