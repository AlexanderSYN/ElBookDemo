<?php

namespace App\Http\Controllers\Accounts;

class ProfileController
{
    // переход на страницу профиля
    public function profile_admin() {
        return view('accounts.profile.admin.profile_admin');
    }

    public function menu()
    {
        return view('accounts.profile.admin.frames_for_profile_admin.menu');
    }
}
