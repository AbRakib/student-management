<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


/* Web Routes */
Route::view('/home', 'welcome')->name('home');

Route::middleware('guest')->group(function () {
    Route::view('/', 'admin.pages.login')->name('login');
    Route::post('/auth-check', [AuthController::class, 'authCheck'])->name('auth.check');
});

Route::middleware('auth')->prefix('admin')->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
});