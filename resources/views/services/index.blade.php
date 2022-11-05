@extends('layouts')

@section('title', 'Services')

@section('section-content')

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Services</h2>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Services Section -->
    @include('services.provide')
    <!-- End Services Section -->

    <!-- Start Hire Section -->
    @include('about.hire')
    <!-- End Hire Section -->

    <!-- Start Overview Section -->
    @include('services.choose')
    <!-- End Overview Section -->

    <!-- Start Overview Section -->
    @include('services.trust')
    <!-- End Overview Section -->

@endsection
