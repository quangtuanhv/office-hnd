<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function document(){
        return $this->belongsTo('App\Document','id_document','id');
    }
    public function handlers(){
        return $this->hasMany('App\Handler','id_state','id');
    }
    public function user(){
        return $this->belongsTo('App\User','id_handler','id');
    }
}
