@extends('dashboard.homeowner.layouts.app')

@section('content')

<div class="container mt-5">
    <!-- Design Management Title -->
    <h2 class="text-center mb-4">Design Management</h2>

    <!-- Saved Designs Section -->
    <div class="row">
        <!-- Saved Design 1 -->
        <div class="row justify-content-between align-items-center border p-3 mb-3">
            <!-- Product Image -->
            <div class="col-md-3 d-flex align-items-center">
                <div>
                    <img src="https://cdn.media.amplience.net/i/boconcept/fac60279-a9dc-4fd5-90c9-b0ac008832ca?locale=*&w=3020&fmt=auto&upscale=false&sm=c&qlt=75&h=2270&%24auto-poi%24=" alt="Design 1" class="img-fluid" style="max-width: 150px;">
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-md-6">
                <h3 class="mb-1">New Design Name 1</h3>
                <p class="text-muted mb-2">Saved on: 20/09/2024</p>
                <p class="mb-2">Detailed description of Design 1: Made from high-quality materials, suitable for modern spaces.</p>
                <p class="text-muted mb-2">Status: <span class="badge bg-warning">Editing</span></p>
            </div>

            <!-- Edit Button -->
            <div class="col-md-3 d-flex justify-content-end align-items-center">
                <div class="d-flex align-items-center">
                    <a href="#" class="btn btn-dark">Edit</a>
                </div>
            </div>
        </div>

        <!-- Saved Design 2 -->
        <div class="row justify-content-between align-items-center border p-3 mb-3">
            <!-- Product Image -->
            <div class="col-md-3 d-flex align-items-center">
                <div>
                    <img src="https://cdn.media.amplience.net/i/boconcept/c229f210-3a1c-414a-a42b-b08c00b2f2a0?locale=*&w=3020&fmt=auto&upscale=false&sm=c&qlt=75&%24auto-poi%24=" alt="Design 2" class="img-fluid" style="max-width: 150px;">
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-md-6">
                <h3 class="mb-1">New Design Name 2</h3>
                <p class="text-muted mb-2">Saved on: 18/09/2024</p>
                <p class="mb-2">Detailed description of Design 2: Scandinavian style with neutral tones and natural wood materials.</p>
                <p class="text-muted mb-2">Status: <span class="badge bg-success">Completed</span></p>
            </div>

            <!-- Edit Button -->
            <div class="col-md-3 d-flex justify-content-end align-items-center">
                <div class="d-flex align-items-center">
                    <a href="#" class="btn btn-dark">Edit</a>
                </div>
            </div>
        </div>

        <!-- Saved Design 3 -->
        <div class="row justify-content-between align-items-center border p-3 mb-3">
            <!-- Product Image -->
            <div class="col-md-3 d-flex align-items-center">
                <div>
                    <img src="https://cdn.media.amplience.net/i/boconcept/e07131ec-8a55-4123-8ad4-b08c00b27854?locale=*&w=3020&fmt=auto&upscale=false&sm=c&qlt=75&%24auto-poi%24=" alt="Design 3" class="img-fluid" style="max-width: 150px;">
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-md-6">
                <h3 class="mb-1">New Design Name 3</h3>
                <p class="text-muted mb-2">Saved on: 15/09/2024</p>
                <p class="mb-2">Detailed description of Design 3: Classic design combining dark wood and metal elements.</p>
                <p class="text-muted mb-2">Status: <span class="badge bg-info">In Development</span></p>
            </div>

            <!-- Edit Button -->
            <div class="col-md-3 d-flex justify-content-end align-items-center">
                <div class="d-flex align-items-center">
                    <a href="#" class="btn btn-dark">Edit</a>
                </div>
            </div>
        </div>

        <!-- Saved Design 4 -->
        <div class="row justify-content-between align-items-center border p-3 mb-3">
            <!-- Product Image -->
            <div class="col-md-3 d-flex align-items-center">
                <div>
                    <img src="https://cdn.media.amplience.net/i/boconcept/37393cdf-d873-47a7-8621-b08c00b2c151?locale=*&w=1024&fmt=auto&upscale=false&sm=c&qlt=75&h=1361&%24auto-poi%24=" alt="Design 4" class="img-fluid" style="max-width: 150px;">
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-md-6">
                <h3 class="mb-1">New Design Name 4</h3>
                <p class="text-muted mb-2">Saved on: 10/09/2024</p>
                <p class="mb-2">Detailed description of Design 4: Open space with minimalist furniture, creating a spacious and comfortable atmosphere.</p>
                <p class="text-muted mb-2">Status: <span class="badge bg-danger">Under Review</span></p>
            </div>

            <!-- Edit Button -->
            <div class="col-md-3 d-flex justify-content-end align-items-center">
                <div class="d-flex align-items-center">
                    <a href="#" class="btn btn-dark">Edit</a>
                </div>
            </div>
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

@endsection
