<?php

use App\Http\Controllers\DesignerProfileController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::put('/update-profile', [DesignerProfileController::class, 'update'])->middleware(['auth', 'verified'])->name('update.profile');
Route::get('/dashboard/designer/{id}', [DesignerProfileController::class, 'show'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard.designer');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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