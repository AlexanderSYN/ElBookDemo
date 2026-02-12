<?php

use Illuminate\Support\Facades\Route;

//
// RegisterController
//
use App\Http\Controllers\Accounts\RegisterController;
use App\Http\Controllers\Accounts\ProfileController;
use App\Http\Controllers\Accounts\LoginController;

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
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'log_in']);

    //==========================================
    // регистрация
    //==========================================
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
});

Route::prefix("profile")->as('profile.')->group(function () {
    //
    // профиль админа
    //
    Route::get('/admin', [ProfileController::class, 'profile_admin'])->name('admin_profile');
});
