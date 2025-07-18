<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home.home');
})->name('home');

Route::middleware(['auth', 'is_admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('products', ProductController::class)->except(['show']);
    Route::get('/bookings', [BookingController::class, 'index'])->name('admin.bookings');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/booking/{product}', [BookingController::class, 'store'])->name('bookings.store');
    Route::get('/cart', [BookingController::class, 'cart'])->name('cart.index');
    Route::post('/checkout', [BookingController::class, 'checkout'])->name('cart.checkout');
    Route::delete('/cart/{cart}', [BookingController::class, 'destroy'])->name('cart.destroy');
    Route::put('/cart/{cart}', [BookingController::class, 'update'])->name('cart.update');
});


Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::post('/sesi/logout', [SessionController::class, 'logout'])->name('logout');
Route::get('/sesi/register', [SessionController::class, 'register'])->name('login');
Route::post('/sesi/create', [SessionController::class, 'create']);

Route::get('/product', [ProductController::class, 'showAll'])->name('products.list');
Route::get('/product/{id}', [ProductController::class, 'showDetail'])->name('product.detail');


Route::get('/login_failed', function () {
    return view('sesi.login_failed');
});
Route::get('/kelola_produk', function () {
    return view('admin/products/manage');
});

Route::get('/pelanggan', function () {
    return view('admin/pelanggan');
});
Route::get('/admin', function () {
    return view('admin/admin');
});
