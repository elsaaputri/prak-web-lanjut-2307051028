<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/profile/{nama?}/{kelas?}/{npm?}', [ProfileController::class, 'profile']);

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/user/create', [UserController::class, 'create'])->name('user_create');

Route::post('/user/store', [UserController::class, 'store'])->name('user.store');