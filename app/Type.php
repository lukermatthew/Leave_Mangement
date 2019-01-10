<?php

namespace App;
use App\Recommendation;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //
    public function requestleave()
    {
        return $this->hasMany('App\Requestleave');
    }

    public function recommendation()
    {
        return $this->belongsTo('App\Recommendation');
    }



}
