<?php

use Illuminate\Support\Facades\Route;

// 
// RegisterController
//
use App\Http\Controllers\accounts\RegisterController;

//================================
// главная страница
//================================
Route::get('/', function () {
    return view('accounts.login');
});




Route::prefix("accounts")->as('accounts.')->group(function() {
    //================================
    // вход
    //================================
    Route::get('/login', function () {return view('accounts.login');});

    //==========================================
    // регистрация
    //==========================================
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register/registered', [RegisterController::class, 'register'])->name('register.registered');
});