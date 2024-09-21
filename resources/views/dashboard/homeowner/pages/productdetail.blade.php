@extends('dashboard.homeowner.layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="product-image">
                <img src="{{ asset($product->image_url) }}" alt="Product Image" class="img-fluid">
            </div>
        </div>

        <div class="col-md-6">
            <h1 class="product-title">{{$product->product_name}}</h1>
            <p class="product-brand">{{$product->brand}}</p>

            <div class="product-options mt-4">
                <h5>Choose your design</h5>
                <div class="option-item">
                    
                </div>
            </div>

            <div class="product-price-section mt-4">
                <span class="rec-retail-price">Rec. retail price</span>
                <h2 class="price">{{$product->price}}</h2>
                <span class="price-info">From {{$product->price}}</span>
            </div>

            <div class="mt-4">
                <button class="btn btn-dark btn-lg w-100">Add to cart</button>
            </div>

            <div class="delivery-info mt-3">
                <span>Expected delivery</span> <strong>3-4 weeks</strong>
            </div>
        </div>
    </div>
    <div class="row">
        <h2 class="text-center mt-5"> Mô Tả </h2>
        <p>{{$product->description}}</p>
    </div> 
    @if($relatedProduct->count() > 0)
    <div class="row">
        <h2 class="text-center mt-5"> Các Sản Phẩm Liên Quan</h2>
    </div>
    
    <div class="row">
    @foreach($relatedProduct as $rlp)
        
        <div class="col-3" >
        <a href="{{ route('product.show', $rlp->id) }}">
        <div class="card" style="width: 18rem;">
        <img src="{{ asset($rlp->image_url) }}" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">{{$rlp->product_name}}</h5>
        <p class="card-text">{{$rlp->description}}</p>
        <h5>{{$rlp->price}}</h5>
        <a href="#" class="btn btn-primary">Add to card</a>
        </div>
        </div>
        </a>
        </div>
        @endforeach 
    </div>
     
    @else
    <p>Không có sản phẩm liên quan nào.</p>
    @endif

    
    </div>
</div>
@endsection