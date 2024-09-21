@extends('dashboard.homeowner.layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mt-5 text-secondary">Bath Room</h1>
    <div id="alertContainer" style="position: fixed; top: 180px; left: 80%; transform: translateX(-50%); z-index: 1050;"></div> 

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
                                        <a class="btn btn-square btn-outline-light mx-1" href="{{ asset($product->image) }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                        <a class="btn btn-square btn-outline-light mx-1" href="#"><i class="fa-solid fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="border border-5 border-light border-top-0 p-4">
                                    <p class="text-primary fw-medium mb-2">Sản phẩm: {{ $product->name }}</p>
                                    <h5 class="lh-base mb-2">Giá: {{ number_format($product->price, 0, ',', '.') }} VND</h5>
                                    <p class="mb-3">{{ $product->description }}</p>

                                    <button class="btn btn-dark" onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<script>
let alertQueue = []; 
let isAlertShowing = false;

function showAlert(type, message) {
    alertQueue.push({ type, message });
    showNextAlert();
}

function showNextAlert() {
    if (isAlertShowing || alertQueue.length === 0) return; 

    const { type, message } = alertQueue.shift(); 
    isAlertShowing = true; 

    const alert = `<div class="alert alert-${type} alert-dismissible fade show" role="alert">
        ${message}
    </div>`;
    document.getElementById('alertContainer').innerHTML += alert;

    setTimeout(() => {
        const alerts = document.querySelectorAll('#alertContainer .alert');
        if (alerts.length > 0) {
            alerts[0].classList.remove('show');
            alerts[0].classList.add('fade');
            setTimeout(() => {
                alerts[0].remove(); 
                isAlertShowing = false; 
                showNextAlert(); 
            }, 500); 
        }
    }, 1000);
}

const style = document.createElement('style');
style.innerHTML = `
    .fade {
        opacity: 1;
        transition: opacity 0.5s ease;
    }
`;
document.head.appendChild(style);

function addToCart(productId) {
    fetch(`/cart/add/${productId}`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ quantity: 1 })
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        if (data.error) {
            showAlert('success', data.message || 'Có lỗi xảy ra, vui lòng thử lại.');
        } else {
            showAlert('success', 'Đã thêm vào giỏ hàng thành công!'); 
        }
    })
    .catch(error => {
        showAlert('success', 'Đã thêm vào giỏ hàng thành công!');
        console.error('Error:', error);
    });
}
</script>

@endsection
