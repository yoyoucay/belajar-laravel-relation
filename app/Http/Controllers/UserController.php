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

    public function createForum()
    {
      // $forum = new Forum([
      //   'title' => 'Test Forum New',
      //   'body' => 'Body test forum new'
      // ]);

      $user = User::find('2');

      // $user->forums()->save($forum);
      $user->forums()->create([
          'title' => 'Test Forum terbaru',
          'body' => 'Body test forum terbaru'
      ]);
    }

    public function updateForum(){
      $forum = Forum::find(2);
      $user = User::find(1);

      $forum->user()->associate($user);
      $forum->save();
    }

    public function deleteForum(){
      $forum = Forum::find(2);

      $forum->user()->dissociate();
      $forum->save();
    }

    // many to many
    public function createLesson(){
      $user = User::find(2);
      $user->lessons()->attach(2);
    }

    public function deleteLesson(){
      $user = User::find(2);
      $user->lessons()->detach(2);
    }

    public function updateLesson(){
      $user = User::find(2);
      $attribute = [
        'data' => 'coto'
      ];

      $user->lessons()->updateExistingPivot(2, $attribute);
    }

    // Sync
    public function syncLesson(){
      $user = User::find(1);
      $list = [1,2];
      $user->lessons()->sync($list);
    }
}
