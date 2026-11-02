<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/depan', function () {
    return view('dashboard.index')->name('dashboard');
});
Route::get('/kategori',[KategoriController::class, 'index']);
