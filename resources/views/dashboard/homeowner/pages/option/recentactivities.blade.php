@extends('dashboard.homeowner.layouts.app')

@section('content')

<div class="container my-5">
    <!-- Hoạt động gần đây -->
    <div class="mb-5">
        <h2 class="mb-3">Hoạt động gần đây</h2>
        <div class="row justify-content-between align-items-center border p-3 mb-3">
            <!-- Activity Icon -->
            <div class="col-md-1">
                <i class="bi bi-pencil-square fs-1 text-primary"></i>
            </div>
            <!-- Activity Details -->
            <div class="col-md-9">
                <p class="mb-0">Bạn đã chỉnh sửa thiết kế <strong>Phòng khách hiện đại</strong> vào ngày 15/09/2024.</p>
            </div>
            <!-- View Button -->
            <div class="col-md-2 text-end">
                <a href="#" class="btn btn-outline-primary">Xem chi tiết</a>
            </div>
        </div>
        <!-- Another Activity -->
        <div class="row justify-content-between align-items-center border p-3 mb-3">
            <div class="col-md-1">
                <i class="bi bi-heart-fill fs-1 text-danger"></i>
            </div>
            <div class="col-md-9">
                <p class="mb-0">Bạn đã lưu thiết kế <strong>Phòng ngủ phong cách hiện đại</strong> vào ngày 14/09/2024.</p>
            </div>
            <div class="col-md-2 text-end">
                <a href="#" class="btn btn-outline-primary">Xem chi tiết</a>
            </div>
        </div>
    </div>

    <!-- Các mục đã lưu -->
    <div class="mb-5">
        <h2 class="mb-3">Các mục đã lưu</h2>
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
                <a href="#" class="btn btn-dark">Chỉnh sửa</a>
            </div>
        </div>
        <!-- Saved Design 2 -->
        <div class="row justify-content-between align-items-center border p-3 mb-3">
            <div class="col-md-3 d-flex align-items-center">
                <div>
                    <img src="https://via.placeholder.com/300x200" alt="Thiết kế 2" class="img-fluid" style="max-width: 150px;">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="mb-1">Thiết Kế 2</h3>
                <p class="text-muted mb-2">Ngày lưu: 05/09/2024</p>
                <p class="mb-2">Mô tả ngắn gọn của thiết kế 2.</p>
                <p class="text-muted mb-2">Trạng thái: <span class="badge bg-warning">Đang thực hiện</span></p>
            </div>
            <div class="col-md-3 d-flex justify-content-end align-items-center">
                <a href="#" class="btn btn-dark">Chỉnh sửa</a>
            </div>
        </div>
    </div>

    <!-- Các cuộc tham vấn sắp tới -->
    <div class="mb-5">
        <h2 class="mb-3">Các cuộc tham vấn sắp tới</h2>
        <div class="row justify-content-between align-items-center border p-3 mb-3">
            <div class="col-md-8">
                <p class="mb-0">Tham vấn với <strong>Nguyễn Anh</strong> về <strong>Phòng khách phong cách Bắc Âu</strong> vào 10h sáng ngày 20/09/2024.</p>
            </div>
            <div class="col-md-4 text-end">
                <a href="#" class="btn btn-outline-secondary">Chi tiết cuộc hẹn</a>
            </div>
        </div>
    </div>
</div>

@endsection