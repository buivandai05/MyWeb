<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KhachHangController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('khach-hang', KhachHangController::class);
