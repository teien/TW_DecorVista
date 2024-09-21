@extends('dashboard.homeowner.layouts.app')

@section('content')
    <h2>Kết quả tìm kiếm cho: "{{ $query }}"</h2>

    @if($products->isEmpty())
        <p>Không tìm thấy sản phẩm nào phù hợp.</p>
    @else
        <ul>
            @foreach($products as $product)
                <li>
                    <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
                </li> 
            @endforeach
        </ul>
    @endif
@endsection
