<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EdomAspect extends Model
{
    //
    public function edomRating(){
        return $this->hasMany('App\EdomRating');
    }
}
