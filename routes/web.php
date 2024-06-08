<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('service.dimephar');
})->name('dimephar');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('service.dimephar');
    });
});

Route::get('/products/{product}', [ProductController::class, 'show'])->name('product.show');
Route::post('/cart/add/{product}', [CartController::class, 'addToCart'])->name('cart.add');
