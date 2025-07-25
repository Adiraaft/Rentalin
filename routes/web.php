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
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('products', ProductController::class)->except(['show']);
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('/bookings', [BookingController::class, 'index'])->name('admin.bookings');
    Route::put('/bookings/{id}/status', [BookingController::class, 'updateStatus'])->name('bookings.updateStatus');
    Route::get('/admin/chart-data', [AdminController::class, 'chartData'])->name('admin.chart.data');
    Route::get('/laporan', [BookingController::class, 'laporanView'])->name('laporan.index');
    Route::get('/laporan/ajax', [BookingController::class, 'laporanAjax'])->name('laporan.ajax');
});

Route::middleware(['auth'])->group(function () {
    // booking cart & manajemen
    Route::post('/booking/{product}', [BookingController::class, 'store'])->name('bookings.store');
    Route::get('/cart', [BookingController::class, 'cart'])->name('cart.index'); // ganti ini!
    Route::delete('/cart/{cart}', [BookingController::class, 'destroy'])->name('cart.destroy');
    Route::put('/cart/{cart}', [BookingController::class, 'update'])->name('cart.update');

    // Midtrans payment
    Route::post('/cart/checkout', [BookingController::class, 'checkout'])->name('cart.checkout');
    Route::get('/cart/success', fn() => view('cart.success'));
    Route::post('/cart/payment-callback', [BookingController::class, 'paymentCallback'])->name('cart.paymentCallback');
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
