<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController;
use Illuminate\Support\Facades\Route;

/* Web Routes */
Route::view('/home', 'welcome')->name('home');

Route::middleware('guest')->group(function () {
    Route::view('/', 'admin.pages.login')->name('login');
    Route::post('/auth-check', [AuthController::class, 'authCheck'])->name('auth.check');
});

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    //Education route
    Route::get('/index-education', [EducationController::class, 'index'])->name('admin.education.index');
    Route::get('/show-education', [EducationController::class, 'show'])->name('admin.education.show');
    Route::post('/store-education', [EducationController::class, 'store'])->name('admin.education.store');
    Route::get('/delete-education/{id}', [EducationController::class, 'destroy'])->name('admin.education.delete');

    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
});