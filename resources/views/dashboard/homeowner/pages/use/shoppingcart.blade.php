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
                <button class="btn btn-danger" onclick="clearCart()">Xóa tất cả</button>
                <a href="{{ route('products.index') }}" class="btn btn-primary">Tiếp tục mua hàng</a>
            </div>
        </div>

    @else
        <p>Giỏ hàng của bạn đang trống.</p>
    @endif
</div>

<script>
function updateQuantity(id, change) {
    const quantityElement = document.getElementById(`quantity-${id}`);
    let quantity = parseInt(quantityElement.innerText);
    quantity += change;

    if (quantity < 1) {
        quantity = 1;
    }

    quantityElement.innerText = quantity;

    fetch(`/cart/update/${id}`, {
        method: 'PATCH', 
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ quantity: quantity })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            updateTotalPrice(); 
        } else {
            alert(data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

function updateTotalPrice() {
    let totalPrice = 0;
    const cartItems = document.querySelectorAll('.row.justify-content-between');

    cartItems.forEach(item => {
        const price = parseFloat(item.querySelector('h4').innerText.replace(/[,. ₫]/g, ''));
        const quantity = parseInt(item.querySelector('span').innerText);
        totalPrice += price * quantity;
    });

    document.getElementById('total-price').innerText = `Tổng Giá: ${totalPrice.toLocaleString('vi-VN')} ₫`;
}

function clearCart() {
    fetch('/cart/clear', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            document.getElementById('total-price').innerText = 'Tổng Giá: 0 ₫';

            const cartItemsContainer = document.querySelector('.container'); 
            cartItemsContainer.innerHTML = '<p>Giỏ hàng của bạn đang trống.</p>'; 

            const productRows = document.querySelectorAll('.row.justify-content-between');
            productRows.forEach(row => row.remove()); 
        } else {
            alert(data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}


</script>

@endsection
