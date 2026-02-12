<?php

namespace App\Http\Controllers\Accounts;

class ProfileController
{
    // переход на страницу профиля
    public function profile_admin() {
        return view('accounts.profile.admin.profile_admin');
    }
}
