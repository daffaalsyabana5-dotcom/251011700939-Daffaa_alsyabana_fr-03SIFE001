<?php

use App\Http\Controllers\WebController;

Route::get('/', [WebController::class, 'home'])->name('home');
Route::get('/produk', [WebController::class, 'products'])->name('products');
Route::get('/tentang', [WebController::class, 'about'])->name('about');
Route::get('/kontak', [WebController::class, 'contact'])->name('contact');
Route::get('/produk/{id}', [WebController::class, 'show'])->name('snack.show');
