<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;

use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'home'])->name('home'); 


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

Route::get('/frontend/index', [ProductController::class, 'home'])->name('home');

Route::get('/product/{product}', 
    [ProductController::class, 'show']
)->name('product.show');


Route::get('/fronted/cart', [CartController::class, 'index'])->name('frontend.cart'); // view cart blade
Route::post('/fronted/cart/add/{id}', [CartController::class, 'add'])->name('cart.add'); // add product to cart by id
Route::post('/frontend/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/frontend/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/clear-cart', function () {
    session()->forget('cart');
    return 'Cart cleared successfully';
});



require __DIR__.'/auth.php';
