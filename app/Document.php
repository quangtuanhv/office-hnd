<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function user(){
		return $this->belongsTo('App\User','nguoisoan','id');
    }
    public function states(){
        return $this->hasMany('App\State','id_document','id');
    }
}
