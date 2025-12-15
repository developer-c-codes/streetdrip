<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
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

Route::get('/products/addproducts', [ProductController::class, 'index'])->name('product.index');
Route::post('/products/addproducts', [ProductController::class, 'store'])->name('product.store');

Route::get('/products/listproduct', [ProductController::class, 'list'])->name('product.listproduct');

Route::get('/products/{product}/edit/', [ProductController::class, 'edit'])->name('product.edit');

Route::put('/products/{product}', [ProductController::class, 'update'])->name('product.update');

Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('product.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
require __DIR__.'/auth.php';
