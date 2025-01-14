<?php

use App\Http\Controllers\AlatTulisController;
use App\Http\Controllers\DetailPembelianController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('register');
});

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::resource('user', UserController::class);
Route::resource('detailpembelian', DetailPembelianController::class);
Route::resource('alattulis', AlatTulisController::class);
Route::resource('pembelian', PembelianController::class);
