<?php

use Illuminate\Support\Facades\Route;

// 
// RegisterController
//
use App\Http\Controllers\accounts\RegisterController;

//================================
// вход
//================================
Route::get('/', function () {
    return view('accounts.login');
});

//==========================================
// регистрация
//==========================================
Route::get('/register', [RegisterController::class, 'register'])->middleware('guest')->name('register');

