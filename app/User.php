<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $fillable = ['name', 'gender', 'department_id'];

    public function member(){
        return $this->hasOne('App\Member');
    }
}
