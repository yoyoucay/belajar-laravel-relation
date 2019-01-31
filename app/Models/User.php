<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    public function passport()
    {
        return $this->hasOne('App\Models\Passport');
    }

    public function forums()
    {
        return  $this->hasMany('App\Models\Forum');
    }

    public function lessons()
    {
        return  $this->belongsToMany('App\Models\Lesson');
    }
}
