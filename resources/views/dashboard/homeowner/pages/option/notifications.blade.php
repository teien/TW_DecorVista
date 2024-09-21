@extends('dashboard.homeowner.layouts.app')

@section('content')

<div class="container mt-5">
    <!-- Cảnh báo về cảm hứng thiết kế mới -->
    <div class="alert alert-primary d-flex align-items-center" role="alert">
        <div class="me-3">
            <img src="https://via.placeholder.com/100" class="rounded img-fluid" alt="Image">
        </div>
        <div class="flex-grow-1">
            <h5 class="alert-heading">Khám phá ý tưởng mới cho phòng khách hiện đại</h5>
            <p>Cảm hứng thiết kế nội thất mới vừa được cập nhật! Khám phá những phong cách mới nhất dành cho phòng khách của bạn.</p>
            <a href="#" class="btn btn-primary">Xem chi tiết</a>
        </div>
    </div>

    <!-- Cập nhật sản phẩm -->
    <div class="alert alert-warning d-flex align-items-center" role="alert">
        <div class="me-3">
            <img src="https://via.placeholder.com/100" class="rounded img-fluid" alt="Product Image">
        </div>
        <div class="flex-grow-1">
            <h5 class="alert-heading">Sản phẩm mới: Bàn ăn phong cách cổ điển</h5>
            <p>Bàn ăn phong cách cổ điển vừa được thêm vào danh mục! Đừng bỏ lỡ chương trình giảm giá lên tới 50%.</p>
            <a href="#" class="btn btn-warning">Xem chi tiết</a>
            <a href="#" class="btn btn-success">Mua ngay</a>
        </div>
    </div>

    <!-- Nhắc nhở tư vấn -->
    <div class="alert alert-info d-flex align-items-center" role="alert">
        <div class="me-3">
            <img src="https://via.placeholder.com/100" class="rounded img-fluid" alt="Consultation Image">
        </div>
        <div class="flex-grow-1">
            <h5 class="alert-heading">Nhắc nhở tư vấn với chuyên gia Nguyễn Anh</h5>
            <p>Cuộc tư vấn về thiết kế phòng khách của bạn sẽ diễn ra vào 10h sáng ngày 20/09/2024.</p>
            <a href="#" class="btn btn-info">Xem chi tiết cuộc hẹn</a>
            <a href="#" class="btn btn-danger">Hủy cuộc hẹn</a>
        </div>
    </div>
</div>

@endsection