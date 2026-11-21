<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FacialProfileController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\AdminController;

// Home
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Registration
Route::get('/register', [AuthController::class, 'showRegister'])
    ->name('register');

Route::post('/register', [AuthController::class, 'register'])
    ->name('register.submit');

// Login
Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.submit');

// Authenticated Routes
Route::middleware('auth')->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');

    // Facial Profile
    Route::get('/facial-profile', [FacialProfileController::class, 'showForm'])
        ->name('facial-profile.create');

    Route::post('/facial-profile', [FacialProfileController::class, 'store'])
        ->name('facial-profile.store');

    // Identity Verification
    Route::get('/verification', [VerificationController::class, 'showForm'])
        ->name('verification.create');

    Route::post('/verification', [VerificationController::class, 'store'])
        ->name('verification.store');

    // Verification History
    Route::get('/verification-history', [VerificationController::class, 'history'])
        ->name('verification.history');

    // Admin Dashboard
    Route::get('/admin', [AdminController::class, 'index'])
        ->name('admin.dashboard');

    // Update Verification Status
    Route::patch('/admin/verification/{verificationRequest}', [AdminController::class, 'updateStatus'])
        ->name('admin.verification.update');

});