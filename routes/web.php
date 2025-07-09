<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('home.home');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
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


