<?php

namespace App\Http\Controllers\accounts;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{

    public function register() {
        return view('accounts.register');
    }

}
