<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\DesignerProfileController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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
Route::middleware(['auth', 'role:InteriorDesigner'])->group(function() {
    Route::post('/dashboard/designer/{id}/consultation/accept', [ConsultationController::class, 'accept'])->name('designer.consultations.accept');
    Route::post('/dashboard/designer/{id}/consultation/reject', [ConsultationController::class, 'reject'])->name('designer.consultations.reject');
    Route::post('/dashboard/designer/{id}/consultation/complete', [ConsultationController::class, 'complete'])->name('designer.consultations.complete');

});
//check role admin thi moi vao duoc
Route::middleware(['auth', 'role:Admin'])->group(function() {
    Route::get('/admin', [UserController::class, 'view'])->name('dashboard.admin');
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/users/{id}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');
    Route::put('/admin/users/{id}/restore', [UserController::class, 'restore'])->name('admin.users.restore');
});



// check giao diẹn info
Route::view('/contact', 'dashboard.homeowner.pages.info.contact');
Route::view('/about', 'dashboard.homeowner.pages.info.about');


// check giao diẹn room
Route::view('/living-room', 'dashboard.homeowner.pages.categories.livingroom');
Route::view('/bed-room', 'dashboard.homeowner.pages.categories.bedroom');
Route::view('/kitchen', 'dashboard.homeowner.pages.categories.kitchen');
Route::view('/bath-room', 'dashboard.homeowner.pages.categories.bathroom');
Route::view('/office', 'dashboard.homeowner.pages.categories.office');
Route::view('/outdoor', 'dashboard.homeowner.pages.categories.outdoor');


// check giao diẹn room
Route::view('/furniture', 'dashboard.homeowner.pages.themesstyles.furniture');
Route::view('/lighting', 'dashboard.homeowner.pages.themesstyles.lighting');
Route::view('/decor', 'dashboard.homeowner.pages.themesstyles.decor');
Route::view('/rugs-carpets', 'dashboard.homeowner.pages.themesstyles.rugs-carpets');
Route::view('/art', 'dashboard.homeowner.pages.themesstyles.art');
Route::view('/curtains-blinds', 'dashboard.homeowner.pages.themesstyles.curtains-blinds');


// option
Route::view('/my-degisn', 'dashboard.homeowner.pages.option.mydegisn');
Route::view('/recent-activities', 'dashboard.homeowner.pages.option.recentactivities');
Route::view('/notifications', 'dashboard.homeowner.pages.option.notifications');


// use
Route::view('/shopping-cart', 'dashboard.homeowner.pages.use.shoppingcart');

require __DIR__.'/auth.php';
