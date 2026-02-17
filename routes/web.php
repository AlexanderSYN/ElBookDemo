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
    Route::prefix("admin")->as('admin.')->group(function() {
        //===========================================
        // профиль админа
        //===========================================
        // главная страница админа
        Route::get('/', [ProfileController::class, 'profile_admin'])->name('admin_profile');
        // страница всех пользователей
        Route::get('/students', [AdminController::class, 'show_all_students'])->name('show_all_students');
        // страница просмотра полной информации о студенте
        Route::get('/students/{id}', [AdminController::class, 'show_about_student'])->name('show_about_student')->whereNumber('id');

        // страница добавление студента
        Route::get('/add_students', [AdminController::class, 'add_students'])->name('add_students');
        Route::post('/add_students', [AdminController::class, 'add_students_to_bd'])->name('add_stud_bd');

        // страница изменение студента
        Route::get('/edit_students/{id}', [AdminController::class, 'redirect_to_edit_student'])->name('redirect_to_edit_student')->whereNumber('id');

        //
        // для шаблонов админа
        //
        Route::get('/menu', [AdminController::class, 'menu'])->name('menu_admin');
    });


    

});
