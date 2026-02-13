<?php

namespace App\Http\Controllers\Accounts\admin;



use Illuminate\Support\Facades\DB;

class AdminController
{
    // переход на страницу профиля
    public function menu()
    {
        return view('accounts.profile.admin.frames_for_profile_admin.menu');
    }

    public function show_all_students()
    {
        $students = DB::table('users')->get();

        return view('accounts.profile.admin.students.show_all_students', ['students' => $students]);
    }
}
