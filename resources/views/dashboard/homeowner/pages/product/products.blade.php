@extends('dashboard.homeowner.layouts.app')

@section('content')

<!-- livingroom.blade -->
<div class="container">
    <h1 class="text-center mt-5 text-secondary">Bath Room</h1>
    <div class="row">
        <!-- Cột bộ lọc sản phẩm -->
        <div class="col-lg-3">
            <h5 class="mb-3">Bộ lọc sản phẩm</h5>
            <form action="{{ route('products.filter') }}" method="GET">
                <!-- Lọc theo tên -->
                <div class="mb-4">
                    <label for="name" class="form-label">Tìm theo tên:</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên sản phẩm" value="{{ request()->name }}">
                </div>

                <!-- Lọc theo giá -->
                <div class="mb-4">
                    <label for="price_min" class="form-label">Giá tối thiểu (VND):</label>
                    <input type="number" class="form-control" name="price_min" id="price_min" value="{{ request()->price_min }}" placeholder="0">
                </div>

                <div class="mb-4">
                    <label for="price_max" class="form-label">Giá tối đa (VND):</label>
                    <input type="number" class="form-control" name="price_max" id="price_max" value="{{ request()->price_max }}" placeholder="0">
                </div>

                <button type="submit" class="btn btn-primary w-100">Lọc</button>
            </form>
        </div>

        <!-- Danh sách sản phẩm -->
        <div class="col-lg-9">
            <div class="mt-5">
                <div class="d-flex row">
                    @foreach($products as $product)
                        <div class="col-lg-3 col-md-4 portfolio-item first wow fadeInUp my-3" data-wow-delay="0.1s">
                            <div class="rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset($product->image_url) }}" alt="Product Image">
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-square btn-outline-light mx-1" href="{{ asset($product->image) }}"
                                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                        <a class="btn btn-square btn-outline-light mx-1" href="#"><i
                                                class="fa-solid fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="border border-5 border-light border-top-0 p-4">
                                    <p class="text-primary fw-medium mb-2">Sản phẩm: {{ $product->name }}</p>
                                    <h5 class="lh-base mb-2">Giá: {{ number_format($product->price, 0, ',', '.') }} VND</h5>
                                    <p class="mb-3">{{ $product->description }}</p>
                                    <button class="btn btn-dark">Thêm vào giỏ hàng</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


<!-- livingroom.blade -->@endsection