<?php
use App\Http\Controllers\ProfileController;

Route::get('/profile/{nama?}/{kelas?}/{npm?}', [ProfileController::class, 'profile']);
