@extends('dashboard.homeowner.layouts.app')

@section('content')

<div class="container mt-5">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @if(is_array($cartItems) && count($cartItems) > 0)
        @php $totalPrice = 0; @endphp
        @foreach($cartItems as $id => $item)
            <div class="row justify-content-between align-items-center border p-3 mb-3">
                <div class="col-md-3 d-flex align-items-center">
                    <img src="{{ $item['image_url'] }}" alt="{{ $item['name'] }}" class="img-fluid" style="max-width: 150px;">
                </div>
                <div class="col-md-6">
                    <h3 class="mb-1">{{ $item['name'] }}</h3>
                    <h4 id="price-{{ $id }}" class="text-dark fw-bold mb-3">{{ number_format($item['price'], 0, ',', '.') }} ₫</h4>
                    <p class="text-muted">Số lượng: <span id="quantity-{{ $id }}">{{ $item['quantity'] }}</span></p>
                    <button class="btn btn-secondary" onclick="updateQuantity({{ $id }}, -1)">-</button>
                    <button class="btn btn-secondary" onclick="updateQuantity({{ $id }}, 1)">+</button>
                </div>
                <div class="col-md-3 d-flex justify-content-end align-items-center">
                    <form action="{{ route('cart.remove', $id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                </div>
            </div>
            @php
                $totalPrice += $item['price'] * $item['quantity'];
            @endphp
        @endforeach

        <div class="row mt-3">
            <h4 id="total-price" class="text-end">Tổng Giá: {{ number_format($totalPrice, 0, ',', '.') }} ₫</h4>
        </div>

        <div class="row mt-3">
            <div class="col text-end">
                <a href="{{ route('products.index') }}" class="btn btn-primary">Tiếp tục mua hàng</a>
            </div>
        </div>

    @else
        <p>Giỏ hàng của bạn đang trống.</p>
    @endif
</div>

<script>
function updateQuantity(productId, change) {
    const quantityElement = document.getElementById(`quantity-${productId}`);
    const priceElement = document.getElementById(`price-${productId}`);
    const totalPriceElement = document.getElementById('total-price');

    let currentQuantity = parseInt(quantityElement.innerText);
    currentQuantity += change;

    if (currentQuantity < 1) {
        Swal.fire({
            icon: 'warning',
            title: 'Số lượng không thể nhỏ hơn 1.',
            confirmButtonText: 'OK'
        });
        return;
    }

    fetch(`/cart/update/${productId}`, {
        method: 'PATCH',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ quantity: currentQuantity })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            quantityElement.innerText = currentQuantity;

            // Tính toán và cập nhật tổng giá ngay lập tức
            let currentTotalPrice = 0;
            const cartItems = document.querySelectorAll('[id^="quantity-"]');
            cartItems.forEach(item => {
                const itemId = item.id.split('-')[1];
                const itemQuantity = parseInt(item.innerText);
                const itemPrice = parseFloat(document.getElementById(`price-${itemId}`).innerText.replace(/\./g, '').replace(' ₫', ''));
                currentTotalPrice += itemQuantity * itemPrice;
            });

            totalPriceElement.innerText = 'Tổng Giá: ' + currentTotalPrice.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, '.') + ' ₫';

            // Thông báo thành công
            Swal.fire({
                icon: 'success',
                title: 'Cập nhật thành công!',
                text: `Số lượng đã được cập nhật thành ${currentQuantity}.`,
                confirmButtonText: 'OK'
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Lỗi!',
                text: data.message,
                confirmButtonText: 'OK'
            });
        }
    })
    .catch(error => console.error('Error:', error));
}
</script>

@endsection
