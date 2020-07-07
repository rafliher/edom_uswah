<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EdomRating extends Model
{
    //
    protected $table = 'edom_ratings';
    protected $guarded = [];

    public function edomAspect(){
        return $this->belongsTo('App\EdomAspect', 'aspect_id');
    }
    public function rater_member(){
        return $this->belongsTo('App\Member', 'rater_id');
    }
    public function rated_member(){
        return $this->belongsTo('App\Member', 'rated_id');
    }
}
