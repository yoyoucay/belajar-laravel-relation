<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
  protected $fillable = ['title', 'body', 'user_id'];

  public function user()
  {
      return $this->belongsTo('App\Models\User');
  }

  public function tags()
  {
      return  $this->morphToMany('App\Models\Tag', 'taggable');
  }
}
