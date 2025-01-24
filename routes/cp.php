<?php

use App\Http\Controllers\Cp\HomeController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->name('cp.')->prefix('cp')->group(function () {
    Route::get('/', HomeController::class)->name('home');
});