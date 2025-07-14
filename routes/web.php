<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home.home');
});

Route::middleware(['auth', 'is_admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::post('/sesi/logout', [SessionController::class, 'logout'])->name('logout');
Route::get('/sesi/register', [SessionController::class, 'register']);
Route::post('/sesi/create', [SessionController::class, 'create']);

Route::get('/product', function () {
    return view('product.product');
});
Route::get('/detail_product', function () {
    return view('product.detailproduct');
});

Route::get('/cart', function () {
    return view('cart.cart');
});

Route::get('/login_failed', function () {
    return view('sesi.login_failed');
});
Route::get('/tambah_produk', function () {
    return view('admin/products/store');
});
Route::get('/kelola_produk', function () {
    return view('admin/products/manage');
});


