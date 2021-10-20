<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
    * The roles that belong to the user.
    */
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }
}