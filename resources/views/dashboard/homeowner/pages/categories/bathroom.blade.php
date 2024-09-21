@extends('dashboard.homeowner.layouts.app')

@section('content')

<div class="container my-4">
    <div class="row g-4">
        <!-- Product Card 1 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="product-card p-3 border rounded position-relative">
                <span class="favorite-icon position-absolute top-0 end-0 m-2">
                    <i class="fas fa-heart"></i>
                </span>
                <span class="product-label new">New</span>
                <div class="product-image text-center">
                    <img src="https://assets.boconcept.com/fc7a34b7-ce90-446d-a9e9-b1a9011ea05c/2699267_PNG-Web%2072dpi.png?format=pjpg&auto=webp&fit=bounds&width=768&quality=75%2C60"
                        alt="Indivi sofa with chaise longue left" class="img-fluid">
                </div>
                <div class="product-info mt-3">
                    <h2 class="product-name fs-6 fw-bold">Indivi sofa with chaise longue left</h2>
                    <p class="product-material text-muted mb-1">Leather • Metal</p>
                    <div class="product-options d-flex align-items-center gap-2 mb-2">
                        <span class="color-option black"></span>
                        <span class="color-option gray"></span>
                        <span class="color-option brown"></span>
                        <span class="more-options text-muted small">+ more options</span>
                    </div>
                    <div class="product-price-section">
                        <p class="rec-retail-price text-muted small mb-0">Rec. retail price</p>
                        <h3 class="product-price fs-5 fw-bold">142,710,000 ₫</h3>
                        <p class="product-from-price text-muted mb-0">From 51,590,000 ₫</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Repeat Product Card Structure for additional cards -->
        <!-- Add more cards as needed -->
    </div>
</div>



@endsection