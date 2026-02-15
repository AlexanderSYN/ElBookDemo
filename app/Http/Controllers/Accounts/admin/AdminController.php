<?php

namespace App\Http\Controllers\Accounts\admin;



use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Accounts\helper\Helper_register;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Exception;
use App\Http\Controllers\Accounts\admin\getMessage;

class AdminController
{
    //================================================
    // переход на страницу профиля
    //================================================
    public function menu()
    {
        return view('accounts.profile.admin.frames_for_profile_admin.menu');
    }

    //================================================
    // переход на страницу просмотров всех студентов
    //================================================
    public function show_all_students()
    {
        $students = DB::table('users')->get();

        return view('accounts.profile.admin.students.show_all_students', ['students' => $students]);
    }

    //================================================
    // страница добавление пользователей 
    //================================================
    public function add_students()
    {
        return view('accounts.profile.admin.students.add_students');
    }
    // добавление студента в бд
    public function add_students_to_bd(Request $req) {

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

            return redirect()->route('profile.add_students')->with('msg', 'Студент добавлен!');

        } catch (Exception $e) {
            //abort(500);
            
            echo $e;
        
        }


    }
}
