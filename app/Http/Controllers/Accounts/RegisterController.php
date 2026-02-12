<?php

namespace App\Http\Controllers\Accounts;

use App\Http\Controllers\Accounts\helper\Helper_register;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Exception;

class RegisterController extends Controller
{
    // переход на страницу регистрации
    public function register() {
        return view('accounts.register');
    }

    // регистрация
    public function store(Request $req) {

        //===========================================
        // здесь получаем для отдельных переменных
        // фио, из одного input
        // SNP = фио
        //===========================================
        $SNP = $req->SNP;
        $get_full_SNP = explode(" ", $SNP);

        $name = Helper_register::get_current_first_name($get_full_SNP);
        $surname = $get_full_SNP[0];
        $patronymic = Helper_register::get_current_patronymic($get_full_SNP);

        try {
            $user = User::create([
                'isBan' => false,
                'name' => $name,
                'surname' => $surname,
                'patronymic' => $patronymic,
                'email' => $req->email,
                'email_verified_at' => null,
                'number' => $req->number,
                'login' => $req->login,
                'password' => Hash::make($req->password),
                'group' => $req->group,
                'role' => $req->role
            ]);



        } catch (Exception $e) {
            //abort(500);
            echo $e;

        }

        Auth::login($user);
        return view('accounts.profile.admin.profile_admin');

    }
}
