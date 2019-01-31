<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Passport;
use App\Models\Lesson;
use App\Models\City;
use App\Models\Forum;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function showProfile($id)
    {
        //-----Contoh dengan query-----------------
        // $user = User::with(['forums' => function($query){
        //   $query->where('title', 'like', '%m%');
        // }
        //
        // ])->where('id', $id)->first();
        //-----Contoh dengan query-----------------

        //-----Contoh dengan withCount-----------------
        // $forums = User::withCount('forums')->get();
        //
        // //view
        // foreach ($forums as $forum) {
        //   echo $forum->name . ' ' . $forum->forums_count . '<br>';
        // }
        //-----Contoh dengan withCount-----------------

        dd(City::find(1)->forums);
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
