<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    /*$category = Category::create([
        'name' => 'برنامه نویسی پایتون python',
        'slug' => 'python-programming',
        'description' => 'Program languages python description'
    ]);
    $article = new Article([
        'user_id' => 1,
        'title' => 'post test 01',
        'status' => Status::SELECTED->value,
        'is_active' => true,
        'image_path' => 'images/hello.png',
        'body' => 'test body',
        'summary' => 'test summary',
        'metadata' => [
            'meta_description' => 'hello meta description',
            'keywords' => 'python, test, php'
        ]
    ]);
    $article->category()->associate($category);
    $article->save();
    dd($article);*/
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/cp.php';