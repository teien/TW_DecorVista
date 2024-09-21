@extends('dashboard.homeowner.layouts.app')

@section('content')

<!-- About Start -->
<div class="container bg-light my-5 px-lg-0">
    <div class="container about">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="img/about.jpg" style="object-fit: cover;" alt="About Us">
                </div>
            </div>
            <div class="col-lg-6 about-text py-5">
                <div class="p-lg-5 pe-lg-0">
                    <div class="section-title text-start">
                        <h1 class="display-5 mb-4">About Us</h1>
                    </div>
                    <p class="mb-4 pb-2">We are dedicated to providing the best services to our clients. Our team works tirelessly to ensure satisfaction and excellence in every project.</p>
                    <div class="row g-4 mb-4 pb-2">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                    <i class="fa fa-users fa-2x text-dark"></i>
                                </div>
                                <div class="ms-3">
                                    <h2 class="text-dark mb-1" data-toggle="counter-up">1234</h2>
                                    <p class="fw-medium mb-0">Happy Clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                    <i class="fa fa-check fa-2x text-dark"></i>
                                </div>
                                <div class="ms-3">
                                    <h2 class="text-dark mb-1" data-toggle="counter-up">1234</h2>
                                    <p class="fw-medium mb-0">Projects Completed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-dark py-3 px-5">Explore More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@endsection
