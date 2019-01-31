<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
  public function forums()
  {
      return  $this->hasManyThrough('App\Models\Forum', 'App\Models\User');
  }
}
