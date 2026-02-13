<?php

namespace App\Http\Controllers\Accounts;

use App\Http\Controllers\Accounts\helper\Helper_register;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Exception;

class LoginController extends Controller
{
    // переход на страницу регистрации
    public function login() {
        return view('accounts.login');
    }

    // регистрация
    public function log_in(Request $request) {

        $credentials = $request->validate([
            'login' => 'required|string',
            'password' => 'required|string'
        ]);

        if (!Auth::attempt($credentials)) {
            return redirect()->route('accounts.login')
                ->withInput()->withErrors("Логин или пароль неверный");
        } else {
            return redirect()->route('profile.admin_profile');
        }

    }
}
