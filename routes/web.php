<?php

use Illuminate\Support\Facades\Route;

//=======================
// Authentication
//=======================
Route::get('/', function () {
    return view('authentication/login');
});

Route::get('/register_student', function() {
    return view('authentication/register_student');
});
//=======================
// End Authentication
//=======================