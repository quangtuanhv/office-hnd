<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function position(){
        return $this->belongsTo('App\Position');
    }
    public function suite(){
        return $this->belongsTo('App\Suite');
    }
    public function roles(){
        return $this->belongsToMany('App\Role');
    }
}
