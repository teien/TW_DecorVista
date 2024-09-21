<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\DesignerProfileController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

// Trang chính
Route::get('/', function () {
    return view('welcome');
});

// Các trang chi tiết
Route::get('/productdetail', function () {
    return view('dashboard.homeowner.pages.productdetail');
});
Route::get('/projectdetail', function () {
    return view('dashboard.homeowner.pages.projectdetail');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes cho người dùng đã xác thực
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Giỏ hàng
    Route::get('/shopping-cart', [CartController::class, 'showCart'])->name('cart.show');
    Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    Route::patch('/cart/update/{id}', [CartController::class, 'updateQuantity'])->name('cart.update');
    Route::post('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');
});

// Routes cho quản trị viên
Route::middleware(['auth', 'role:Admin'])->group(function() {
    Route::get('/admin', [UserController::class, 'view'])->name('dashboard.admin');
    Route::resource('admin/users', UserController::class);
    Route::resource('admin/products', \App\Http\Controllers\Admin\ProductController::class);
});

// Routes cho nhà thiết kế
Route::middleware(['auth', 'role:InteriorDesigner'])->group(function () {
    Route::post('/dashboard/designer/{id}/consultation/accept', [ConsultationController::class, 'accept'])->name('designer.consultations.accept');
    Route::post('/dashboard/designer/{id}/consultation/reject', [ConsultationController::class, 'reject'])->name('designer.consultations.reject');
    Route::post('/dashboard/designer/{id}/consultation/complete', [ConsultationController::class, 'complete'])->name('designer.consultations.complete');
});

// Routes cho tư vấn
Route::get('/consultation/create/{designer_id}', [ConsultationController::class, 'create'])->name('consultation.create');
Route::post('/consultation/store', [ConsultationController::class, 'store'])->name('consultation.store');
Route::get('/schedule', [UserController::class, 'view'])->name('schedule.view');
Route::post('/user/{id}/consultation/reject', [UserController::class, 'cancel'])->name('user.consultations.cancel');

// Routes cho sản phẩm
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/filter', [ProductController::class, 'filter'])->name('products.filter');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

// Các trang tĩnh
Route::view('/contact', 'dashboard.homeowner.pages.info.contact');
Route::view('/about', 'dashboard.homeowner.pages.info.about');
Route::view('/blog', 'dashboard.homeowner.pages.info.blog');
Route::view('/team', 'dashboard.homeowner.pages.info.team');
Route::view('/furniture', 'dashboard.homeowner.pages.themesstyles.furniture');
Route::view('/lighting', 'dashboard.homeowner.pages.themesstyles.lighting');
Route::view('/decor', 'dashboard.homeowner.pages.themesstyles.decor');
Route::view('/rugs-carpets', 'dashboard.homeowner.pages.themesstyles.rugs-carpets');
Route::view('/art', 'dashboard.homeowner.pages.themesstyles.art');
Route::view('/curtains-blinds', 'dashboard.homeowner.pages.themesstyles.curtains-blinds');
Route::view('/my-degisn', 'dashboard.homeowner.pages.option.mydegisn');
Route::view('/recent-activities', 'dashboard.homeowner.pages.option.recentactivities');
Route::view('/notifications', 'dashboard.homeowner.pages.option.notifications');

// Tải file xác thực
require __DIR__ . '/auth.php';
