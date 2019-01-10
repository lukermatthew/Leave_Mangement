<?php

namespace App;

use App\User;
use App\Type;
use Illuminate\Database\Eloquent\Model;

class Requestleave extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function type()
    {
        return $this->belongsTo('App\Type');
    }
}
