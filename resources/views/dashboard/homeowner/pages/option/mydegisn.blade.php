@extends('dashboard.homeowner.layouts.app')

@section('content')

<div class="container mt-5">
    <!-- Design Management Title -->
    <h2 class="text-center mb-4">Quản lý Thiết Kế</h2>

    <!-- Saved Designs Section -->
    <div class="row">
        <!-- Saved Design 1 -->
        <div class="row justify-content-between align-items-center border p-3 mb-3">
            <!-- Product Image -->
            <div class="col-md-3 d-flex align-items-center">
                <div>
                    <img src="https://via.placeholder.com/300x200" alt="Thiết kế 1" class="img-fluid" style="max-width: 150px;">
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-md-6">
                <h3 class="mb-1">Thiết Kế 1</h3>
                <p class="text-muted mb-2">Ngày lưu: 01/09/2024</p>
                <p class="mb-2">Mô tả ngắn gọn của thiết kế 1.</p>
                <p class="text-muted mb-2">Trạng thái: <span class="badge bg-success">Hoàn thành</span></p>
            </div>

            <!-- Edit Button -->
            <div class="col-md-3 d-flex justify-content-end align-items-center">
                <div class="d-flex align-items-center">
                    <a href="#" class="btn btn-dark">Chỉnh sửa</a>
                </div>
            </div>
        </div>
        <!-- Saved Design 1 -->
        <div class="row justify-content-between align-items-center border p-3 mb-3">
            <!-- Product Image -->
            <div class="col-md-3 d-flex align-items-center">
                <div>
                    <img src="https://via.placeholder.com/300x200" alt="Thiết kế 1" class="img-fluid" style="max-width: 150px;">
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-md-6">
                <h3 class="mb-1">Thiết Kế 1</h3>
                <p class="text-muted mb-2">Ngày lưu: 01/09/2024</p>
                <p class="mb-2">Mô tả ngắn gọn của thiết kế 1.</p>
                <p class="text-muted mb-2">Trạng thái: <span class="badge bg-success">Hoàn thành</span></p>
            </div>

            <!-- Edit Button -->
            <div class="col-md-3 d-flex justify-content-end align-items-center">
                <div class="d-flex align-items-center">
                    <a href="#" class="btn btn-dark">Chỉnh sửa</a>
                </div>
            </div>
        </div>
        <!-- Saved Design 1 -->
        <div class="row justify-content-between align-items-center border p-3 mb-3">
            <!-- Product Image -->
            <div class="col-md-3 d-flex align-items-center">
                <div>
                    <img src="https://via.placeholder.com/300x200" alt="Thiết kế 1" class="img-fluid" style="max-width: 150px;">
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-md-6">
                <h3 class="mb-1">Thiết Kế 1</h3>
                <p class="text-muted mb-2">Ngày lưu: 01/09/2024</p>
                <p class="mb-2">Mô tả ngắn gọn của thiết kế 1.</p>
                <p class="text-muted mb-2">Trạng thái: <span class="badge bg-success">Hoàn thành</span></p>
            </div>

            <!-- Edit Button -->
            <div class="col-md-3 d-flex justify-content-end align-items-center">
                <div class="d-flex align-items-center">
                    <a href="#" class="btn btn-dark">Chỉnh sửa</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Features Section -->
    <div class="row">
        <div class="col-md-12 text-center">
            <a href="#" class="btn btn-dark me-3">Thêm Thiết Kế Mới</a>
            <a href="#" class="btn btn-secondary">Xem Thiết Kế Lưu Trữ</a>
        </div>
    </div>

    <!-- Search and Filter Section -->
    <div class="row mt-4">
        <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Tìm kiếm thiết kế theo tên...">
        </div>
        <div class="col-md-6">
            <select class="form-select">
                <option value="">Lọc theo trạng thái</option>
                <option value="completed">Hoàn thành</option>
                <option value="editing">Đang chỉnh sửa</option>
            </select>
        </div>
    </div>
</div>

@endsection