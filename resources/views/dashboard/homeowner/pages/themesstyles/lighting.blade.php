@extends('dashboard.homeowner.layouts.app')

@section('content')

<!-- furniture -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="section-title text-center">
            <h1 class="display-5 mb-5">Lighting</h1>
        </div>
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
                <ul class="list-inline mb-5" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*">All</li>
                    <li class="mx-2" data-filter=".first">General Carpentry</li>
                    <li class="mx-2" data-filter=".second">Custom Carpentry</li>
                </ul>
            </div>
        </div>
        <div class="row g-4 portfolio-container">
            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('img/portfolio-1.jpg') }}" alt="Portfolio Image">
                        <div class="portfolio-overlay">
                            <a class="btn btn-square btn-outline-light mx-1" href="{{ asset('img/portfolio-1.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-outline-light mx-1" href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="border border-5 border-light border-top-0 p-4">
                        <p class="text-primary fw-medium mb-2">General Carpentry</p>
                        <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                <div class="rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('img/portfolio-2.jpg') }}" alt="Portfolio Image">
                        <div class="portfolio-overlay">
                            <a class="btn btn-square btn-outline-light mx-1" href="{{ asset('img/portfolio-2.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-outline-light mx-1" href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="border border-5 border-light border-top-0 p-4">
                        <p class="text-primary fw-medium mb-2">Custom Carpentry</p>
                        <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                <div class="rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('img/portfolio-3.jpg') }}" alt="Portfolio Image">
                        <div class="portfolio-overlay">
                            <a class="btn btn-square btn-outline-light mx-1" href="{{ asset('img/portfolio-3.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-outline-light mx-1" href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="border border-5 border-light border-top-0 p-4">
                        <p class="text-primary fw-medium mb-2">General Carpentry</p>
                        <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                <div class="rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('img/portfolio-4.jpg') }}" alt="Portfolio Image">
                        <div class="portfolio-overlay">
                            <a class="btn btn-square btn-outline-light mx-1" href="{{ asset('img/portfolio-4.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-outline-light mx-1" href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="border border-5 border-light border-top-0 p-4">
                        <p class="text-primary fw-medium mb-2">Custom Carpentry</p>
                        <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                <div class="rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('img/portfolio-5.jpg') }}" alt="Portfolio Image">
                        <div class="portfolio-overlay">
                            <a class="btn btn-square btn-outline-light mx-1" href="{{ asset('img/portfolio-5.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-outline-light mx-1" href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="border border-5 border-light border-top-0 p-4">
                        <p class="text-primary fw-medium mb-2">General Carpentry</p>
                        <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                <div class="rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('img/portfolio-6.jpg') }}" alt="Portfolio Image">
                        <div class="portfolio-overlay">
                            <a class="btn btn-square btn-outline-light mx-1" href="{{ asset('img/portfolio-6.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-outline-light mx-1" href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="border border-5 border-light border-top-0 p-4">
                        <p class="text-primary fw-medium mb-2">Custom Carpentry</p>
                        <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- livingroom.blade -->

@endsection
