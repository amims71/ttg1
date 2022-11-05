@extends('layouts')

@section('title', 'Home')

@section('section-content')

    <!-- Start Home Area -->
    <div class="home-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="main-banner-content">
                                <h1>IT Solutions & Business Services Company</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua, magna aliqua. ipsum is simply dummy
                                    text of the printing.</p>
                                <div class="banner-btn">
                                    <a href="{{route('about')}}" class="default-btn-one">
                                        About Us
                                        <span></span>
                                    </a>
                                    <a class="default-btn" href="{{route('contact')}}">
                                        Contact Us
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="banner-image">
                                <img src="{{ URL::asset('assets/img/home-font.png') }}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="creative-shape">
            <img src="{{ URL::asset('assets/img/home-bottom-shape.png') }}" alt="svg shape">
        </div>
    </div>
    <!-- End Home Area -->

    <!-- Start Services Section -->
    @include('services.provide')
    <!-- End Services Section -->

    <!-- Start About Section -->
    @include('about.company')
    <!-- End About Section -->

    <!-- Start Overview Section -->
    @include('services.choose')
    <!-- End Overview Section -->

    <!-- Start Overview Section -->
    @include('services.trust')
    <!-- End Overview Section -->

    <!-- Start Counter Section -->
    @include('about.counter')
    <!-- End Counter Section -->

    <!-- Start Testimonial Section -->
    @include('about.testimonial')
    <!-- End Testimonial Section -->

    <!-- Start Team Section -->
    @include('services.experts')
    <!-- End Team Section -->

    <!-- Start Blog Section -->
    @include('blogs.recent')
    <!-- End Blog Section -->

    <!-- Start Hire Section -->
    @include('about.hire')
    <!-- End Hire Section -->

    <!-- Start Partner section -->
    @include('about.tech')
    <!-- End Partner section -->

@endsection
