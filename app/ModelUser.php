<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ModelUser extends Model
{
    //
    protected $table = 'users';
    protected $fillable = ['username', 'password', 'member_id'];

    public static function new_user($member_data){
        ModelUser::create([
            'username' => str_replace(' ','_',strtolower($member_data->name)),
            'password' => Str::random(12),
            'member_id' => $member_data->id
        ]);
    }
}
