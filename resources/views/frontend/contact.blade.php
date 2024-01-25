@extends('frontend.layouts.app')

@section('content')

    <section class="content-section" data-background="#fffbf7">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <figure><img src="{{ asset('assets/images/qorqud.png') }}" alt="Image"></figure>
                        <h2>{{ __('frontend.contact_with_us') }}</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
                <div class="col-lg-5">
                    <div class="contact-box">
                        <h6>Main Contact Number</h6>
                        <p> +99450) 444 88 00 (Monday to Friday, 9am to 5pm)</p>
                        <p>(+99450) 364 46 01 (Monday to Friday, 9am to 5pm)</p>

                    </div>
                    <!-- end contact-box -->
                    <div class="contact-box">
                        <h6>Media enquiries</h6>
                        <p><a href="#">info@worldofazerbaijan.az</a>
                        Az1000, Azərbaycan Respublikası,
                            Bakı şəh., Nizami 91</p></p>
                    </div>
                    <!-- end contact-box -->
                </div>
                <!-- end col-5 -->
                <div class="col-lg-5">
                    <div class="contact-form">
                        <div class="mb-3">
                            <input type="text" placeholder="Complete Name">
                        </div>
                        <!-- end mb-3 -->
                        <div class="mb-3">
                            <input type="text" placeholder="E-mail Address">
                        </div>
                        <!-- end mb-3 -->
                        <div class="mb-3">
                            <input type="text" placeholder="Phone Number">
                        </div>
                        <!-- end mb-3 -->
                        <div class="mb-3">
                            <textarea placeholder="Your Message"></textarea>
                        </div>
                        <!-- end mb-3 -->
                        <div class="mb-3">
                            <input type="submit" value="Send Us">
                        </div>
                        <!-- end mb-3 -->
                    </div>
                    <!-- end contact-form -->
                </div>
                <!-- end col-5 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
@endsection
