<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Halaman homepage
Route::get('/homepage', function () {
    return view('homepage');
});

// Rute untuk halaman order
Route::get('/order', function () {
    return view('order');
})->name('order');

// Rute untuk halaman form pesanan
Route::get('/order/form', function (\Illuminate\Http\Request $request) {
    $product = $request->get('product');
    return view('order-form', ['product' => $product]);
})->name('order.form');

// Rute untuk mengirimkan pesanan
Route::post('/submit-order', [OrderController::class, 'submitOrder'])->name('submit-order');

// Rute untuk halaman konfirmasi
Route::get('/orderacc', [OrderController::class, 'showConfirmation'])->name('orderacc');

