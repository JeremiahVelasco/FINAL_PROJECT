<?php

use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.index');
})->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/auth/google/', [GoogleAuthController::class, 'redirect'])
    ->name('google-auth');

Route::get('/auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);

require __DIR__.'/auth.php';

Route::get('/products', [ProductController::class, 'index'])
    ->name('products');