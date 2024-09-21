@extends('dashboard.homeowner.layouts.app')

@section('content')

<div class="container mt-5">
    <!-- Title for Notifications -->
    <h2 class="mb-4 text-center">Notifications</h2>

    <style>
        .alert img {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
    </style>

    <!-- Design Inspiration Alert -->
    <div class="alert alert-primary d-flex align-items-center" role="alert">
        <div class="me-3">
            <img src="https://i.pinimg.com/736x/84/ed/e6/84ede6821b32ec99aff56f898c4097b6.jpg" class="rounded img-fluid" alt="Image">
        </div>
        <div class="flex-grow-1">
            <h5 class="alert-heading">Discover New Ideas for a Modern Living Room</h5>
            <p>New interior design inspirations have just been updated! Explore the latest styles for your living room.</p>
            <a href="#" class="btn btn-primary">View Details</a>
        </div>
    </div>

    <!-- Product Update Alert -->
    <div class="alert alert-warning d-flex align-items-center" role="alert">
        <div class="me-3">
            <img src="https://i.pinimg.com/474x/8f/b8/50/8fb8506d2f9cbed7517b49d898427438.jpg" class="rounded img-fluid" alt="Product Image">
        </div>
        <div class="flex-grow-1">
            <h5 class="alert-heading">New Product: Classic Style Dining Table</h5>
            <p>The classic style dining table has just been added to the catalog! Don't miss out on up to 50% discount.</p>
            <a href="#" class="btn btn-warning">View Details</a>
            <a href="#" class="btn btn-success">Buy Now</a>
        </div>
    </div>

    <!-- Consultation Reminder Alert -->
    <div class="alert alert-info d-flex align-items-center" role="alert">
        <div class="me-3">
            <img src="https://i.pinimg.com/736x/d9/60/c8/d960c8e1863a618902d0f9dd4d284cf8.jpg" class="rounded img-fluid" alt="Consultation Image">
        </div>
        <div class="flex-grow-1">
            <h5 class="alert-heading">Consultation Reminder with Expert Nguyen Anh</h5>
            <p>Your consultation for the living room design is scheduled at 10 AM on 20/09/2024.</p>
            <a href="#" class="btn btn-info">View Appointment Details</a>
            <a href="#" class="btn btn-danger">Cancel Appointment</a>
        </div>
    </div>

    <!-- System Maintenance Alert -->
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <div class="me-3">
            <img src="https://i.pinimg.com/736x/de/f1/96/def19672c8fb1f1e6868f13ebb00f19f.jpg" class="rounded img-fluid" alt="Maintenance Image">
        </div>
        <div class="flex-grow-1">
            <h5 class="alert-heading">System Maintenance Notification</h5>
            <p>The system will undergo maintenance at 10:00 PM on 25/09/2024. Please save your work to avoid data loss.</p>
            <a href="#" class="btn btn-danger">View Details</a>
        </div>
    </div>

    <!-- VIP Member Special Promotion -->
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <div class="me-3">
            <img src="https://as2.ftcdn.net/v2/jpg/05/58/26/63/1000_F_558266351_svApnMUNYgfh7egRyEHUWFjhrs0i2hav.jpg" class="rounded img-fluid" alt="VIP Promotion Image">
        </div>
        <div class="flex-grow-1">
            <h5 class="alert-heading">Special Promotion for VIP Members</h5>
            <p>Enjoy a 30% discount on all furniture products by becoming our VIP member.</p>
            <a href="#" class="btn btn-success">Upgrade Now</a>
        </div>
    </div>

    <!-- New Feature Update Notification -->
    <div class="alert alert-secondary d-flex align-items-center" role="alert">
        <div class="me-3">
            <img src="https://i.pinimg.com/564x/11/a1/57/11a157642f669f2667b85d5f9754c732.jpg" class="rounded img-fluid" alt="New Feature Image">
        </div>
        <div class="flex-grow-1">
            <h5 class="alert-heading">New Feature: Customize Furniture Colors</h5>
            <p>We have just launched a new feature that allows you to customize furniture colors directly on the website. Try it now to create your unique style!</p>
            <a href="#" class="btn btn-secondary">Explore New Feature</a>
        </div>
    </div>
</div>

@endsection
