<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
  protected $touchers = ['user'];

  public function user()
  {
      return $this->belongsTo('App\Models\User');
  }
}
