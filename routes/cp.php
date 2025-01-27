<?php

declare(strict_types=1);

use App\Http\Controllers\Cp\CategoryController;
use App\Http\Controllers\Cp\HomeController;
use App\Http\Controllers\Cp\MenuController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->name('cp.')->prefix('cp')->group(function () {
    Route::get('/', HomeController::class)->name('home');

    // Categories Routes
    Route::resource('category', CategoryController::class)->except('show');

    // Menus Routes
    Route::resource('menu', MenuController::class)->except('show');
});