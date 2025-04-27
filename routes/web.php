<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route ke halaman profile (dengan parameter opsional)
Route::get('/profile/{nama?}/{kelas?}/{npm?}', [ProfileController::class, 'profile']);

// Route ke halaman profile biasa
Route::get('/profile', function () {
    return view('profile');
});

// USER ROUTE
Route::get('/user', [UserController::class, 'index'])->name('users.index');
Route::get('/user/create', [UserController::class, 'create'])->name('users.create');
Route::post('/user/store', [UserController::class, 'store'])->name('users.store');
Route::get('/user/{id}', [UserController::class, 'show'])->name('users.show');