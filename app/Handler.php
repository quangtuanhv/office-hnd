<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Handler extends Model
{
    public function state(){
        return $this->belongsTo('App\State','id_state','id');
    }
    public function user(){
        return $this->belongsTo('App\User','handler','id');
    }
}
