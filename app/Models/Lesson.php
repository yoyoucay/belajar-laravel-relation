<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
  public function users()
  {
      return  $this->belongsToMany('App\Models\User')->withTimeStamps()
                    ->withPivot('data')->wherePivot('data', 'hmm');
  }

  public function likes()
  {
      return  $this->morphMany('App\Models\Like', 'likeable');
  }

  public function tags()
  {
      return  $this->morphToMany('App\Models\Tag', 'taggable');
  }
}
