@extends('dashboard.homeowner.layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-between align-items-center border p-3 mb-3">
        <!-- Product Image -->
        <div class="col-md-3 d-flex align-items-center">
            <div>
                <img src="https://assets.boconcept.com/4312b7f4-4c6f-416b-b429-aeb000aeec09/2052065_PNG-Web%2072dpi.png?format=pjpg&auto=webp&fit=bounds&width=375&quality=75%2C60" alt="Hauge Dining Chair" class="img-fluid" style="max-width: 150px;">
            </div>
        </div>

        <!-- Product Details -->
        <div class="col-md-6">
            <h3 class="mb-1">Hauge</h3>
            <p class="text-muted mb-2">Hauge dining chair</p>
            <p class="mb-2">Rec. retail price</p>
            <h4 class="text-dark fw-bold mb-3">7,490,000 ₫</h4>
            <p class="text-muted mb-0">Leg natural oak veneer</p>
            <p class="text-muted mb-0">Seat white</p>
            <p class="text-muted">Item no 4020708D1740136</p>
        </div>

        <!-- Quantity & Remove Button -->
        <div class="col-md-3 d-flex justify-content-end align-items-center">
            <div class="d-flex align-items-center">
                <input type="number" class="form-control me-3" value="1" style="width: 70px;">
            </div>

            <div class="d-flex align-items-center text-center">
                <a href="">

                    <i class="fas fa-trash text-muted"></i>
                </a>
            </div>

        </div>
    </div>
    <div class="row justify-content-between align-items-center border p-3 mb-3">
        <!-- Product Image -->
        <div class="col-md-3 d-flex align-items-center">
            <div>
                <img src="https://assets.boconcept.com/4312b7f4-4c6f-416b-b429-aeb000aeec09/2052065_PNG-Web%2072dpi.png?format=pjpg&auto=webp&fit=bounds&width=375&quality=75%2C60" alt="Hauge Dining Chair" class="img-fluid" style="max-width: 150px;">
            </div>
        </div>

        <!-- Product Details -->
        <div class="col-md-6">
            <h3 class="mb-1">Hauge</h3>
            <p class="text-muted mb-2">Hauge dining chair</p>
            <p class="mb-2">Rec. retail price</p>
            <h4 class="text-dark fw-bold mb-3">7,490,000 ₫</h4>
            <p class="text-muted mb-0">Leg natural oak veneer</p>
            <p class="text-muted mb-0">Seat white</p>
            <p class="text-muted">Item no 4020708D1740136</p>
        </div>

        <!-- Quantity & Remove Button -->
        <div class="col-md-3 d-flex justify-content-end align-items-center">
            <div class="d-flex align-items-center">
                <input type="number" class="form-control me-3" value="1" style="width: 70px;">
            </div>

            <div class="d-flex align-items-center text-center">
                <a href="">

                    <i class="fas fa-trash text-muted"></i>
                </a>
            </div>

        </div>
    </div>
    <div class="row justify-content-between align-items-center border p-3 mb-3">
        <!-- Product Image -->
        <div class="col-md-3 d-flex align-items-center">
            <div>
                <img src="https://assets.boconcept.com/4312b7f4-4c6f-416b-b429-aeb000aeec09/2052065_PNG-Web%2072dpi.png?format=pjpg&auto=webp&fit=bounds&width=375&quality=75%2C60" alt="Hauge Dining Chair" class="img-fluid" style="max-width: 150px;">
            </div>
        </div>

        <!-- Product Details -->
        <div class="col-md-6">
            <h3 class="mb-1">Hauge</h3>
            <p class="text-muted mb-2">Hauge dining chair</p>
            <p class="mb-2">Rec. retail price</p>
            <h4 class="text-dark fw-bold mb-3">7,490,000 ₫</h4>
            <p class="text-muted mb-0">Leg natural oak veneer</p>
            <p class="text-muted mb-0">Seat white</p>
            <p class="text-muted">Item no 4020708D1740136</p>
        </div>

        <!-- Quantity & Remove Button -->
        <div class="col-md-3 d-flex justify-content-end align-items-center">
            <div class="d-flex align-items-center">
                <input type="number" class="form-control me-3" value="1" style="width: 70px;">
            </div>

            <div class="d-flex align-items-center text-center">
                <a href="">

                    <i class="fas fa-trash text-muted"></i>
                </a>
            </div>

        </div>
    </div>
</div>

@include('dashboard.homeowner.components.Testimonial')



@endsection