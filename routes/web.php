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

// check giao diẹn
Route::view('/contact', 'dashboard.homeowner.pages.contact')->name('contact');



require __DIR__.'/auth.php';