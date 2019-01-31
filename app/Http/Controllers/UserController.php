<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Passport;
use App\Models\Lesson;
use App\Models\Forum;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function showProfile($id)
    {
        // $user = User::with(['forums' => function($query){
        //   $query->where('title', 'like', '%m%');
        // }
        //
        // ])->where('id', $id)->first();

        $user = User::with('forums.tags', 'lessons')->where('id', $id)->first();
        return view('user.profile', ['user' => $user]);
    }

    public function showPassport($id)
    {
        return view('user.passport', ['passport' => passport::findOrFail($id)]);
    }

    public function showLesson($id)
    {
        return view('user.lesson', ['lesson' => lesson::findOrFail($id)]);
    }

    public function showForum($id)
    {
        return view('user.forum', ['forum' => forum::findOrFail($id)]);
    }
}
