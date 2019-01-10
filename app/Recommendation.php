<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    //
   
    public function type()
    {
        return $this->hasMany('App\Type');
    }

  
   

    
}
