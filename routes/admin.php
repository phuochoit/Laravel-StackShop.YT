<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::match(['get', 'post'], 'login', [AdminDashboardController::class, 'login'])->name('login');

    Route::middleware(['admin'])->group(function () {
        Route::get('/', [AdminDashboardController::class, 'index']);
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

        Route::get('logout', [AdminDashboardController::class, 'logout'])->name('logout');
    });
});
