@extends('dashboard.homeowner.layouts.app')

@section('content')

<div class="container my-5">
    <!-- Page Title -->
    <h1 class="text-center mb-5">Dashboard Overview</h1>

    <!-- Recent Activities -->
    <div class="mb-5">
        <h2 class="mb-3">Recent Activities</h2>
        <!-- Activity 1 -->
        <div class="row justify-content-between align-items-center border p-3 mb-3">
            <div class="col-md-1">
                <i class="bi bi-pencil-square fs-1 text-primary"></i>
            </div>
            <div class="col-md-9">
                <p class="mb-0">You edited the design <strong>Modern Living Room</strong> on 15/09/2024.</p>
            </div>
            <div class="col-md-2 text-end">
                <a href="#" class="btn btn-outline-primary">View Details</a>
            </div>
        </div>
        <!-- Activity 2 -->
        <div class="row justify-content-between align-items-center border p-3 mb-3">
            <div class="col-md-1">
                <i class="bi bi-heart-fill fs-1 text-danger"></i>
            </div>
            <div class="col-md-9">
                <p class="mb-0">You saved the design <strong>Modern Style Bedroom</strong> on 14/09/2024.</p>
            </div>
            <div class="col-md-2 text-end">
                <a href="#" class="btn btn-outline-primary">View Details</a>
            </div>
        </div>
        <!-- Activity 3 -->
        <div class="row justify-content-between align-items-center border p-3 mb-3">
            <div class="col-md-1">
                <i class="bi bi-cart-check-fill fs-1 text-success"></i>
            </div>
            <div class="col-md-9">
                <p class="mb-0">You purchased the <strong>Scandinavian Coffee Table</strong> on 13/09/2024.</p>
            </div>
            <div class="col-md-2 text-end">
                <a href="#" class="btn btn-outline-primary">View Details</a>
            </div>
        </div>
        <!-- Pagination -->
    <div class="row mt-4">
        <div class="col-md-12 d-flex justify-content-center">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
    </div>

    <!-- Saved Items -->
    <div class="mb-5">
        <h2 class="mb-3">Saved Items</h2>
        <!-- Saved Design 1 -->
        <div class="row justify-content-between align-items-center border p-3 mb-3">
            <div class="col-md-3 d-flex align-items-center">
                <div>
                    <img src="https://cdn.media.amplience.net/i/boconcept/80102641-e5a5-4c34-8ce0-ae3700873f4f?locale=*&w=1024&fmt=auto&upscale=false&sm=c&qlt=75&h=1361&%24auto-poi%24=" alt="Design 1" class="img-fluid" style="max-width: 150px;">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="mb-1">Design 1</h3>
                <p class="text-muted mb-2">Saved on: 01/09/2024</p>
                <p class="mb-2">A brief description of Design 1.</p>
                <p class="text-muted mb-2">Status: <span class="badge bg-success">Completed</span></p>
            </div>
            <div class="col-md-3 d-flex justify-content-end align-items-center">
                <a href="#" class="btn btn-dark">Edit</a>
            </div>
        </div>
        <!-- Saved Design 2 -->
        <div class="row justify-content-between align-items-center border p-3 mb-3">
            <div class="col-md-3 d-flex align-items-center">
                <div>
                    <img src="https://cdn.media.amplience.net/i/boconcept/e9183e14-af8d-462c-98fb-ae3500f4270b?locale=*&w=1024&fmt=auto&upscale=false&sm=c&qlt=75&h=1361&%24auto-poi%24=" alt="Design 2" class="img-fluid" style="max-width: 150px;">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="mb-1">Design 2</h3>
                <p class="text-muted mb-2">Saved on: 05/09/2024</p>
                <p class="mb-2">A brief description of Design 2.</p>
                <p class="text-muted mb-2">Status: <span class="badge bg-warning">In Progress</span></p>
            </div>
            <div class="col-md-3 d-flex justify-content-end align-items-center">
                <a href="#" class="btn btn-dark">Edit</a>
            </div>
        </div>
        <!-- Saved Design 3 -->
        <div class="row justify-content-between align-items-center border p-3 mb-3">
            <div class="col-md-3 d-flex align-items-center">
                <div>
                    <img src="https://cdn.media.amplience.net/i/boconcept/37393cdf-d873-47a7-8621-b08c00b2c151?locale=*&w=1024&fmt=auto&upscale=false&sm=c&qlt=75&h=1361&%24auto-poi%24=" alt="Design 3" class="img-fluid" style="max-width: 150px;">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="mb-1">Design 3</h3>
                <p class="text-muted mb-2">Saved on: 10/09/2024</p>
                <p class="mb-2">A brief description of Design 3.</p>
                <p class="text-muted mb-2">Status: <span class="badge bg-danger">Pending Review</span></p>
            </div>
            <div class="col-md-3 d-flex justify-content-end align-items-center">
                <a href="#" class="btn btn-dark">Edit</a>
            </div>
        </div>
        <!-- Pagination -->
    <div class="row mt-4">
        <div class="col-md-12 d-flex justify-content-center">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
    </div>

    <!-- Upcoming Consultations -->
    <div class="mb-5">
        <h2 class="mb-3">Upcoming Consultations</h2>
        <!-- Consultation 1 -->
        <div class="row justify-content-between align-items-center border p-3 mb-3">
            <div class="col-md-8">
                <p class="mb-0">Consultation with <strong>Nguyen Anh</strong> on <strong>Scandinavian Style Living Room</strong> at 10:00 AM on 20/09/2024.</p>
            </div>
            <div class="col-md-4 text-end">
                <a href="#" class="btn btn-outline-secondary">View Appointment Details</a>
            </div>
        </div>
        <!-- Consultation 2 -->
        <div class="row justify-content-between align-items-center border p-3 mb-3">
            <div class="col-md-8">
                <p class="mb-0">Consultation with <strong>John Doe</strong> about <strong>Minimalist Kitchen Design</strong> at 2:00 PM on 22/09/2024.</p>
            </div>
            <div class="col-md-4 text-end">
                <a href="#" class="btn btn-outline-secondary">View Appointment Details</a>
            </div>
        </div>
        <!-- Consultation 3 -->
        <div class="row justify-content-between align-items-center border p-3 mb-3">
            <div class="col-md-8">
                <p class="mb-0">Consultation with <strong>Jane Smith</strong> on <strong>Coastal Style Bedroom</strong> at 11:00 AM on 25/09/2024.</p>
            </div>
            <div class="col-md-4 text-end">
                <a href="#" class="btn btn-outline-secondary">View Appointment Details</a>
            </div>
        </div>
        <!-- Pagination -->
    <div class="row mt-4">
        <div class="col-md-12 d-flex justify-content-center">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
    </div>
</div>

@endsection
