<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function profile(){
        return $this->hasOne('App\Profile');
    }
    public function events(){
        return $this->hasMany('App\Event');
    }
    public function calendalSuite(){
        return $this->hasMany('App\CalendalSuite');
    }
    public function handlers(){
        return $this->hasMany('App\Handler','handler','id');
    }
    public function states(){
        return $this->hasMany('App\State','id_handler','id');
    }
    public function opinions(){
        return $this->hasMany('App\Opinion','user_id','id');
    }
    public function comments(){
        return $this->hasMany('App\Comment','user_id','id');
    }
}
