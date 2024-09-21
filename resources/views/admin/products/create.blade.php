@extends('adminlte::page')

@section('title', 'Thêm mới sản phẩm')

@section('content_header')
    <h1>Thêm mới sản phẩm</h1>
@stop

@section('content')
    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="product_name">Tên sản phẩm</label>
            <input type="text" class="form-control" id="product_name" name="product_name" required>
        </div>

        <div class="form-group">
            <label for="category">Thể loại</label>
            <input type="text" class="form-control" id="category" name="category" required>
        </div>

        <div class="form-group">
            <label for="brand">Thương hiệu</label>
            <input type="text" class="form-control" id="brand" name="brand" required>
        </div>

        <div class="form-group">
            <label for="price">Giá</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="description">Mô tả</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>

        <div class="form-group">
            <label for="image_url">URL hình ảnh</label>
            <input type="text" class="form-control" id="image_url" name="image_url">
        </div>

        <button type="submit" class="btn btn-success">Thêm sản phẩm</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
@stop
