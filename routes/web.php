<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\GenderController;
use Illuminate\Support\Facades\Route;

/* Web Routes */
Route::view('/', 'admin.pages.login')->name('login');
Route::post('/auth-check', [AuthController::class, 'authCheck'])->name('auth.check');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    //Education route
    Route::get('/index-education', [EducationController::class, 'index'])->name('admin.education.index');
    Route::get('/show-education', [EducationController::class, 'show'])->name('admin.education.show');
    Route::post('/store-education', [EducationController::class, 'store'])->name('admin.education.store');
    Route::get('/delete-education', [EducationController::class, 'destroy'])->name('admin.education.delete');

    //Gender route
    Route::get('/index-gender', [GenderController::class, 'index'])->name('admin.gender.index');
    Route::get('/show-gender', [GenderController::class, 'show'])->name('admin.gender.show');
    Route::post('/store-gender', [GenderController::class, 'store'])->name('admin.gender.store');
    Route::get('/delete-gender', [GenderController::class, 'destroy'])->name('admin.gender.delete');

    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
});