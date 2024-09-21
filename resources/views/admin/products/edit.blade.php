@extends('adminlte::page')

@section('title', 'Chỉnh sửa sản phẩm')

@section('content_header')
    <h1>Chỉnh sửa sản phẩm</h1>
@stop

@section('content')
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="product_name">Tên sản phẩm</label>
            <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $product->product_name }}" required>
        </div>

        <div class="form-group">
            <label for="category">Thể loại</label>
            <input type="text" class="form-control" id="category" name="category" value="{{ $product->category }}" required>
        </div>

        <div class="form-group">
            <label for="brand">Thương hiệu</label>
            <input type="text" class="form-control" id="brand" name="brand" value="{{ $product->brand }}" required>
        </div>

        <div class="form-group">
            <label for="price">Giá</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="description">Mô tả</label>
            <textarea class="form-control" id="description" name="description">{{ $product->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="image_url">URL hình ảnh</label>
            <input type="text" class="form-control" id="image_url" name="image_url" value="{{ $product->image_url }}">
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
@stop
