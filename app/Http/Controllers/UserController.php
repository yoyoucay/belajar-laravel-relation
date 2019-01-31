<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Passport;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function showProfile($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }

    public function showPassport($id)
    {
        return view('user.passport', ['passport' => passport::findOrFail($id)]);
    }
}
