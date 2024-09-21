<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\DesignerProfileController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/productdetail', function () {
    return view('dashboard.homeowner.pages.productdetail');
});

Route::get('/projectdetail', function () {
    return view('dashboard.homeowner.pages.projectdetail');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('', function () {
    return view('dashboard.homeowner');
})->name('welcome');

Route::put('/update-profile', [DesignerProfileController::class, 'update'])->middleware(['auth', 'verified'])->name('update.profile');
Route::get('/dashboard/designer/{id}', [DesignerProfileController::class, 'show'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard.designer');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth', 'role:InteriorDesigner'])->group(function () {
    Route::post('/dashboard/designer/{id}/consultation/accept', [ConsultationController::class, 'accept'])->name('designer.consultations.accept');
    Route::post('/dashboard/designer/{id}/consultation/reject', [ConsultationController::class, 'reject'])->name('designer.consultations.reject');
    Route::post('/dashboard/designer/{id}/consultation/complete', [ConsultationController::class, 'complete'])->name('designer.consultations.complete');

});


Route::get('/consultation/create/{designer_id}', [ConsultationController::class, 'create'])->name('consultation.create');
Route::post('/consultation/store', [ConsultationController::class, 'store'])->name('consultation.store');
Route::get('/schedule', [\App\Http\Controllers\UserController::class, 'view'])->name('schedule.view');
Route::post('/user/{id}/consultation/reject', [\App\Http\Controllers\UserController::class, 'cancel'])->name('user.consultations.cancel');


//check role admin thi moi vao duoc
Route::middleware(['auth', 'role:Admin'])->group(function() {
    Route::get('/admin', [UserController::class, 'view'])->name('dashboard.admin');
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/users/{id}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');
    Route::put('/admin/users/{id}/restore', [UserController::class, 'restore'])->name('admin.users.restore');
    Route::resource('admin/products', \App\Http\Controllers\Admin\ProductController::class);
});



// check giao diẹn info
Route::view('/contact', 'dashboard.homeowner.pages.info.contact');
Route::view('/about', 'dashboard.homeowner.pages.info.about');
Route::get('/list/designer', [\App\Http\Controllers\UserController::class, 'show'])->name('designer.show');

// check giao diẹn room
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/filter', [ProductController::class, 'filter'])->name('products.filter');


// check giao diẹn room
Route::view('/furniture', 'dashboard.homeowner.pages.themesstyles.furniture');
Route::view('/lighting', 'dashboard.homeowner.pages.themesstyles.lighting');
Route::view('/decor', 'dashboard.homeowner.pages.themesstyles.decor');
Route::view('/rugs-carpets', 'dashboard.homeowner.pages.themesstyles.rugs-carpets');
Route::view('/art', 'dashboard.homeowner.pages.themesstyles.art');
Route::view('/curtains-blinds', 'dashboard.homeowner.pages.themesstyles.curtains-blinds');

Route::get('/product/{id}' , [ProductController::class , 'show'])->name('product.show');

// option
Route::view('/my-degisn', 'dashboard.homeowner.pages.option.mydegisn');
Route::view('/recent-activities', 'dashboard.homeowner.pages.option.recentactivities');
Route::view('/notifications', 'dashboard.homeowner.pages.option.notifications');

// info
Route::view('/blog', 'dashboard.homeowner.pages.info.blog');
Route::view('/team', 'dashboard.homeowner.pages.info.team');

// use
Route::view('/shopping-cart', 'dashboard.homeowner.pages.use.shoppingcart');

// gio hang
Route::get('/shopping-cart', [CartController::class, 'showCart'])->name('cart.show');


Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/cart/update/{id}', [CartController::class, 'updateQuantity'])->name('cart.update');
Route::patch('/cart/update/{id}', [CartController::class, 'updateQuantity'])->name('cart.update');
Route::patch('/cart/update/{id}', [CartController::class, 'updateQuantity'])->name('cart.updateQuantity');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');





require __DIR__ . '/auth.php';
