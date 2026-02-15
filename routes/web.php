<?php

use Illuminate\Support\Facades\Route;

//
// Auth Controller
//
use App\Http\Controllers\Accounts\RegisterController;
use App\Http\Controllers\Accounts\ProfileController;
use App\Http\Controllers\Accounts\LoginController;

//
// Admin
//
use App\Http\Controllers\Accounts\admin\AdminController;

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

});

Route::prefix("profile")->as('profile.')->group(function () {
    //
    // профиль админа
    //
    // главная страница админа
    Route::get('/admin', [ProfileController::class, 'profile_admin'])->name('admin_profile');
    // страница всех пользователей
    Route::get('/admin/students', [AdminController::class, 'show_all_students'])->name('show_all_students');
    // страница добавление студента
    Route::get('/admin/add_students', [AdminController::class, 'add_students'])->name('add_students');
    Route::post('/admin/add_students', [AdminController::class, 'add_students_to_bd'])->name('add_stud_bd');


    //
    // для шаблонов админа
    //
    Route::get('/admin/menu', [AdminController::class, 'menu'])->name('menu_admin');

});
