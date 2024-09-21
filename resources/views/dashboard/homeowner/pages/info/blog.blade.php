@extends('dashboard.homeowner.layouts.app')

@section('content')

@extends('dashboard.homeowner.layouts.app')

@section('content')

<div class="container mt-5">
    <!-- Blog Title -->
    <h2 class="text-center mb-4">Blog</h2>

    <!-- Blog Posts Section -->
    <div class="row">
        <!-- Blog Post 1 -->
        <div class="row justify-content-between align-items-center border p-3 mb-3">
            <!-- Post Image -->
            <div class="col-md-3 d-flex align-items-center">
                <div>
                    <img src="https://cdn.media.amplience.net/i/boconcept/6728bbb9-935c-4950-a575-b0d600c41a70?locale=*&w=1024&fmt=auto&upscale=false&sm=c&qlt=75&h=1361&%24auto-poi%24=" alt="Blog Post 1" class="img-fluid" style="max-width: 150px;">
                </div>
            </div>

            <!-- Post Details -->
            <div class="col-md-7">
                <h3 class="mb-1">Blog Post Title 1</h3>
                <p class="text-muted mb-2">Published on: 20/09/2024</p>
                <p class="mb-2">This is a short excerpt from the blog post. It gives a brief overview of the content to entice readers to continue reading...</p>
            </div>

            <!-- Read More Button -->
            <div class="col-md-2 d-flex justify-content-end align-items-center">
                <a href="#" class="btn btn-outline-primary">Read More</a>
            </div>
        </div>

        <!-- Blog Post 2 -->
        <div class="row justify-content-between align-items-center border p-3 mb-3">
            <!-- Post Image -->
            <div class="col-md-3 d-flex align-items-center">
                <div>
                    <img src="https://cdn.media.amplience.net/i/boconcept/1c3ff570-47b4-42a5-98d4-ad4300ac7dfb?locale=*&w=1024&fmt=auto&upscale=false&sm=c&qlt=75&h=1361&%24auto-poi%24=" alt="Blog Post 2" class="img-fluid" style="max-width: 150px;">
                </div>
            </div>

            <!-- Post Details -->
            <div class="col-md-7">
                <h3 class="mb-1">Blog Post Title 2</h3>
                <p class="text-muted mb-2">Published on: 18/09/2024</p>
                <p class="mb-2">This is another short excerpt from a different blog post. It highlights the key points and encourages readers to click for more...</p>
            </div>

            <!-- Read More Button -->
            <div class="col-md-2 d-flex justify-content-end align-items-center">
                <a href="#" class="btn btn-outline-primary">Read More</a>
            </div>
        </div>

        <!-- Blog Post 3 -->
        <div class="row justify-content-between align-items-center border p-3 mb-3">
            <!-- Post Image -->
            <div class="col-md-3 d-flex align-items-center">
                <div>
                    <img src="https://cdn.media.amplience.net/i/boconcept/80054c6d-644e-465f-a57b-ad4401161aca?locale=*&w=1024&fmt=auto&upscale=false&sm=c&qlt=75&h=1361&%24auto-poi%24=" alt="Blog Post 3" class="img-fluid" style="max-width: 150px;">
                </div>
            </div>

            <!-- Post Details -->
            <div class="col-md-7">
                <h3 class="mb-1">Blog Post Title 3</h3>
                <p class="text-muted mb-2">Published on: 15/09/2024</p>
                <p class="mb-2">This is a brief description of the third blog post. It provides a snapshot of the article content to engage the reader...</p>
            </div>

            <!-- Read More Button -->
            <div class="col-md-2 d-flex justify-content-end align-items-center">
                <a href="#" class="btn btn-outline-primary">Read More</a>
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

@endsection
