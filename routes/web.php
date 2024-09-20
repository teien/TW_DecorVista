<?php

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

require __DIR__.'/auth.php';
